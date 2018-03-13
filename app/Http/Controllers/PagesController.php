<?php

namespace Animex\Http\Controllers;

use Animex\Models\Post;
use Animex\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $posts = Post::select(['title','slug', 'content', 'image', 'image_alt', 'user_id', 'created_at'])
            ->with(['user' => function($query) {
                $query->select(['id', 'first_name', 'last_name', 'username']);
            }])
            ->limit(4)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.home', compact('posts'));
    }

    /**
     * Show post for public page
     *
     * @param string $slug
     *
     * @return \Illuminate\Http\Response\Response
     */
    public function post($slug)
    {
        $post = Post::where('slug', $slug)->first();

        return view('pages.post', compact('post'));
    }
}
