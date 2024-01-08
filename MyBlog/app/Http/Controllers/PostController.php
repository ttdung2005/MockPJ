<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //postテーブルからtitle,userIdを$usersに格納
        $posts = DB::table('posts')
            ->select('id', 'title', 'userId')
            ->get();

        //viewを返す(compactでviewに$postsを渡す)
        return view('post/index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new Post;

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->userId = $request->input('userId');

        $post->save();

        //一覧表示画面にリダイレクト
        return redirect('post/index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);

        return view('post/show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);

        return view('post/edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::find($id);

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->userId = $request->input('userId');

        //DBに保存
        $post->save();

        //処理が終わったらpost/indexにリダイレクト
        return redirect('post/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post=Post::find($id);

        $post->delete();
    
        return redirect('post/index');
    }
}
