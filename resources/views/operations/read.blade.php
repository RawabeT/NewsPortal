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
                <th scope="col">Number of visitors </th>
                <th scope="col"> </th>
                <th scope="col"> </th>
              </tr>
            </thead>
            <tbody>
              @foreach($articles as $article)
              <tr>
                <th scope="row">{{$article->id}}</th>
                <td>{{$article->title}}</td>
                <td>{{substr($article->description,0,100)}}</td>
                <td>{{$article->author_name}}</td>
                <td>{{$article->date_of_publish}}</td>

                <td>
                  @if(!is_null($article->image))
                  <img src="{{$article->image}}" width="50px" />
                  @else
                  <img src="images/cartoon.jpeg" width="50px" />
                  @endif
                </td>
                <td><img src="{{$article->video}}" width="50px" /></td>
                <td>{{$article->category}}</td>
                <td>{{$article->view_count}}</td>
                <td><a href='articles/edit/{{ $article->id }}' class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                      <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                    </svg>
                  </a></td>
                <td><a href='articles/delete/{{ $article->id }}' class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                      <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z" />
                    </svg>
                  </a></td>
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