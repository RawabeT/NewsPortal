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
<form action="/upload" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="">
                    <div class="form-group">
    <label for="exampleInputEmail1">Article title</label>
    <input type="text" class="form-control" name="title" placeholder="Enter article">
    @error('title')
    <div class="alert alert-danger ">{{ $message }}</div>
@enderror
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Article author</label>
    <input type="text" class="form-control" name="author_name" placeholder="Enter author">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Article description</label>
    <textarea name="description" class="form-control" cols="30" rows="10" placeholder="Add description"></textarea>
    @error('description')
    <div class="alert alert-danger ">{{ $message }}</div>
@enderror
</div>

  <div class="form-group">
    <!-- <input type="file" name="file" class="form-control" > -->
    <input type="file" name="file" class="form-control" id="img" style="display:none;"/>
    <label class="btn btn-primary" for="img">Click to upload image</label>
   </div>
   <!-- <div class="form-group">
    <input type="file" name="video" class="form-control" id="vid" style="display:none;"/>
    <label class="btn btn-primary" for="vid">Click to upload video</label>
   </div> -->
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

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success">Upload a File</button>
                        </div>

                    </div>
                </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>