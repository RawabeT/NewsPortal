@extends('public.layout.index')
@section('content')

<section id="bricks">

<div class="row masonry">

  <div class="bricks-wrapper">

      <div class="grid-sizer"></div>

      <div class="brick entry featured-grid animate-this">
          <div class="entry-content">
              <div id="featured-post-slider" class="flexslider">
                    <ul class="slides">

                        <li>
                            <div class="featured-post-slide">

                                <div class="post-background" style="background-image:url('https://images.unsplash.com/photo-1586339949216-35c2747cc36d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=668&q=80');"></div>

                                <div class="overlay"></div>			   		

                                <div class="post-content">
                                    <ul class="entry-meta">
                                         <li>September 06, 2021</li> 
                                         <li><a href="#" ></a></li>				
                                     </ul>	

                                    <h1 class="slide-title"><a href="#" title="">BBC World Service television, radio and online on more than 40 languages</a></h1> 
                                </div> 				   					  
                        
                            </div>
                        </li> <!-- /slide -->

                        <li>
                            <div class="featured-post-slide">

                                <div class="post-background" style="background-image:url('https://images.unsplash.com/photo-1516179257071-71a54dbb4853?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1350&q=80');"></div>

                                <div class="overlay"></div>			   		

                                <div class="post-content">
                                    <ul class="entry-meta">
                                         <li>August 29, 2020</li>
                                         <li><a href="#"></a></li>					
                                     </ul>	

                                    <h1 class="slide-title"><a href="#" title="">Our commercial operations generate income to invest in new programmes and content</a></h1>
                                </div>		   				   					  
                        
                            </div>
                        </li> <!-- /slide -->

                        <li>
                            <div class="featured-post-slide">

                                <div class="post-background" style="background-image:url('https://images.unsplash.com/photo-1560523160-754a9e25c68f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1320&q=80');;"></div>

                                <div class="overlay"></div>			   		

                                <div class="post-content">
                                    <ul class="entry-meta">
                                         <li>August 27, 2020</li>
                                         <li><a href="#" class="author"></a></li>					
                                     </ul>	

                                    <h1 class="slide-title"><a href="#" title="">The Executive Committee is responsible for the day-to-day management of the BBC</a></h1>
                                </div>

                            </div>
                        </li> <!-- end slide -->

                    </ul> <!-- end slides -->
                </div> <!-- end featured-post-slider -->        			
          </div> <!-- end entry content -->         		
      </div>

      @foreach($articles as $article)
      <article class="brick entry format-standard animate-this">

        <div class="entry-thumb">
           <a href="/details/{{$article->id}}" class="thumb-link">
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

                <h1 class="entry-title"><a href="/details/{{$article->id}}">{{$article->title}}</a></h1>
                
            </div>
                 <div class="entry-excerpt">
                 {{substr($article->description,0,100)}} Read more...
                 </div>
        </div>

         </article> <!-- end article -->
         @endforeach

  </div> 

</div> 

</section> 
@endsection