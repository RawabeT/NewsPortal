@extends('layout.index')
@section('content')

<section id="page-header">
   	<div class="row current-cat">
   		<div class="col-full">
   			<h1>Category: Photography</h1>
   		</div>   		
   	</div>

   </section>
   <section id="page-header">
   	<div class="row current-cat">
   		<div class="col-full">
			   <form action="/allarticles" method="get" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="s"
            placeholder="Search by article title or description"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
   </form>
   		</div>   		
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
           <a href="single-standard.html" class="thumb-link">
               <img src="images/thumbs/diagonal-building.jpg" alt="building">             
           </a>
        </div>

        <div class="entry-text">
            <div class="entry-header">

                <div class="entry-meta">
                    <span class="cat-links">
                        <a href="#">Design</a> 
                        <a href="#">Photography</a>               				
                    </span>			
                </div>

                <h1 class="entry-title"><a href="single-standard.html">{{$article->title}}</a></h1>
                
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