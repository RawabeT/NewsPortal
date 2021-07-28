@extends('public.layout.index')
@section('content')

<section id="page-header">
   	<div class="row current-cat">
   		<div class="col-full">
   			<h1>Advanced Search</h1>
   		</div>   		
   	</div>

   </section>

<section id="page-header">
   	<div class="row current-cat">
	   <form action="/allarticlesA" method="get" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="s"
            placeholder="Search by article title or description or author name">
            <input type="date" name="from" placeholder="from">
            <input type="date" name="to" placeholder="to">
<!--             
            <input class="ml-2" type="checkbox" name="categories[]" value="Arts">Arts
            <input class="ml-2" type="checkbox" name="categories[]" value="Desgin">Desgin -->

            <div >
                <h3>Categories </h3>
            <label class="checkbox-container">Arts
  <input type="checkbox" name="categories[]" value="Art">
  <span class="checkmark"></span>
</label>
<label class="checkbox-container">Desgin
  <input type="checkbox" name="categories[]" value="Desgin">
  <span class="checkmark"></span>
</label>
<label class="checkbox-container">Computer
  <input type="checkbox" name="categories[]" value="Computer">
  <span class="checkmark"></span>
</label>
<label class="checkbox-container">Games
  <input type="checkbox" name="categories[]" value="Games">
  <span class="checkmark"></span>
</label>
<label class="checkbox-container">Digitl
  <input type="checkbox" name="categories[]" value="Digitl">
  <span class="checkmark"></span>
</label>
<label class="checkbox-container">Study
  <input type="checkbox" name="categories[]" value="Study">
  <span class="checkmark"></span>
</label>
            </div>

    </div>
    <button type="submit" class="btn btn-default">Search</button>
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
         <div class="entry-meta">
             <span class="cat-links">
                 <a href="#">{{$article->date_of_publish}}</a>             				
             </span>			
         </div>

         <h1 class="entry-title"><a href="/details/{{$article->id}}">{{$article->title}}</a></h1>
         
     </div>
          <div class="entry-excerpt">
          {{substr($article->description,0,100)}}
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