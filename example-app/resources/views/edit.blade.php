@extends('dashboard')
@section('content')

<form method="POST" action="/articles/edit/<?php echo $articles[0]->id; ?>">
  @csrf
    <h1>Edit news</h1>
  <div class="form-group">
    <label for="exampleInputEmail1">Article title</label>
    <input type="text" class="form-control" name="title" placeholder="Enter article">
  </div>
  <button type="submit" class="btn btn-primary">Add</button>
</form>

@endsection