<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function store(Post $post, PostRequest $request)  //投稿を保存する処理
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }

    public function index(post $post)  //投稿一覧を表示
    {
        return view('posts.index')->with(['posts'=>$post->getPaginateByLimit()]);
    }
    
    public function show(Post $post)  //投稿詳細を表示
    {
        return view('posts.show')->with(['post' =>$post]);
         //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }

    public function create()  //新規投稿作成フォームを表示
    {
        return view('posts.create');
    }
}
