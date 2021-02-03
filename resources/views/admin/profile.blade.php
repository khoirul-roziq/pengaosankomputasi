@extends('templates.admin')

@section('container')

<div class="container mt-3 p-4">
    <div class="container-photo">
        <div class="avatar-frame">
            <img src="{{ url('assets/dist/img/avatar5.png')}}" alt="avatar" class="avatar">
        </div>
        <div class="avatar-edit m-4">
            <h2><strong>Khoirul Roziq</strong></h2>
            <form action="#">
            <div class="mb-3">
                <h6>Ganti Foto Profil</h6>
                <input class="form-control form-control-sm" id="formFileSm" type="file">
            </div>
            <button type="submit" class="btn btn-outline-primary mt-4">Simpan Foto</button>
            </form>
        </div>
    </div>
    <div class="container-bio mt-5">
        <h3>Info Profile</h3>
        <p>Beberapa info mungkin bisa dilihat oleh orang lain yang menngunjungi situs ini.</p>
        <div class="mb-1 row">
            <span class="col-sm-3 col-form-label">NAMA</span>
            <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext nilai" id="nama" name="nama" value="Khoirul Roziq">
            </div>
        </div>
        <div class="mb-1 row">
            <span class="col-sm-3 col-form-label">TANGGAL LAHIR</span>
            <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext nilai" id="ttl" name="ttl" value="17 Desember 1999">
            </div>
        </div>
        <div class="mb-1 row">
            <span class="col-sm-3 col-form-label">JENIS KELAMIN</span>
            <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext nilai" id="jenis_kelamin" name="jenis_kelamin" value="Laki-Laki">
            </div>
        </div>
        <div class="mb-1 row">
            <span class="col-sm-3 col-form-label">Email</span>
            <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext nilai" id="email" name="email" value="khoirulroziq75@gmail.com">
            </div>
        </div>
        <div class="mb-1 row">
            <span class="col-sm-3 col-form-label">KATA SANDI</span>
            <div class="col-sm-9">
                <input type="password" readonly class="form-control-plaintext nilai" id="password" name="password" value="12345678">
            </div>
        </div>
    </div>
</div>
@endsection