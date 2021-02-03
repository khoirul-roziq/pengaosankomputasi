<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- my style -->
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Merienda+One&family=Nunito+Sans&display=swap" rel="stylesheet">

    <title>@yield('title') | Pengaosan Komputasi</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <a class="navbar-brand" href="#"> <strong>PK</strong></a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Artikel</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Materi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">E-book</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Profil</a>
        </li>
        </ul>
    </div>
    </nav>
    <a href="https://www.freepik.com/vectors/business">Business vector created by freepik - www.freepik.com</a>
    <!-- end navbar -->

    @yield('main')

    <footer>
        <div>
            <span>2021 Pengaosan Komputasi, Lampung</span>
            <a href="" class="mx-4">Tengtang Kami</a>
            <a href="" class="mx-2">Profil</a>
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