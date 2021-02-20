@extends('templates.admin')

@section('main')
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
<a href="{{ route('classes.create') }}" class="btn btn-info btn-sm m-3">Buat Kelas</a>
<a href="#" class="btn btn-warning btn-sm m-3">Lihat Kelas</a>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kelas</th>
            <th>Mentor</th>
            <th>Kategori</th>
            <th>Thumbnail</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($classes as $kelas => $result)
        <tr>
            <td>{{ $kelas + $classes->firstitem() }}</td>
            <td>{{ $result->name }}</td>
            <td>{{ $result->mentor }}</td>
            <td>{{ $result->category->name }}</td>
            <td><img src="{{ asset($result->thumbnail) }}" alt="Thumbnail" class="img-fluid" width="100"></td>
            <td>
                <form action="{{ route('classes.destroy', $result->id ) }}" method="post">
                    @csrf
                    @method('delete')
                    <a href="{{ route('classes.edit', $result->id)}}"><span class="btn btn-primary btn-sm">Edit</span></a>
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus classes ini?');">Hapus</button></a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex">
    <span class="mx-2">{{ $classes->links() }}</span>
    <span class="mx-2">showing
        @if($classes->firstItem() != NULL )
        {{$classes->firstItem() }} to {{ $classes->lastItem() }} of
        @endif
        {{ $count }} entries</span>
</div>

@endsection