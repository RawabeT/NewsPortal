<!DOCTYPE html>
<html class="no-js" lang="en"> 
<head>
	@include('layout.top')
</head>

<body id="top">
	@include('layout.header')

	@yield('content')
   
   @include('layout.footer')

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 
   @include('layout.bottom')

</body>

</html>