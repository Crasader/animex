<?php

namespace Animex\Http\Controllers\Admin;

use Animex\Http\Requests\CategoriesRequest;
use Animex\Models\Category;
use Illuminate\Http\Request;
use Animex\Http\Controllers\Controller;

class CategoriesController extends Controller
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
        $categories = Category::all();

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoriesRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriesRequest $request)
    {
        $category = Category::create($request->all());

        session()->flash('message', 'Se ha creado la categoría "'.$category->name.'" exitosamente');

        return redirect()->route('admin.categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('admin.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoriesRequest $request
     * @param Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriesRequest $request, Category $category)
    {
        $category->update($request->all());

        session()->flash('message', "Se actualizo correctamente la categoría: \"{$category->name}\"");

        return redirect()->route('admin.categories.index');
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
        $category = Category::where('id', $id)->select('id','name', 'active')->first();

        if($category->active) {
            $message = 'desactivó';
            $category->active = 0;
        } else {
            $message = 'activó';
            $category->active = 1;
        }

        // Save active status to database
        $category->save();

        session()->flash('message', "Se {$message} correctamente la categoría: \"{$category->name}\"");

        return redirect()->route('admin.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Category $category)
    {
        $category->delete();

        session()->flash('message', "Se eliminó correctamente la categoría: \"{$category->name}\"");

        return redirect()->route('admin.categories.index');
    }
}
