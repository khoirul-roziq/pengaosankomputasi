@extends('templates.admin')

@section('main')
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <a href="{{ route('users.create')}}" class="btn btn-info btn-sm m-3">Tambah User</a>
    
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama User</th>
                <th>Email</th>
                <th>Type</th>
                <th>Aksi</th>
            </tr>
        </thead>
        
        <tbody>
        @foreach($users as $result => $user)
            <tr>
                <td>{{ $result + $users->firstitem() }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if($user->type)
                        <span class="badge bg-info">Administrator</span>
                    @else
                        <span class="badge bg-warning">Author</span>
                    @endif
                </td>
                <td>
                    <form action="{{ route('users.destroy', $user->id ) }}" method="post">
                        @csrf
                        @method('delete')
                        <a href="{{ route('users.edit', $user->id)}}"><span class="btn btn-primary btn-sm">Edit</span></a>
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus users ini?');">Hapus</button></a>
                    </form>
                </td>
            </tr>
        @endforeach    
        </tbody>
    </table>
    <div class="d-flex">
        <span class="mx-2">{{ $users->links() }}</span>
        <span class="mx-2">showing {{$users->firstItem() }} to {{ $users->lastItem() }} of {{ $count }} entries</span>
    </div>
    
    
@endsection