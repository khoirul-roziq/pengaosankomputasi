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

<div class="penulis">
    <h2>Pengisi Materi</h2>
    <div class="imgProfil"></div>
    <h3>KHOIRUL ROZIQ</h3>
    <h4>Informatics Engineering</h4>
    <div class="sosmed">
        <div class="sos"> <a href="https://web.facebook.com/khoirul.roziq.39"><img src="{{ url('assets/img/proFb.png') }}" alt="" width="30"></a></div>
        <div class="sos"> <a href="https://twitter.com/roziq_khoirul"><img src="{{ url('assets/img/proTw.png') }}" alt="" width="30"></a></div>
        <div class="sos"> <a href="https://www.instagram.com/roziq.khoirul"><img src="{{ url('assets/img/proIg.png') }}" alt="" width="30"></a></div>
    </div>
</div>
@endsection