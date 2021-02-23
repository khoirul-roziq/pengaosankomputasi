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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600;700&display=swap');

        svg {
            height: 30px;
        }

        body {
            font-family: 'Quicksand', sans-serif;
            color: #555;
        }


        .pin nav p,
        .pin nav .hidden,
        .paginasi nav .flex-1 {
            display: none;
        }

        .sekrolside {
            max-height: 500px;
            overflow-y: scroll;
        }

        .sekrolbody {
            max-height: 700px;
            overflow-y: scroll;
        }
    </style>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Merienda+One&family=Nunito+Sans&display=swap" rel="stylesheet">

    <title>{{ $kelas->name }} | Pengaosan Komputasi</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm" style="z-index:9999">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{asset('assets/img/brand.png')}}" height="30" class="d-inline-block align-top" alt=""></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Fasilitas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ url('/articles') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                <path d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                            </svg> Artikel</a>
                        <a class="dropdown-item" href="{{ url('/tutorials') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-code-square" viewBox="0 0 16 16">
                                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                <path d="M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0zm2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0z" />
                            </svg> Tutorial</a>
                        <a class="dropdown-item" href="{{ url('/kelas') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
                            </svg> Kelas</a>
                        <a class="dropdown-item" href="https://www.youtube.com/c/pengaosankomputasi"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-play" viewBox="0 0 16 16">
                                <path d="M6 10.117V5.883a.5.5 0 0 1 .757-.429l3.528 2.117a.5.5 0 0 1 0 .858l-3.528 2.117a.5.5 0 0 1-.757-.43z" />
                                <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                            </svg> Video</a>
                        <a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-code" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8.646 5.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 8 8.646 6.354a.5.5 0 0 1 0-.708zm-1.292 0a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L5.707 8l1.647-1.646a.5.5 0 0 0 0-.708z" />
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                            </svg> E-Book</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/profile') }}">Author</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}"><span class="badge badge-dark py-2 px-3">Login</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- end navbar -->

    <div class="alert alert-secondary text-right py-3" role="alert" id="tab">
        <span class="text mx-3">Beranda</span>|<span class="text mx-3">Kelas</span>|<span class="text mx-3">Daftar Kelas</span>|<span class="text mx-3 text-info">Materi</span>
    </div>

    <div class="card mb-3 mx-2 ">
        <div class="row no-gutters">
            <div class="col-lg-4">
                <img src="{{ asset($kelas->thumbnail) }}" alt="..." width="300" class="m-3">
            </div>
            <div class="col-lg-8 my-auto" style="border-left: 2px solid #999;">
                <div class="card-body">
                    <h2 class="card-title">{{ $kelas->name}}</h2>
                    <span class="card-text">Mentor : <span class="text-danger">{{ $kelas->mentor }}</span></span><br>
                    <span class="card-text">Kategori : <span class="text-danger">@foreach( $categories as $category)
                            @if($kelas->category_id == $category->id)
                            {{ $category->name }}
                            @endif
                            @endforeach</span></span><br>
                    <span class="card-text">Jumlah Modul : <span class="text-danger">{{ $modules->total() }}</span></span><br>
                    <p class="card-text"><small class="text-muted">Terakhir diperbaharui {{ $kelas->date }}</small></p>
                    <div class="pin mt-4">
                        <span>{{ $modules->links() }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link
                            @if( $modules->currentPage() == 1)
                            active
                            @endif
                            " href="{{ url('/kelas/'.$kelas->slug.'?page=1')}}">Pengantar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link
                            @if( $modules->currentPage() == 2)
                            active
                            @endif" href="{{ url('/kelas/'.$kelas->slug.'?page=2')}}">Daftar Isi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if( $modules->currentPage() != 1 && $modules->currentPage() != 2)
                            active
                            @endif" href="{{ url('/kelas/'.$kelas->slug.'?page=3')}}">Materi</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body sekrolbody">
                    @foreach($modules as $module)
                    <h1 class="mb-4 text-danger"><strong>{{ $module->title }}</strong></h1>
                    {!! $module->content !!}
                    @endforeach
                    @if($modules->currentPage() == 2)
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Judul Modul</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($listModules as $module)
                            <tr>
                                <th scope="row">{{ $module->nomor_module }}</th>
                                <td><a href="{{ url('kelas/'.$kelas->slug.'?page='.$module->nomor_module) }}">{{ $module->title }}</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
            <div class="my-4 paginasi">
                {{ $modules->links() }}
            </div>
        </div>
        <div class="col-md-3">
            <div class="card sekrolside">
                <div class="card-body">
                    <h4 class="card-title text-center text-danger"><b>Daftar Isi</b></h4>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Judul Modul</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($listModules as $module)
                            <tr>
                                <th scope="row">{{ $module->nomor_module }}</th>
                                <td>
                                    @if($modules->currentPage() == $module->nomor_module)
                                    {{ $module->title }}
                                    @else
                                    <a href="{{ url('kelas/'.$kelas->slug.'?page='.$module->nomor_module) }}">{{ $module->title }}</a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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