<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
    public function index()
    {
        $posts = BlogPost::all();
//        return $posts;
        return view('blog.index', [
            'posts' => $posts
        ]);
    }

//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
    public function create()
    {
        return view('blog.create');
    }

//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
    public function store(Request $request)
    {
//        $title = $request->old('title');
        $validatedData = $request->validateWithBag('post', [
            'title' => 'bail|required|unique:blog_posts|min:10|max:20',
            'body' => 'required|min:10|max:255',
//            'author.name' => 'required'
        ]);



        // mass assignment
        $newPost = BlogPost::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => 1
        ]);
        return redirect('blog/'. $newPost->id);
    }

//    /**
//     * Display the specified resource.
//     *
//     * @param  \App\Models\BlogPost  $blogPost
//     * @return \Illuminate\Http\Response
//     */
    public function show(BlogPost $blogPost)
    {
//        return $blogPost;
        return view('blog.show', [
            'post' => $blogPost
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogPost  $blogPost
//     * @return \Illuminate\Http\Response
     */
    public function edit(BlogPost $blogPost)
    {
        return view('blog.edit', [
            'post' => $blogPost
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogPost  $blogPost
//     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogPost $blogPost)
    {
        $blogPost->update([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return redirect('/blog/'. $blogPost->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogPost  $blogPost
//     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogPost $blogPost)
    {
        $blogPost->delete();
        return redirect('/blog');
    }
}
