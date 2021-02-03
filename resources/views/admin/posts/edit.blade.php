@extends('templates.content')

@section('main')

<form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('patch')
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="form-group">
        <label>Judul</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $post->title }}">
        <div class="invalid-feedback">
            @error('title')
                {{ $message }}
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label>Kategori</label>
        <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" id="category_id">
            <option value="" holder>-- Pilih Kategori --</option>
            @foreach( $categories as $category)
            <option value="{{ $category->id }}"
            @if( $post->category_id == $category->id )
                selected
            @endif
            >{{ $category->name }}</option>
            @endforeach
        </select>
        <div class="invalid-feedback">
            @error('category_id')
                {{ $message }}
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label>Pilih Tag</label>
        <select class="form-control select2" multiple="" name="tags[]">
        @foreach( $tags as $tag)
            <option value="{{ $tag->id }}" 
            @foreach($post->tags as $value)
                @if($tag->id == $value->id)
                    selected
                @endif
            @endforeach
            >{{ $tag->name}}</option>
        @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Thumbnail</label>
        <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
        <div class="invalid-feedback">
            @error('image')
                {{ $message }}
            @enderror
        </div>
    </div>
    <header class="header-a">
		<div class="grid-container">
			<h3 class="header-a-logo grid-width-30">
				
			</h3>

			<nav class="navigation-b grid-width-70">
				<ul>
					<li><a href="index.html" class="button-a button-a-background">Start</a></li>
					<li><a href="toolbarconfigurator/index.html" class="button-a">Toolbar configurator <span class="balloon-a balloon-a-nw">Edit your toolbar now!</span></a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="adjoined-top">
		<div class="grid-container">
			<div class="content grid-width-100">
				<h1>Content</h1>
			</div>
		</div>
	</div>
	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<textarea id="editor" name="content">
					{{ $post->content }}
				</textarea>
			</div>
		</div>
	</div>
    <div class="form-group">
        <button class="btn btn-primary btn-block">Simpan Perubahan</button>
    </div>
</form>

@endsection