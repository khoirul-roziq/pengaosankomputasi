@extends('templates.admin')

@section('main')

<form action="{{ route('tags.store') }}" method="post">
    @csrf
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="form-group">
        <label>Tag</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
        <div class="invalid-feedback">
            @error('name')
                {{ $message }}
            @enderror
        </div>
    </div>
    <div class="form-group">
        <button class="btn btn-primary btn-block">Simpan Tag</button>
    </div>
</form>

@endsection