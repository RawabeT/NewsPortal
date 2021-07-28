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
                    <form action="/upload" method="POST" enctype="multipart/form-data" class="form">
                        @csrf
                        <div class="">
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" placeholder="Article title">
                                @error('title')
                                <div class="alert alert-danger ">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="author_name" placeholder="Article author">
                            </div>
                            <div class="form-group">
                                <textarea name="description" class="form-control" cols="30" rows="10" placeholder="Add Article description"></textarea>
                                @error('description')
                                <div class="alert alert-danger ">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group ">

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
                            <div class="custom-file">
                                <input type="file" name="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Create Article</button>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>