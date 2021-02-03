@extends('templates.admin')

@section('main')
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <a href="{{ route('tags.create')}}" class="btn btn-info btn-sm m-3">Tambah Tag</a>
    
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Tags</th>
                <th>Aksi</th>
            </tr>
        </thead>
        
        <tbody>
        @foreach($tags as $tag => $hasil)
            <tr>
                <td>{{ $tag + $tags->firstitem() }}</td>
                <td>{{ $hasil->name }}</td>
                <td>
                    <form action="{{ route('posts.destroy', $hasil->id ) }}" method="post">
                        @csrf
                        @method('delete')
                        <a href="{{ route('tags.edit', $hasil->id)}}"><span class="btn btn-primary btn-sm">Edit</span></a>
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus tags ini?');">Hapus</button></a>
                    </form>
                </td>
            </tr>
        @endforeach    
        </tbody>
    </table>
    <div class="d-flex">
        <span class="mx-2">{{ $tags->links() }}</span>
        <span class="mx-2">showing {{$tags->firstItem() }} to {{ $tags->lastItem() }} of {{ $count }} entries</span>
    </div>
    
    
@endsection