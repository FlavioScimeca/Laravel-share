<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View as FacadesView;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $user_id = Auth::user()->id;
        $posts = Post::where("user_id", $user_id)->get();
        return view("post.index", compact("posts") );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view("post.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
