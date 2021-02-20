@extends('templates/halaman')
@section('title', 'Situs Belajar Keilmuan Komputasi Secara Gratis dan Media Berbagi Pengalaman')
@section('main')

<div class="landingPage">
  <h2 class="my-3"><b>PENGAOSAN KOMPUTASI</b></h2>
  <hr>
  <p>Situs Belajar Keilmuan Komputasi Secara Gratis dan Media Berbagi Pengalaman <br>
    Jangan Lupa Berdoa Sebelum dan Sesudah Belajar<br>
    Semoga Keberkahan Terlimpahkan Untuk Kita Semua
  </p>
  <a href="#fasilitas" class="btn btn-outline-primary">Mulai Belajar</a>
  <button class="btn btn-"></button>
</div>

<div class="container text-center mt-5 pt-5 mb-5">
  <h2 class="text-danger"><strong>Belajar di<br>Situs Pengaosan Komputasi</strong></h2>
  <p>Ada 5 Fasilitas Media Belajar Yang Bisa Digunakan Untuk Meningkatkan<br>
    Kemampuan Dalam Keilmuan Komputer</p>
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

<section class="posts">
  <h2 class="text-center my-4 text-primary">Apasih Yang Terbaru?</h2>
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card mb-3">
        <img src="{{ asset('assets/img/img2.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body py-5">
          <h5 class="card-title">Belajar Komputasional Thinking</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card bg-dark text-white">
        <img src="{{ asset('assets/img/img1.jpg')}}" class="card-img" alt="..." height="245">
        <div class="card-img-overlay">
          <h5 class="card-title">IoT</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text">Last updated 3 mins ago</p>
        </div>
      </div>
      <div class="card bg-dark text-white mt-4">
        <img src="{{ asset('assets/img/img1.jpg')}}" class="card-img" alt="..." height="245">
        <div class="card-img-overlay">
          <h5 class="card-title">Programing</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text">Last updated 3 mins ago</p>
        </div>
      </div>
    </div>
  </div>
</section>

<hr id="fasilitas" width="1">
<br>
<section class="type mx-5">
  <h2 class="mb-4 mt-5 text-primary text-center">Mulai Belajar Komputasi Sekarang!</h2>
  <hr class="bg-warning" width="50%" style="border: 1px solid orange;">
  <div class="row justify-content-center">
    <div class="col-md-5">
      <div class="card mb-3 shadow">
        <div class="row no-gutters">
          <div class="col-md-4 p-2">
            <img src="{{ asset('assets/img/logoartikel.png')}}" alt="..." width="150" height="150">
          </div>
          <div class="col-md-8 my-auto">
            <div class="card-body">
              <h5 class="card-title"><strong>Artikel</strong></h5>
              <p class="card-text"><small class="text-muted">1202 Artikel </small><small class="text-muted"> 23 Kategori </small></p>
            </div>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-12 p-2">
            <p class="card-text">Memperluas wawasan pengetahuan seputar ilmu komputasi dengan membaca artikel.</p>
            <a href="{{ url('/articles')}}" class="btn btn-outline-primary btn-sm px-4 ml-5 mb-3">Kunjungi</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-5">
      <div class="card mb-3 shadow">
        <div class="row no-gutters">
          <div class="col-md-4 p-2">
            <img src="{{ asset('assets/img/logotutorial.png')}}" alt="..." width="150" height="150">
          </div>
          <div class="col-md-8 my-auto">
            <div class="card-body">
              <h5 class="card-title"><strong>Tutorial</strong></h5>
              <p class="card-text"><small class="text-muted">1202 Tutorial </small><small class="text-muted"> 23 Kategori </small></p>
            </div>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-12 p-2">
            <p class="card-text">Pecahkan masalah komputasi dengan mempelajari tutorial yang relevan terhadap permasalahan yang dihadapi.</p>
            <a href="{{ url('/tutorials') }}" class="btn btn-outline-primary btn-sm px-4 ml-5 mb-3">Kunjungi</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-5">
      <div class="card mb-3 shadow">
        <div class="row no-gutters">
          <div class="col-md-4 p-2">
            <img src="{{ asset('assets/img/logokelas.png')}}" alt="..." width="150" height="150">
          </div>
          <div class="col-md-8 my-auto">
            <div class="card-body">
              <h5 class="card-title"><strong>Kelas</strong></h5>
              <p class="card-text"><small class="text-muted">1202 Kelas </small><small class="text-muted"> 23 Kategori </small></p>
            </div>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-12 p-2">
            <p class="card-text">Mendalami keilmuan komputer dengan mengikuti kelas-kelas yang disediakan secara bebas.</p>
            <a href="{{ url('/classes') }}" class="btn btn-outline-primary btn-sm px-4 ml-5 mb-3">Kunjungi</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-5">
      <div class="card mb-3 shadow">
        <div class="row no-gutters">
          <div class="col-md-4 p-2">
            <img src="{{ asset('assets/img/logovideo.png')}}" alt="..." width="150" height="150">
          </div>
          <div class="col-md-8 my-auto">
            <div class="card-body">
              <h5 class="card-title"><strong>Video</strong></h5>
              <p class="card-text"><small class="text-muted">1202 Video </small><small class="text-muted"> 23 Kategori </small></p>
            </div>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-12 p-2">
            <p class="card-text">Tingkatkan pemahaman materi dengan menonton video pembelajaran.</p>
            <a href="https://www.youtube.com/c/PengaosanKomputasi" class="btn btn-outline-primary btn-sm px-4 ml-5 mb-3">Kunjungi</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-5">
      <div class="card mb-3 shadow">
        <div class="row no-gutters">
          <div class="col-md-4 p-2">
            <img src="{{ asset('assets/img/logobuku.png')}}" alt="..." width="150" height="150">
          </div>
          <div class="col-md-8 my-auto">
            <div class="card-body">
              <h5 class="card-title"><strong>E-Book</strong></h5>
              <p class="card-text"><small class="text-muted">1202 E-Book </small><small class="text-muted"> 23 Kategori </small></p>
            </div>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-12 p-2">
            <p class="card-text">Tingkatkan pengetahuan dengan cara rajin membaca E-Book secara bebas.</p>
            <a href="#" class="btn btn-outline-primary btn-sm px-4 ml-5 mb-3">Kunjungi</a>
          </div>
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
  <h2>Author</h2>

  <a href="{{ url('/profile') }}" class="imgProfil"></a>
  <h3><strong>KHOIRUL ROZIQ</strong></h3>
  <h4>Software Engineer</h4>
  <div class="sosmed">
    <div class="sos"> <a href="https://web.facebook.com/khoirul.roziq.39"><img src="{{ url('assets/img/proFb.png') }}" alt="" width="30"></a></div>
    <div class="sos"> <a href="https://twitter.com/roziq_khoirul"><img src="{{ url('assets/img/proTw.png') }}" alt="" width="30"></a></div>
    <div class="sos"> <a href="https://www.instagram.com/roziq.khoirul"><img src="{{ url('assets/img/proIg.png') }}" alt="" width="30"></a></div>
  </div>
</div>


@endsection