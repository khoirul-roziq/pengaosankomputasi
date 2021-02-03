<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use Illuminate\Support\Str;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::simplePaginate(5);
        $count = Tag::all()->count();
        return view('admin.tags.index', compact('tags'), compact('count'))->with('title', 'Tags');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.create')->with('title', 'Tambah Tag');
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
            'name' => 'required|min:3'
        ]);

        $post = Tag::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);
        return redirect()->back()->with('success', 'Tag Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', compact('tag'))->with('title', 'Edit Tag');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => 'required|min:3'
        ]);

        Tag::where('id', $tag->id)->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);

        return redirect()->route('tags.index')->with('status', 'Tag Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        Tag::destroy($tag->id);
        return redirect()->route('tags.index')->with('status', 'Tag Berhasil Dihapus!');
    }
}
