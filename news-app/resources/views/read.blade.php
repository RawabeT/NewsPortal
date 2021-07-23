<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Author Name</th>
      <th scope="col">Date of Publish</th>
      <th scope="col">Image </th>
      <th scope="col">Video </th>
      <th scope="col">Category </th>
      <th scope="col"> </th>
      <th scope="col"> </th>
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
      
      <td>
      @if(!is_null($article->image)) 
      <img src="{{$article->image}}" width="50px"/>
      @else
      <img src="images/thumbs/lighthouse.jpg" width="50px"/>
      @endif
    </td>
      <td><img src="{{$article->video}}" width="50px"/></td>
      <td>{{$article->category}}</td>
      <td><a href = 'articles/edit/{{ $article->id }}'>Edit</a></td>
      <td><a href = 'articles/delete/{{ $article->id }}'>Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>

<div class="d-flex justify-content-center">
    {!! $articles->links() !!}
</div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>