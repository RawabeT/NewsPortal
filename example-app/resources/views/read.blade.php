@extends('dashboard')
@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Author Name</th>
      <th scope="col">Date of Publish</th>
    </tr>
  </thead>
  <tbody>
    @foreach($articles as $article)
    <tr>
      <th scope="row">{{$article->id}}</th>
      <td>{{$article->title}}</td>
      <td>{{$article->description}}</td>
      <td>{{$article->author_name}}</td>
      <td>{{$article->date_of_publish}}</td>
      <td><a href = 'articles/edit/{{ $article->id }}'>Edit</a></td>
      <td><a href = 'articles/delete/{{ $article->id }}'>Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection