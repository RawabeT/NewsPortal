<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Comments') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   
<form action="/upload" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="">
                    <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" class="form-control" name="username" placeholder="username">

  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="text" class="form-control" name="email" placeholder="Enter author">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Comment</label>
    <textarea name="comment" class="form-control" cols="30" rows="10" placeholder="Add description"></textarea>
</div>
<input type="checkbox" name="approved" class="switch-input" value="1" {{ old('approved') ? 'checked="checked"' : '' }}/>



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