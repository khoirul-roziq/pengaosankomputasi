<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Type;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::simplePaginate(5);
        $count = Post::all()->count();
        return view('admin.posts.index', compact('posts', 'count'))->with('title', 'Posts');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'))->with('title', 'Tambah Post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'category_id' => 'required',
            'content' => 'required',
            'tanggal' => 'required',
            'metades' => 'required',
            'sumberimg' => 'required',
            'image' => 'required'
        ]);

        $post = new Post;

        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->type = $request->type;
        $post->content = $request->content;
        $post->tanggal = $request->tanggal;
        $post->metades = $request->metades;
        $post->image = $request->file('image')->move('uploads/post', Str::slug($request->title) . $request->file('image')->getClientOriginalName());
        $post->sumberimg = $request->sumberimg;
        $post->slug = Str::slug($request->title);
        $post->users_id = Auth::id();

        $query = $post->save();

        if ($query) {
            return back()->with('success', 'Anda Berhasil Membuat Post!');
        } else {
            return back()->with('fail', 'Anda Gagal Membuat Post!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $post = Post::findorfail($id);
        // return view('guest.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $post = Post::findorfail($id);
        return view('admin.posts.edit', compact('post', 'categories'))->with('title', 'Edit Post');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|min:3',
            'category_id' => 'required',
            'content' => 'required',
        ]);
        if ($request->image) {
            $nameImage = DB::table('posts')->where('id', $post->id)->first();
            File::delete($nameImage->image);
            Post::where('id', $post->id)->update([
                'image' => $request->file('image')->move('uploads/post', Str::slug($request->title) . $request->file('image')->getClientOriginalName())
            ]);
        }
        Post::where('id', $post->id)->update([
            'title' => $request->title,
            'tanggal' => $request->tanggal,
            'sumberimg' => $request->sumberimg,
            'metades' => $request->metades,
            'category_id' => $request->category_id,
            'type' => $request->type,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
        ]);

        return redirect('posts')->with('status', 'Data Post Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findorfail($id);
        $post->delete();

        return redirect('posts')->with('status', 'Post Berhasil Dihapus!');
    }

    public function trash()
    {
        $posts = Post::onlyTrashed()->simplePaginate(5);
        $count = Post::onlyTrashed()->count();
        return view('admin.posts.trash', compact('posts', 'count'))->with('title', 'Trash');
    }

    public function restore($id)
    {
        $post = Post::withTrashed()->where('id', $id)->first();
        $post->restore();

        return redirect()->back()->with('status', 'Post berhasil direstore!');
    }

    public function kill($id)
    {
        $post = Post::withTrashed()->where('id', $id)->first();
        File::delete($post->image);
        $post->forceDelete();

        return redirect()->back()->with('status', 'Post Berhasil Dihapus Secara Permanen');
    }
}
