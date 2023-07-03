@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Editar Post</h1>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label for="content">Descrição</label>
                <textarea class="form-control" id="content" name="content" rows="3">{{ $post->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
    </div>
@endsection