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
                   
<form method="POST" action="/comments/edit/<?php echo $comments[0]->id; ?>" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">user name</label>
    <input type="text" class="form-control" name="username" placeholder="Enter comment title" value="{{$comments[0]->username}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="text" class="form-control" name="email" placeholder="Enter author" value="{{$comments[0]->email}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">comment </label>
    <input type="text" class="form-control" name="comment" placeholder="Enter author" value="{{$comments[0]->comment}}">
</div>
<div class="checkbox">
    @if ($comments[0]->approved)
         <label><input type="checkbox" name="approved" value="{{$comments[0]->approved}}" checked></label>
    @else
         <label><input type="checkbox" name="approved" value="selected"></label>
   @endif
</div>

  </div>
  <button type="submit" class="btn btn-primary">Edit</button>
</form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
