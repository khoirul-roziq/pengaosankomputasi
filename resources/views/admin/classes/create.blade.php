@extends('templates.content')
@section('title', 'Buat Kelas')
@section('main')



<main>
    <form action="{{ route('classes.store') }}" method="post" enctype="multipart/form-data">
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
            <label>Nama Kelas</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
            <div class="invalid-feedback">
                @error('name')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label>Mentor</label>
            <input type="text" class="form-control @error('mentor') is-invalid @enderror" name="mentor" value="{{ old('mentor') }}">
            <div class="invalid-feedback">
                @error('mentor')
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
            <label>Thumbnail</label>
            <input type="file" name="thumbnail" id="thumbnail" class="form-control @error('thumbnail') is-invalid @enderror">
            <div class="invalid-feedback">
                @error('thumbnail')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label>Tanggal</label>
            <input type="text" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}">
            <div class="invalid-feedback">
                @error('date')
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
        <div class="form-group">
            <button class="btn btn-primary btn-block">Simpan Kelas</button>
        </div>
    </form>
</main>

@endsection