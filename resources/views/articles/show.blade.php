@extends('templates.article')
@section('title', $post->title)
@section('metades', $post->metades)
@section('main')
<br><br><br>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb px-5">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ url('/articles') }}">Daftar Artikel</a></li>
        <li class="breadcrumb-item active" aria-current="page">Detail Artikel</li>
    </ol>
</nav>

<div class="row justify-content-center mb-5">
    <div class="col-md-8 ml-3">
        <div class="nav nav-tabs" id="myTab" role="tablist">
            <span class="text-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                </svg> <strong>{{ $post->users->name }}</strong></span>
            <span class="ml-4"><small class="text-muted">Diperbarui {{ $post->tanggal }}</small></span>

        </div>
        <div class="tab-content mt-4" id="myTabContent">
            <h1><strong>{{ $post->title }}</strong></h1>
            <img src="{{ asset($post->image) }}" alt="" width="90%" class="my-3">
            {!! $post->sumberimg !!}
            <div class="tab-pane fade show active mt-3" id="home" role="tabpanel" aria-labelledby="home-tab" style="line-height: 30px;">{!! $post->content !!}</div>
        </div>
    </div>
    <div class="col-md-3 mt-4 p-2">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center"><b>Artikel Terbaru</b></h5>
                <ul>
                    @foreach($articles as $article)
                    <li><a href="{{ url('articles/'.$article->slug)}}">{{ $article->title }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>


@endsection