@extends('public.layout.index')
@section('content')

<section id="page-header">
   	<div class="row current-cat">
   		<div class="col-full">
   			<h1>All Articles</h1>
   		</div>   		
   	</div>

   </section>
   <section id="page-header">
   	<div class="row current-cat">
	   <form action="/allarticles" method="get" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="s" style="margin-bottom: auto;"
            placeholder="Search by article title or description or author name">
            <button type="submit" class="btn btn-default">Search
            </button>
            <button class="btn btn-default"><a href="/allarticlesA">Advanced Search</a>
            </button>
    </div>
   </form>	
   	</div>

   </section>

   <section id="bricks" class="with-top-sep">

   	<div class="row masonry">

   		<!-- brick-wrapper -->
         <div class="bricks-wrapper">

		 <div class="grid-sizer"></div>

		 @if(isset($details))
			 @foreach($details as $article)
      <article class="brick entry format-standard animate-this">

        <div class="entry-thumb">
           <a href="/details/{{$article->id}}"class="thumb-link">
           @if(!is_null($article->image)) 
               <img src="{{$article->image}}" alt="building">
               @else
              <img src="images/cartoon.jpeg" />
            @endif  
           </a>
        </div>

        <div class="entry-text">
            <div class="entry-header">

                <div class="entry-meta">
                    <span class="cat-links">
                        <a href="#">{{$article->category}}</a>             				
                    </span>			
                </div>
                <div class="entry-meta">
                    <span class="cat-links">
                        <a href="#">{{$article->author_name}}</a>             				
                    </span>			
                </div>

                <h1 class="entry-title"><a href="/details/{{$article->id}}">{{$article->title}}</a></h1>
                
            </div>
                 <div class="entry-excerpt">
                 {{$article->description}}
                 </div>

        </div>

         </article> <!-- end article -->
         @endforeach
		 @else
		 <p>No Details found. Try to search again !</p>
		 @endif

         </div> <!-- end brick-wrapper --> 

   	</div> <!-- end row -->

   </section> 
   @endsection