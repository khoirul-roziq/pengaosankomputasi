@extends('templates.admin')

@section('main')
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul Posts</th>
            <th>Kategori</th>
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
            <td><img src="{{ asset($result->image) }}" alt="Thumbnail" class="img-fluid" width="100"></td>
            <td>
                <form action="{{ url('posts/kill/'.$result->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <a href="{{ url('posts/restore/'.$result->id) }}"><span class="btn btn-primary btn-sm">Restore</span></a>
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