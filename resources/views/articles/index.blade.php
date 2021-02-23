@extends('templates.article')
@section('title', 'Daftar Artikel')
@section('metades', 'Daftar Artikel Tahun Ini')
@section('main')

<br><br><br>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb px-5">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Daftar Artikel</li>
    </ol>
</nav>

<div class="jumbotron bg-dark text-white">
    <h1 class="display-4">Daftar Artikel</h1>
    <hr class="my-4 bg-warning">
    <p class="lead">Memperluas wawasan pengetahuan seputar ilmu komputasi dengan membaca artikel</p>
</div>

<div class="card">
    <div class="card-header">
        <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
                <a class="nav-link active" href="#">Semua</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        @foreach($posts as $post)
        <div class="card mb-3 mx-2">
            <div class="row no-gutters">
                <div class="col-lg-4 my-auto">
                    <img src="{{ asset($post->image) }}" class="m-3" alt="..." width="300">
                </div>
                <div class="col-lg-8 my-auto">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <hr>
                        <p>{{ $post->metades }}</p>
                        <p class="card-text"><small class="text-muted">Pembaharuan Terakhir {{ $post->tanggal }}</small></p>
                        <a href="{{ url('articles/'.$post->slug) }}" class="btn btn-primary btn-sm">Baca Artikel</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection