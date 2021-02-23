<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Module;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Auth;

class ModulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules = Module::simplePaginate(5);
        $classes = Kelas::all();
        $count = Module::all()->count();
        return view('admin.classes.modules.index', compact('modules', 'count', 'classes'))->with('title', 'Modul');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = Kelas::all();
        return view('admin.classes.modules.create', compact('classes'));
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
            'author' => 'required',
            'kelas_id' => 'required',
            'date' => 'required',
            'metades' => 'required',
            'content' => 'required'
        ]);

        $module = Module::create([
            'title' => $request->title,
            'nomor_module' => $request->nomor_module,
            'author' => $request->author,
            'kelas_id' => $request->kelas_id,
            'date' => $request->date,
            'metades' => $request->metades,
            'content' => $request->content,
            'slug' => Str::slug($request->title),
            'user_id' => Auth::id()
        ]);
        return redirect()->back()->with('success', 'Modul Berhasil Disimpan!');
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
    public function edit($id)
    {
        $classes = Kelas::all();
        $module = Module::findorfail($id);
        return view('admin.classes.modules.edit', compact('classes', 'module'))->with('title', 'Edit Modul');
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
            'title' => 'required|min:3',
            'author' => 'required',
            'kelas_id' => 'required',
            'nomor_module' => 'required',
            'date' => 'required',
            'metades' => 'required',
            'content' => 'required'
        ]);
        Module::where('id', $id)->update([
            'title' => $request->title,
            'author' => $request->author,
            'kelas_id' => $request->kelas_id,
            'nomor_module' => $request->nomor_module,
            'date' => $request->date,
            'slug' => Str::slug($request->title),
            'metades' => $request->metades,
            'content' => $request->content
        ]);

        return redirect('modules')->with('status', 'Data Modul Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $module = Module::findorfail($id);
        $module->delete();

        return redirect('modules')->with('status', 'Modul Berhasil Dihapus!');
    }

    public function trash()
    {
        $modules = Module::onlyTrashed()->simplePaginate(5);
        $classes = Kelas::all();
        $count = Module::onlyTrashed()->count();
        return view('admin.classes.modules.trash', compact('modules', 'count', 'classes'))->with('title', 'Trash');
    }

    public function restore($id)
    {
        $module = Module::withTrashed()->where('id', $id)->first();
        $module->restore();

        return redirect()->back()->with('status', 'Modul berhasil direstore!');
    }

    public function kill($id)
    {
        $module = Module::withTrashed()->where('id', $id)->first();
        $module->forceDelete();

        return redirect()->back()->with('status', 'Modul Berhasil Dihapus Secara Permanen');
    }
}
