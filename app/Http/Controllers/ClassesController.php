<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Kelas;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Auth;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = Kelas::simplePaginate(5);
        $count = Kelas::all()->count();
        return view('admin.classes.index', compact('classes', 'count'))->with('title', 'Kelas');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.classes.create', compact('categories'));
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
            'name' => 'required|min:3',
            'mentor' => 'required',
            'category_id' => 'required',
            'thumbnail' => 'required',
            'date' => 'required',
            'metades' => 'required'
        ]);

        $kelas = new Kelas;

        $kelas->name = $request->name;
        $kelas->mentor = $request->mentor;
        $kelas->category_id = $request->category_id;
        $kelas->thumbnail = $request->file('thumbnail')->move('uploads/kelas', Str::slug($request->name) . $request->file('thumbnail')->getClientOriginalName());
        $kelas->date = $request->date;
        $kelas->metades = $request->metades;
        $kelas->slug = Str::slug($request->name);
        $kelas->user_id = Auth::id();

        $query = $kelas->save();

        if ($query) {
            return back()->with('success', 'Anda Berhasil Membuat Kelas!');
        } else {
            return back()->with('fail', 'Anda Gagal Membuat Kelas!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
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
        $kelas = Kelas::findorfail($id);
        return view('admin.classes.edit', compact('kelas', 'categories'))->with('title', 'Edit Kelas');
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
        $request->validate([
            'name' => 'required|min:3',
            'mentor' => 'required',
            'category_id' => 'required',
            'date' => 'required',
            'metades' => 'required'
        ]);

        if ($request->thumbnail) {
            $nameThumbnail = DB::table('classes')->where('id', $id)->first();
            File::delete($nameThumbnail->thumbnail);
            Kelas::where('id', $id)->update([
                'thumbnail' => $request->file('thumbnail')->move('uploads/kelas', Str::slug($request->title) . $request->file('thumbnail')->getClientOriginalName())
            ]);
        }
        Kelas::where('id', $id)->update([
            'name' => $request->name,
            'mentor' => $request->mentor,
            'category_id' => $request->category_id,
            'date' => $request->date,
            'slug' => Str::slug($request->name),
            'metades' => $request->metades,
        ]);

        return redirect('classes')->with('status', 'Data Kelas Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelas = Kelas::findorfail($id);
        $kelas->delete();

        return redirect('classes')->with('status', 'Kelas Berhasil Dihapus!');
    }

    public function trash()
    {
        $classes = Kelas::onlyTrashed()->simplePaginate(5);
        $count = Kelas::onlyTrashed()->count();
        return view('admin.classes.trash', compact('classes', 'count'))->with('title', 'Trash');
    }

    public function restore($id)
    {
        $kelas = Kelas::withTrashed()->where('id', $id)->first();
        $kelas->restore();

        return redirect()->back()->with('status', 'Kelas berhasil direstore!');
    }

    public function kill($id)
    {
        $kelas = Kelas::withTrashed()->where('id', $id)->first();
        File::delete($kelas->image);
        $kelas->forceDelete();

        return redirect()->back()->with('status', 'Kelas Berhasil Dihapus Secara Permanen');
    }
}
