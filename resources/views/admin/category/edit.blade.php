@extends('templates.admin')

@section('main')

<form action="{{ route('category.update', $category->id ) }}" method="post">
    @csrf
    @method('patch')
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="form-group">
        <label>Kategori</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $category->name }}">
        <div class="invalid-feedback">
            @error('name')
                {{ $message }}
            @enderror
        </div>
    </div>
    <div class="form-group">
        <button class="btn btn-primary btn-block">Simpan Kategori</button>
    </div>
</form>

@endsection