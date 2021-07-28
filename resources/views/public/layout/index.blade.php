<!DOCTYPE html>
<html class="no-js" lang="en"> 
<head>
	@include('public.layout.top')
</head>

<body id="top">
	@include('public.layout.header')

	@yield('content')
   
   @include('public.layout.footer')

   <!-- <div id="preloader"> 
    	<div id="loader"></div>
   </div>  -->
   @include('public.layout.bottom')

</body>

</html>