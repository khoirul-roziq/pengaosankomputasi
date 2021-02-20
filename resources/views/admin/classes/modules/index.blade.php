@extends('templates.admin')

@section('main')
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
<a href="{{ route('modules.create') }}" class="btn btn-info btn-sm m-3">Buat Modul</a>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul Modul</th>
            <th>Nama Kelas</th>
            <th>Aksi</th>
        </tr>
    </thead>
</table>

@endsection