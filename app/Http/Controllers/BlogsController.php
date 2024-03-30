<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 日記一覧を取得
        $blogs = blog::all();         // 追加

        // 日記一覧ビューでそれを表示
        return view('blogs.index', [     // 追加
            'blogs' => $blogs,        // 追加
        ]);                                 // 追加
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog = new Blog;

        // メッセージ作成ビューを表示
        return view('blogs.create', [
            'blog' => $blog,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 日記を作成
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->save();

        // トップページへリダイレクトさせる
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // idの値で日記を検索して取得
        $blog = Blog::findOrFail($id);

        // 日記詳細ビューでそれを表示
        return view('blogs.show', [
            'blog' => $blog,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // idの値で日記を検索して取得
        $blog = Blog::findOrFail($id);

        // 日記編集ビューでそれを表示
        return view('blogs.edit', [
            'blog' => $blog,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // idの値で日記を検索して取得
        $blog = Blog::findOrFail($id);
        // 日記を更新
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->save();

        // トップページへリダイレクトさせる
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // idの値で日記を検索して取得
        $blog = Blog::findOrFail($id);
        // 日記を削除
        $blog->delete();

        // トップページへリダイレクトさせる
        return redirect('/');
    }
}
