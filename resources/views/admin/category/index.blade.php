@extends('templates.admin')

@section('main')
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <a href="{{ route('category.create')}}" class="btn btn-info btn-sm m-3">Tambah Kategori</a>
    
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        
        <tbody>
        @foreach($category as $result => $hasil)
            <tr>
                <td>{{ $result + $category->firstitem() }}</td>
                <td>{{ $hasil->name }}</td>
                <td>
                    <form action="{{ route('category.destroy', $hasil->id ) }}" method="post">
                        @csrf
                        @method('delete')
                        <a href="{{ route('category.edit', $hasil->id)}}"><span class="btn btn-primary btn-sm">Edit</span></a>
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus Category ini?');">Hapus</button></a>
                    </form>
                </td>
            </tr>
        @endforeach    
        </tbody>
    </table>
    <div class="d-flex">
        <span class="mx-2">{{ $category->links() }}</span>
        <span class="mx-2">showing {{$category->firstItem() }} to {{ $category->lastItem() }} of {{ $count }} entries</span>
    </div>
    
    
@endsection