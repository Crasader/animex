<?php

namespace Animex\Http\Controllers\Admin;

use Animex\Http\Requests\UsersCreateRequest;
use Animex\Http\Requests\UsersUpdateRequest;
use Animex\Models\User;
use Illuminate\Http\Request;
use Animex\Http\Controllers\Controller;

class UsersController extends Controller
{
    function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UsersRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersCreateRequest $request)
    {
        $user = new User($request->except('password'));

        // Password Encryption
        $user->password = bcrypt($request->password);

        $user->save();

        session()->flash('message', 'Se ha creado usuario "'.$user->username.'" exitosamente');

        return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param string $username
     * @return \Illuminate\Http\Response
     */
    public function show($username)
    {
        $user = User::where('username', $username)->first();

        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UsersUpdateRequest $request
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function update(UsersUpdateRequest $request, User $user)
    {
        $user->update($request->except(['password', 'password_confirmation']));

        if ($request->password && $request->password !== $user->password) :
            $user->password = bcrypt($request->password);
            $user->save();
        endif;

        session()->flash('message', "Se actualizo correctamente el usuario: \"{$user->username}\"");

        return redirect()->route('admin.users.index');
    }

    /**
     * Update the status of resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function status(Request $request, $id)
    {
        $user = User::where('id', $id)->select('id','username', 'active')->first();

        if($user->active) {
            $message = 'desactivó';
            $user->active = 0;
        } else {
            $message = 'activó';
            $user->active = 1;
        }

        // Save active status to database
        $user->save();

        session()->flash('message', "Se {$message} correctamente el usuario: \"{$user->username}\"");

        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(User $user)
    {
        $user->delete();

        session()->flash('message', "Se eliminó correctamente el usuario: \"{$user->username}\"");

        return redirect()->route('admin.users.index');
    }
}