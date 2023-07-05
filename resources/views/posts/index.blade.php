@extends('layouts.app')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titulo</th>
        <th scope="col">Descrição</th>
        <th scope="col">Ação</th>
        <th scope="col">Apagar</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <th scope="row">{{ $post->id }}</th>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <td>
                <a href="/posts/{{ $post->id }}/edit" class="edit-button">Editar Post</a>
              </td>
              <td>
                <form action="/posts/{{ $post->id }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="delete-button">Excluir</button>
                </form>
              </td>
                   
          </tr>
        @endforeach
    </tbody>
  </table>
  @endsection
