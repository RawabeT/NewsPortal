<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Article') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   
<form method="POST" action="/articles/edit/<?php echo $articles[0]->id; ?>" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Article title</label>
    <input type="text" class="form-control" name="title" placeholder="Enter article title" value="{{$articles[0]->title}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Article author</label>
    <input type="text" class="form-control" name="author_name" placeholder="Enter author" value="{{$articles[0]->author_name}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Article description</label>
    <textarea name="description" class="form-control" cols="30" rows="10" placeholder="Add description">{{$articles[0]->description}}</textarea>
</div>
<div class="form-group">
    <!-- <input type="file" name="file" class="form-control" > -->
    <input type="file" name="file" class="form-control" id="img" style="display:none;"/>
    <label class="btn btn-primary" for="img">Click to upload image</label>
   </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Article category</label>
    <select name="category" id="category">
    <option value="Desgin">Desgin</option>
    <option value="Art">Art</option>
    <option value="Digitl">Digitl</option>
    <option value="Computer">Computer</option>
    <option value="Games">Games</option>
    <option value="Study">Study</option>
  </select>
  </div>
  <button type="submit" class="btn btn-primary">Edit</button>
</form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
