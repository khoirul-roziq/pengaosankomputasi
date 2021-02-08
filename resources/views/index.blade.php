@extends('templates/halaman')
@section('title', 'Dashboard')
@section('main')

<div class="landingPage">
    <h2 class="my-3"><b>PENGAOSAN KOMPUTASI</b></h2>
    <hr>
    <p>Situs Belajar Keilmuan Komputasi dan Media Berbagi Pengalaman <br>
    Jangan Lupa Berdoa Sebelum dan Sesudah Belajar<br>
    Semoga Keberkahan Terlimpahkan Untuk Kita Semua
    </p>
    <a href="#" class="btn btn-outline-primary">Mulai Belajar</a>
    <button class="btn btn-"></button>
</div>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ url('assets/img/img1.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ url('assets/img/img2.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ url('assets/img/img3.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section class="type mx-5">
<div class="row justify-content-center mt-5">
  <div class="col-md-6">
    <div class="card mb-3">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="{{ asset('assets/img/img1.jpg')}}" alt="..." width="200" height="250">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Kelas Pembelajaran</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            <a href="#" class="btn btn-primary btn-sm px-4">Kunjungi</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card mb-3">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="{{ asset('assets/img/img1.jpg')}}" alt="..." width="200" height="250">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Artikel Komputasi</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            <a href="#" class="btn btn-primary btn-sm px-4">Kunjungi</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<section class="posts">
  <h2 class="text-center my-4">Apasih Yang Terbaru?</h2>
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card mb-3">
        <img src="{{ asset('assets/img/img2.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card bg-dark text-white">
        <img src="{{ asset('assets/img/img1.jpg')}}" class="card-img" alt="..." height="245">
        <div class="card-img-overlay">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text">Last updated 3 mins ago</p>
        </div>
      </div>
      <div class="card bg-dark text-white mt-4">
        <img src="{{ asset('assets/img/img1.jpg')}}" class="card-img" alt="..." height="245">
        <div class="card-img-overlay">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text">Last updated 3 mins ago</p>
        </div>
      </div> 
    </div>
  </div>
</section>


<!-- <div class="container">
@foreach($posts as $post)
<div class="card mb-3">
  <img src="{{ $post->image }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $post->title }}</h5>
    <p class="card-text">{!! $post->content !!}</p>
    <p class="card-text"><small class="text-muted">{{ $post->created_at }}</small></p>
  </div>
</div>
@endforeach
</div> -->

<div class="penulis bg-dark">
    <h2>Pengisi Materi</h2>
    <div class="imgProfil"></div>
    <h3>KHOIRUL ROZIQ</h3>
    <h4>Software Developer</h4>
    <div class="sosmed">
        <div class="sos"> <a href="https://web.facebook.com/khoirul.roziq.39"><img src="{{ url('assets/img/proFb.png') }}" alt="" width="30"></a></div>
        <div class="sos"> <a href="https://twitter.com/roziq_khoirul"><img src="{{ url('assets/img/proTw.png') }}" alt="" width="30"></a></div>
        <div class="sos"> <a href="https://www.instagram.com/roziq.khoirul"><img src="{{ url('assets/img/proIg.png') }}" alt="" width="30"></a></div>
    </div>
</div>


@endsection