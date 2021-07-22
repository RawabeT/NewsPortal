<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Article') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{Session::get('success')}}
</div>
@endif
<form method="POST" action="/articles">
    @csrf
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
<div class="form-group">
    <label for="exampleInputEmail1">Article image</label>
    <input type="text" class="form-control" name="image" placeholder="Enter author">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Article video</label>
    <input type="text" class="form-control" name="video" placeholder="Enter author">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Article category</label>
    <select name="category" id="category">
    <option value="Desgin">Desgin</option>
    <option value="Art">Art</option>
    <option value="Colors">Colors</option>
  </select>
  </div>
  <button type="submit" class="btn btn-primary">Add</button>
</form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>