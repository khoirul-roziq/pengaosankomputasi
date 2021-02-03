@extends('templates.admin')

@section('main')

<form action="{{ route('users.store') }}" method="post">
    @csrf
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
        <div class="invalid-feedback">
            @error('name')
                {{ $message }}
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
        <div class="invalid-feedback">
            @error('email')
                {{ $message }}
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label>Type User</label>
        <select name="type" id="type" class="form-control @error('type') is-invalid @enderror">
            <option value="" holder>-- Pilih Type User --</option>
            <option value="1">Administrator</option>
            <option value="0">Author</option>
        </select>
        <div class="invalid-feedback">
            @error('type')
                {{ $message }}
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}">
        <div class="invalid-feedback">
            @error('password')
                {{ $message }}
            @enderror
        </div>
    </div>
    <div class="form-group">
        <button class="btn btn-primary btn-block">Simpan User</button>
    </div>
</form>

@endsection