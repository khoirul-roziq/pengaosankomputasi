@extends('templates.admin')

@section('main')
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
<a href="{{ route('posts.create')}}" class="btn btn-info btn-sm m-3">Tambah Post</a>
<a href="{{ url('/articles') }}" class="btn btn-warning btn-sm m-3">Lihat Artikel</a>
<a href="{{ url('/tutorials') }}" class="btn btn-warning btn-sm m-3">Lihat Tutorial</a>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul Posts</th>
            <th>Kategori</th>
            <th>Type</th>
            <th>Daftar Tag</th>
            <th>Creator</th>
            <th>Thumbnail</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach($posts as $post => $result)
        <tr>
            <td>{{ $post + $posts->firstitem() }}</td>
            <td>{{ $result->title }}</td>
            <td>{{ $result->category->name }}</td>
            <td>{{ $result->type }}</td>
            <td>
                @foreach($result->tags as $tag)
                <span class="badge bg-info my-1">{{ $tag->name }}</span>
                @endforeach

            </td>
            <td>{{ $result->users->name }}</td>
            <td><img src="{{ asset($result->image) }}" alt="Thumbnail" class="img-fluid" width="100"></td>
            <td>
                <form action="{{ route('posts.destroy', $result->id ) }}" method="post">
                    @csrf
                    @method('delete')
                    <a href="{{ route('posts.edit', $result->id)}}"><span class="btn btn-primary btn-sm">Edit</span></a>
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus posts ini?');">Hapus</button></a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex">
    <span class="mx-2">{{ $posts->links() }}</span>
    <span class="mx-2">showing
        @if($posts->firstItem() != NULL )
        {{$posts->firstItem() }} to {{ $posts->lastItem() }} of
        @endif
        {{ $count }} entries</span>
</div>


@endsection