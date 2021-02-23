@extends('templates.content')
@section('title', 'Buat Postingan')
@section('main')



<main>
    <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        @if (session('fail'))
        <div class="alert alert-danger">
            {{ session('fail') }}
        </div>
        @endif
        <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
            <div class="invalid-feedback">
                @error('title')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label>Kategori</label>
            <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" id="category_id">
                <option value="" holder>-- Pilih Kategori --</option>
                @foreach( $categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <div class="invalid-feedback">
                @error('category_id')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label>Type</label>
            <select class="form-control @error('type') is-invalid @enderror" name="type" id="type">
                <option value="" holder>-- Pilih Type --</option>
                <option value="Artikel">Artikel</option>
                <option value="Tutorial">Tutorial</option>
            </select>
            <div class="invalid-feedback">
                @error('type')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label>Thumbnail</label>
            <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
            <div class="invalid-feedback">
                @error('image')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label>Sumber Thumbnail</label>
            <input type="text" class="form-control @error('sumberimg') is-invalid @enderror" name="sumberimg" value="{{ old('sumberimg') }}">
            <div class="invalid-feedback">
                @error('sumberimg')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label>Tanggal</label>
            <input type="text" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ old('tanggal') }}">
            <div class="invalid-feedback">
                @error('tanggal')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label>Meta Deskripsi</label>
            <input type="text" class="form-control @error('metades') is-invalid @enderror" name="metades" value="{{ old('metades') }}">
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

				</textarea>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button class="btn btn-primary btn-block">Simpan Post</button>
        </div>
    </form>
</main>

@endsection