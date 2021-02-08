<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- my style -->
    <link rel="stylesheet" href="{{ url('assets/css/styleClasses.css') }}">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Merienda+One&family=Nunito+Sans&display=swap" rel="stylesheet">

    <title>Kelas | Pengaosan Komputasi</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top" style="z-index:9999">
    <a class="navbar-brand" href="{{ url('/') }}"> <strong>PK</strong></a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">Dashboard <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/articles') }}">Artikel</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/classes') }}">Kelas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">E-book</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/profile') }}">Profil</a>
        </li>
        </ul>
    </div>
    </nav>
    <!-- end navbar -->
    
    <div class="alert alert-secondary text-right py-3" role="alert" id="tab">
       <span class="text mx-3">Beranda</span>|<span class="text mx-3">Kelas</span>|<span class="text mx-3 text-info">Daftar Kelas</span>
    </div>
    
    <div class="row justify-content-center">
    <div class="alert alert-success col-md-11 py-5" role="alert">
        <h4 class="alert-heading mb-4">Daftar Kelas Pembelajaran</h4>
        <p>Kelas pembelajaran yang ada di Website Pengaosan Komputasi bisa diakses<br>secara bebas oleh siapapun, kapanpun dan di manapun!</p>
        <hr>
        <p class="mb-0">Materi yang tersedia disemua kelas berhubungan dengan ilmu komputasi</p>
    </div>
    </div>

    <div class="card mx-5 mb-5">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#">Semua</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pemrograman</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sistem Operasi</a>
            </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="card mb-3 mx-2">
                <div class="row no-gutters">
                    <div class="col-md-3">
                    <img src="{{ asset('/assets/img/img3.jpg') }}" class="m-3" alt="..." width="280" height="200">
                    </div>
                    <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="card-title">Ini adalah judul untuk mencoba daftar</h5>
                        <hr>
                        <span class="card-text">Kategori : <span class="text-info">Pemrograman</span></span>
                        <br>
                        <span class="card-text">Penulis : <span class="text-info">Khoirul Roziq</span></span>
                        <p class="card-text"><small class="text-muted">update 8 Februari 2021</small></p>
                        <a href="" class="btn btn-primary btn-sm">Mulai Belajar</a>
                    </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 mx-2">
                <div class="row no-gutters">
                    <div class="col-md-3">
                    <img src="{{ asset('/assets/img/img3.jpg') }}" class="m-3" alt="..." width="280" height="200">
                    </div>
                    <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="card-title">Ini adalah judul untuk mencoba daftar</h5>
                        <hr>
                        <span class="card-text">Kategori : <span class="text-info">Pemrograman</span></span>
                        <br>
                        <span class="card-text">Penulis : <span class="text-info">Khoirul Roziq</span></span>
                        <p class="card-text"><small class="text-muted">update 8 Februari 2021</small></p>
                        <a href="" class="btn btn-primary btn-sm">Mulai Belajar</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="bg-dark text-white py-3">
        <div class="container">
        <div class="row">
            <div class="col mb-1">
                <span>2021 Pengaosan Komputasi, Lampung</span>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="" class="mr-4">Tengtang Kami</a>
                <a href="" class="mr-4">Profil</a>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>