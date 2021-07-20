@extends('dashboard')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{Session::get('success')}}
</div>
@endif
<form method="POST" action="/articles">
    @csrf
    <h1>Create news</h1>
  <div class="form-group">
    <label for="exampleInputEmail1">Article title</label>
    <input type="text" class="form-control" name="title" placeholder="Enter article">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Article author</label>
    <input type="text" class="form-control" name="author_name" placeholder="Enter author">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Article description</label>
    <textarea name="description" class="form-control" cols="30" rows="10" placeholder="Add description"></textarea>
</div>
  <button type="submit" class="btn btn-primary">Add</button>
</form>

@endsection