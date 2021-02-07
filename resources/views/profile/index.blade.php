<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- my style -->
    <link rel="stylesheet" href="{{ asset('/assets/css/profile.css') }}">

    <!-- my script js -->

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Merienda+One&family=Nunito+Sans&display=swap" rel="stylesheet">

    <title>Profil | Pengaosan Komputasi</title>
  </head>
  <body class="mt-5">

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">PK</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item mr-4">
            <a class="nav-link" href="{{ url('/') }}">Beranda</a>
        </li>
        <li class="nav-item">
            <a class="page-scroll nav-link mr-4" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="page-scroll nav-link mr-4" href="#about1">About</a>
        </li>
        <li class="nav-item">
            <a class="page-scroll nav-link mr-4" href="#portfolio1">Portfolio</a>
        </li>
        <li class="nav-item">
            <a class="page-scroll nav-link" href="#contact1">Contact</a>
        </li>
        </ul>
    </div>
    </div>
    </nav>
    
    <!-- end navbar -->

    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid">
    <div class="container text-center text-white">
        <img src="{{ asset('assets/img/imgProfil.jpg') }}" alt="" width="25%" class="rounded-circle img-thumbnail">
        <h1 class="display-4">Khoirul Roziq</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
    </div>
    <!-- end jumbotron -->

    <div id="about1" class="mb-5 text-white">-</div>
    <section id="about" class="about">
    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <h2>About</h2>
            </div>
        </div>
        <div class="row text-center justify-content-center">
            <div class="col-md-5">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus ducimus, ipsum illo ad nam provident labore excepturi corrupti accusamus laboriosam! Iusto eligendi quaerat fuga illum, sed nesciunt quasi voluptatem voluptas?</p>
            </div>
            <div class="col-md-5">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam a facere reiciendis et deserunt at sed voluptatem eaque esse cupiditate doloremque fugiat ad earum est numquam perferendis beatae, necessitatibus officia.</p>
            </div>
        </div>
    </div>
    </section>
    <div id="portfolio1" class="mb-4 text-white">-</div>
    <section id="portfolio" class="portfolio bg-light pb-4">
    <div class="container">
        <div class="row mb-4 pt-4">
            <div class="col text-center">
                <h2>Portfolio</h2>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md">
                <div class="card">
                <img src="{{ asset('assets/img/img1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                <img src="{{ asset('assets/img/img2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                <img src="{{ asset('assets/img/img3.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md">
                <div class="card">
                <img src="{{ asset('assets/img/img1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                <img src="{{ asset('assets/img/img2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                <img src="{{ asset('assets/img/img3.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md">
                <div class="card">
                <img src="{{ asset('assets/img/img1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                <img src="{{ asset('assets/img/img2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                <img src="{{ asset('assets/img/img3.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    
    <span id="contact1" class="mb-5 text-white">-</span>
    <section class="contact mt-5" id="contact">
    <div class="container">
        <div class="row pt-4 pb-4">
            <div class="col text-center">
                <h2>Contact Us</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card text-white bg-primary mb-3" >
                <div class="card-body text-center">
                    <h5 class="card-title">Contact Us</h5>
                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni, similique.</p>
                </div>
                </div>
                <ul class="list-group mb-5">
                    <li class="list-group-item"><h1>Location</h1></li>
                    <li class="list-group-item">My Office</li>
                    <li class="list-group-item">Jl. Lapas Raya, Wayhuwi, Lam-Sel</li>
                    <li class="list-group-item">Lampung, Indonesia</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <form>
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name" aria-describedby="nameHelp">
                    <small id="nameHelp" class="form-text text-muted">Masukan Nama Lengkap Anda!</small>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Masukan Email Yang Anda Miliki!</small>
                </div>
                <div class="form-group">
                    <label for="noHP">Nomor HP</label>
                    <input type="noHP" class="form-control" id="noHP" aria-describedby="noHPHelp">
                    <small id="noHPHelp" class="form-text text-muted">Masukan Email Yang Anda Miliki!</small>
                </div>
                <div class="form-group">
                    <label for="pesan">Pesan</label>
                    <textarea type="pesan" class="form-control" id="pesan" aria-describedby="pesanHelp"></textarea>
                    <small id="pesanHelp" class="form-text text-muted">Tulis Pesan Anda!</small>
                </div>
                <button type="submit" class="btn btn-primary">Kirim Pesan!</button>
                </form>
            </div>
        </div>
    </div>
    </section>

    <footer class="bg-dark text-white py-3 mt-5">
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
                <a href='https://www.freepik.com/photos/technology'>Technology photo created by pressfoto - www.freepik.com</a>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- <script src="{{ asset('/assets/js/script.js') }}"></script> -->
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>