@extends('templates.article')
@section('title', 'Daftar Artikel')
@section('metades', 'Daftar Artikel Tahun Ini')
@section('main')

<br><br><br>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb px-5">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ url('/articles') }}">Artikel</a></li>
        <li class="breadcrumb-item active" aria-current="page">Daftar Artikel</li>
    </ol>
</nav>

<div class="jumbotron bg-dark text-white">
    <h1 class="display-4">Daftar Artikel</h1>
    <p class="lead">Memperluas wawasan pengetahuan seputar ilmu komputasi dengan membaca artikel.</p>
    <hr class="my-4 bg-warning">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
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
                <div class="col-md-3">
                    <img src="{{ asset($post->image) }}" class="m-3" alt="..." width="300">
                </div>
                <div class="col-md-9 my-auto">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <hr>
                        <span class="card-text">Kategori : <span class="text-info">
                                @foreach( $categories as $category)
                                @if($post->category_id == $category->id)
                                {{ $category->name }}
                                @endif
                                @endforeach
                            </span></span>
                        <br>
                        <span class="card-text">Penulis : <span class="text-info">{{ $post->users->name }}</span></span>
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