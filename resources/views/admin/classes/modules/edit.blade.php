@extends('templates.content')
@section('title', 'Edit Modul')
@section('main')

<form action="{{ route('modules.update', $module->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('patch')
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="form-group">
        <label>Judul Modul</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $module->title }}">
        <div class="invalid-feedback">
            @error('title')
            {{ $message }}
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label>Penulis</label>
        <input type="text" class="form-control @error('author') is-invalid @enderror" name="author" value="{{ $module->author }}">
        <div class="invalid-feedback">
            @error('author')
            {{ $message }}
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label>Kelas</label>
        <select class="form-control @error('kelas_id') is-invalid @enderror" name="kelas_id" id="kelas_id">
            <option value="" holder>-- Pilih Kategori --</option>
            @foreach( $classes as $kelas)
            <option value="{{ $kelas->id }}" @if( $module->kelas_id == $kelas->id )
                selected
                @endif
                >{{ $kelas->name }}</option>
            @endforeach
        </select>
        <div class="invalid-feedback">
            @error('kelas_id')
            {{ $message }}
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label>Nomor Modul</label>
        <input type="text" class="form-control @error('nomor_module') is-invalid @enderror" name="nomor_module" value="{{ $module->nomor_module }}">
        <div class="invalid-feedback">
            @error('nomor_module')
            {{ $message }}
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label>Tanggal</label>
        <input type="text" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ $module->date }}">
        <div class="invalid-feedback">
            @error('date')
            {{ $message }}
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label>Meta Deskripsi</label>
        <input type="text" class="form-control @error('metades') is-invalid @enderror" name="metades" value="{{ $module->metades }}">
        <div class="invalid-feedback">
            @error('metades')
            {{ $message }}
            @enderror
        </div>
    </div>
    <header class="header-a">
        <div class="grid-container">
            <h3 class="header-a-logo grid-width-30">

            </h3>

            <nav class="navigation-b grid-width-70">
                <ul>
                    <li><a href="index.html" class="button-a button-a-background">Start</a></li>
                    <li><a href="toolbarconfigurator/index.html" class="button-a">Toolbar configurator <span class="balloon-a balloon-a-nw">Edit your toolbar now!</span></a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="adjoined-top">
        <div class="grid-container">
            <div class="content grid-width-100">
                <h1>Content</h1>
            </div>
        </div>
    </div>
    <div class="adjoined-bottom">
        <div class="grid-container">
            <div class="grid-width-100">
                <textarea id="editor" name="content">
                {{ $module->content }}
                </textarea>
            </div>
        </div>
    </div>
    <div class="form-group">
        <button class="btn btn-primary btn-block">Simpan Perubahan</button>
    </div>
</form>

@endsection