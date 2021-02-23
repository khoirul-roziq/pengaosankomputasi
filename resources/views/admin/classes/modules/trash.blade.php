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
            <th>Nomor Modul</th>
            <th>Nama Kelas</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($modules as $module => $result)
        <tr>
            <td>{{ $module + $modules->firstitem() }}</td>
            <td>{{ $result->title }}</td>
            <td>{{ $result->nomor_module }}</td>
            <td>
                @foreach($classes as $kelas)
                @if($result->kelas_id == $kelas->id)
                {{ $kelas->name }}
                @endif
                @endforeach
            </td>
            <td>
                <form action="{{ url('modules/kill/'.$result->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <a href="{{ url('modules/restore/'.$result->id) }}"><span class="btn btn-primary btn-sm">Restore</span></a>
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus modul ini?');">Hapus</button></a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex">
    <span class="mx-2">{{ $modules->links() }}</span>
    <span class="mx-2">showing
        @if($modules->firstItem() != NULL )
        {{$modules->firstItem() }} to {{ $modules->lastItem() }} of
        @endif
        {{ $count }} entries</span>
</div>

@endsection