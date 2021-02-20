@extends('templates.content')
@section('title', 'Edit Kelas')
@section('main')

<form action="{{ route('classes.update', $kelas->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('patch')
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="form-group">
        <label>Nama Kelas</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $kelas->name }}">
        <div class="invalid-feedback">
            @error('name')
            {{ $message }}
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label>Mentor</label>
        <input type="text" class="form-control @error('mentor') is-invalid @enderror" name="mentor" value="{{ $kelas->mentor }}">
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
            <option value="{{ $category->id }}" @if( $kelas->category_id == $category->id )
                selected
                @endif
                >{{ $category->name }}</option>
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
        <input type="text" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ $kelas->date }}">
        <div class="invalid-feedback">
            @error('date')
            {{ $message }}
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label>Meta Deskripsi</label>
        <input type="text" class="form-control @error('metades') is-invalid @enderror" name="metades" value="{{ $kelas->metades }}">
        <div class="invalid-feedback">
            @error('metades')
            {{ $message }}
            @enderror
        </div>
    </div>
    <div class="form-group">
        <button class="btn btn-primary btn-block">Simpan Perubahan</button>
    </div>
</form>

@endsection