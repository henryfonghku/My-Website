@extends('app')

@section('content')
	<!-- Page Content -->
		<div class="w3-padding-large" id="main">
 	 <!-- Header/Home -->
 	 <head>
	<script>

	function setCookie(cname,cvalue,exdays) {
	  var d = new Date();
	  d.setTime(d.getTime() + (exdays*24*60*60*1000));
	  var expires = "expires=" + d.toGMTString();
	  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	}

	function getCookie(cname) {
	  var name = cname + "=";
	  var decodedCookie = decodeURIComponent(document.cookie);
	  var ca = decodedCookie.split(';');
	  for(var i = 0; i < ca.length; i++) {
	    var c = ca[i];
	    while (c.charAt(0) == ' ') {
	      c = c.substring(1);
	    }
	    if (c.indexOf(name) == 0) {
	      return c.substring(name.length, c.length);
	    }
	  }
	  return "";
	}

	function checkCookie() {
	  var user=getCookie("username");
	  if (user != "") {
	    alert("Welcome again " + user);
	  } else {
	     user = prompt("Please enter your name:","");
	     if (user != "" && user != null) {
	       setCookie("username", user, 30);
	     }
	  }
	}

	</script>
	</head>
	<body onload="checkCookie()">

	  	<header class="w3-container w3-padding-32 w3-center w3-black" id="home">
	    <h1 class="w3-jumbo"><span class="w3-hide-small">I'm</span> Henry Fong.</h1>
	    <p>Engineering & Finance Student.</p>
	    <p>The University of Hong Kong</p>
	    <div class="w3-content w3-section">
			  <img class="mySlides" src="{{ asset('/images/home.jpg') }}" width="1000" height="700">
			</div>
 		 </header>
 		 </body>


 

			


@endsection

@section('js')

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>




@endsection