<!DOCTYPE html>
<html>
	<!-- CSS Source credit to w3schools.com -->
	<title>Henry Fong's Personal Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="{{ asset('/css/w3.css') }}" rel="stylesheet">
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link href="{{ asset('/slider-pro/dist/css/slider-pro.min.css') }} rel=stylesheet">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">

	<style>
	div.gallery {
	  margin: 5px;
	  border: 1px solid #ccc;
	  float: left;
	  width: 180px;
	}

	div.gallery:hover {
	  border: 1px solid #777;
	}

	div.gallery img {
	  width: 100%;
	  height: auto;
	}

	div.desc {
	  padding: 15px;
	  text-align: center;
	}
	body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
	.w3-row-padding img {margin-bottom: 12px}
	/* Set the width of the sidebar to 120px */
	.w3-sidebar {width: 120px;background: #222;}
	/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
	#main {margin-left: 120px}
	/* Remove margins from "page content" on small screens */
	@media only screen and (max-width: 600px) {#main {margin-left: 0}}
	.mySlides {display:none;}
	</style>
	<body class="w3-black">
	

	<!-- Icon Bar (Sidebar - hidden on small screens) -->
	<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
	  <!-- Avatar image in top left corner -->
	  <img src="{{ asset('/images/app1.jpg') }}" style="width:100%">
	  <a href="{{ route('homePage') }}" class="w3-bar-item w3-button w3-padding-large w3-black">
	    <i class="fa fa-home w3-large"></i>
	    <p>HOME</p>
	  </a>
	  <a href="{{ route('aboutPage') }}" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
	    <i class="fa fa-user w3-large"></i>
	    <p>ABOUT</p>
	  </a>
	  <a href="{{ route('photoPage') }}" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
	    <i class="fa fa-eye w3-large"></i>
	    <p>PHOTOS</p>
	  </a>
	  <a href="{{ route('videoPage') }}" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
	    <i class="fa fa-play w3-large"></i>
	    <p>VIDEOS</p>
	  </a>
	  <a href="{{ route('contactPage') }}" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
	    <i class="fa fa-envelope w3-large"></i>
	    <p>CONTACT</p>
	  </a>
	  <a href="{{ route('basicPage') }}" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
	    <i class="fa fa-address-book-o w3-large"></i>
	    <p>MY PROJECTS</p>
	  	</a>
	  
	</nav>

	<!-- Navbar on small screens (Hidden on medium and large screens) -->
	<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
	  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
	    <a href="{{ route('homePage') }}" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
	    <a href="{{ route('aboutPage') }}" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
	    <a href="{{ route('photoPage') }}" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
	    <a href="{{ route('videoPage') }}" class="w3-bar-item w3-button" style="width:25% !important">VIDEOS</a>
	    <a href="{{ route('contactPage') }}" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
	    <a href="{{ route('basicPage') }}" class="w3-bar-item w3-button" style="width:25% !important">WORK</a>
	  </div>
	</div>



	@yield('content')

	 <!-- Footer -->
	  	<p><footer class="w3-content w3-padding-64 w3-text-grey w3-xxxlarge">
	    <a href="https://www.facebook.com/henryfong852" target="_blank" class="fa fa-facebook-official w3-hover-opacity" role="button"></a>
	    <a href="https://www.instagram.com/henryfong_" target="_blank" class="fa fa-instagram w3-hover-opacity" role="button"></a>
	    <a href="{{ asset('/images/snapcode.png') }}" target="_blank" class="fa fa-snapchat w3-hover-opacity" role="button"></a>
	    <a href="https://www.linkedin.com/in/henryfong852" target="_blank" class="fa fa-linkedin w3-hover-opacity" role="button"></a>
	    <a href="https://github.com/henryfonghku/HTML-SQL-PHP-Projects" target="_blank" class="fa fa-github w3-hover-opacity" role="button"></a>

	    

	  <!-- End footer -->
  	</footer>

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

	@yield('js')

<!-- END PAGE CONTENT -->
</div>

</body>
</html>