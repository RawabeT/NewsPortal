@extends('layout.index')
@section('content')

   <section id="content-wrap" class="blog-single">
   	<div class="row">
   		<div class="col-twelve">

   			<article class="format-standard">  

   				<div class="content-media">
						<div class="post-thumb">
						@if(!is_null($articles[0]->image)) 
						<img src="{{$articles[0]->image}}"> 
						@else
                        <img src="images/cartoon.jpeg" />
                      @endif  
							
						</div>  
					</div>

					<div class="primary-content">

						<h1 class="page-title">{{$articles[0]->title}}</h1>	

						<ul class="entry-meta">
							<li class="date"></li>						
							<li class="cat"><a href="">{{$articles[0]->category}}</a></li>				
						</ul>						
						<p>{{$articles[0]->description}}</p>


		  			   <div class="author-profile">

		  			   	<div class="about">
		  			   		<h4><a href="#">{{$articles[0]->author_name}}</a></h4>
		  			   	
		  			   		<p>Alias aperiam at debitis deserunt dignissimos dolorem doloribus, fuga fugiat impedit laudantium magni maxime nihil nisi quidem quisquam sed ullam voluptas voluptatum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
		  			   		</p>

		  			   		<ul class="author-social">
		  			   			<li><a href="#">Facebook</a></li>
						        	<li><a href="#">Twitter</a></li>
						        	<li><a href="#">GooglePlus</a></li>
						        	<li><a href="#">Instagram</i></a></li>					        	
		  			   		</ul>
		  			   	</div>
		  			   </div> <!-- end author-profile -->						

					</div> <!-- end entry-primary -->		  			   

	  			   <!-- <div class="pagenav group">
		  			   <div class="prev-nav">
		  			   	<a href="#" rel="prev">
		  			   		<span>Previous</span>
		  			   		Tips on Minimalist Design 
		  			   	</a>
		  			   </div>
		  				<div class="next-nav">
		  					<a href="#" rel="next">
		  						<span>Next</span>
		  			   		Less Is More 
		  					</a>
		  				</div>  				   
	  				</div> -->

				</article>
   		

			</div> <!-- end col-twelve -->
   	</div> <!-- end row -->

		<div class="comments-wrap">
			<div id="comments" class="row">
				<div class="col-full">

               <h3> Comments</h3>

               <!-- commentlist -->
               <ol class="commentlist">
				   @foreach($comments as $comment)
				   @if($comment->approved == true)
                  <li class="depth-1">

                     <div class="comment-content">

	                     <div class="comment-info">
	                        <cite>{{$comment->username}}</cite>

	                        <div class="comment-meta">
	                           <time class="comment-time" datetime="2014-07-12T23:05">{{$comment->created_at}}</time>
	                           <!-- <span class="sep">/</span><a class="reply" href="#">Reply</a> -->
	                        </div>
	                     </div>

	                     <div class="comment-text">
							 <p>{{$comment->comment}}</p>
	                     </div>

	                  </div>

                  </li>
				  @endif
				  @endforeach
               </ol> 				

               <!-- respond -->
               <div class="respond">

               	<h3>Leave a Comment</h3>

                  <form name="contactForm" id="contactForm" enctype="multipart/form-data" method="post" action="/comment/<?php echo $articles[0]->id; ?>">
				  
  					   <fieldset>
						 @csrf

                     <div class="form-field">
  						      <input name="username" type="text" id="cName" class="full-width" placeholder="Your Name" value="">
                     </div>

                     <div class="form-field">
  						      <input name="email" type="text" id="cEmail" class="full-width" placeholder="Your Email" value="">
                     </div>

                     <div class="message form-field">
                        <textarea name="comment" id="cMessage" class="full-width" placeholder="Your comment" ></textarea>
                     </div>

                     <button type="submit" class="submit button-primary">Submit</button>

  					   </fieldset>
  				      </form> <!-- Form End -->

               </div> <!-- Respond End -->

         	</div> <!-- end col-full -->
         </div> <!-- end row comments -->
		</div> <!-- end comments-wrap -->

   </section>
   @endsection