<?php

namespace Animex\Http\Controllers\Admin;

use Animex\Http\Requests\PostsRequest;
use Animex\Models\Category;
use Animex\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Animex\Http\Controllers\Controller;

class PostsController extends Controller
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
        $posts = Post::with(['category' => function($query) {
            $query->select('id', 'name', 'slug');
        }])->limit(100)->get();

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::select('id','name')->get();

        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostsRequest $request)
    {
        $post = new Post($request->all());
        $post->user_id = auth()->user()->id;
        $post->save();

        session()->flash('message', 'Se ha creado el post "'.$post->title.'" exitosamente');

        return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::with(['category' => function($query) {
            $query->select('id', 'name', 'slug');
        }])
            ->with(['user' => function($query) {
                $query->select('id','username');
            }])
            ->where('id', $id)->first();

        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post =  Post::find($id);
        $categories = Category::select('id','name')->get();

        return view('admin.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostsRequest $request, $id)
    {
        $post = Post::find($id);

        $post->category_id = $request->category_id;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->subtitle = $request->subtitle;
        $post->image = $request->image;
        $post->image_alt = $request->image_alt;
        $post->content = $request->content;
        $post->seo_title = $request->seo_title;
        $post->seo_description = $request->seo_description;
        $post->meta_robots = $request->meta_robots;
        $post->published_at = Carbon::parse($request->published_at);

        $post->save();

        session()->flash('message', "Se actualizo correctamente el post: \"{$post->title}\"");

        return redirect()->route('admin.posts.index');
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
        $post = Post::where('id', $id)->select('id','title', 'active')->first();

        if($post->active) {
            $message = 'desactivó';
            $post->active = 0;
        } else {
            $message = 'activó';
            $post->active = 1;
        }

        // Save active status to database
        $post->save();

        session()->flash('message', "Se {$message} correctamente el post: \"{$post->title}\"");

        return redirect()->route('admin.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::where('id', $id)->select('id', 'title')->first();
        $post->delete();

        session()->flash('message', "Se eliminó correctamente el post: \"{$post->title}\"");

        return redirect()->route('admin.posts.index');
    }
}
