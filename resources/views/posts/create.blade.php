@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Adicionar novo post</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="content">Conteúdo</label>
                <textarea class="form-control" id="content" name="content"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Publicar</button>
        </form>
    </div>
    @endsection