<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Micheal Akinbebije, A Full Stack Developer">
    <title>Bing HR Users</title>
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{URL::asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.js')}}"></script>
    <link href="{{URL::asset('css/indexstyles.css')}}" rel="stylesheet">
    
    
   <link rel="stylesheet" type="text/css" href="{{URL::asset('css/fontawesome-pro-6.1.0-web/css/all.css')}}">
   <link rel="stylesheet" href="{{URL::asset('css/fontawesome-pro-6.1.0-web/css/all.min.css')}}">
   <link rel="stylesheet" href="{{URL::asset('css/fontawesome-pro-6.1.0-web/css/fontawesome.css')}}">
   <link rel="stylesheet" href="{{URL::asset('css/fontawesome-pro-6.1.0-web/css/fontawesome.min.css')}}">
   <link rel="stylesheet" href="{{URL::asset('css/fontawesome-pro-6.1.0-web/css/regular.css')}}">
   <link rel="stylesheet" href="{{URL::asset('css/fontawesome-pro-6.1.0-web/css/regular.min.css')}}">
   <link rel="stylesheet" href="{{URL::asset('css/fontawesome-pro-6.1.0-web/css/solid.css')}}">
   <link rel="stylesheet" href="{{URL::asset('css/fontawesome-pro-6.1.0-web/css/solid.min.css')}}">
   <link rel="stylesheet" href="{{URL::asset('css/fontawesome-pro-6.1.0-web/css/thin.css')}}">
   <link rel="stylesheet" href="{{URL::asset('css/fontawesome-pro-6.1.0-web/css/thin.min.css')}}">
   <link rel="stylesheet" href="{{URL::asset('css/fontawesome-pro-6.1.0-web/css/light.css')}}">
   <link rel="stylesheet" href="{{URL::asset('css/fontawesome-pro-6.1.0-web/css/light.min.css')}}">
   <link rel="stylesheet" href="{{URL::asset('css/fontawesome-pro-6.1.0-web/css/duotone.css')}}">
   <link rel="stylesheet" href="{{URL::asset('css/fontawesome-pro-6.1.0-web/css/duotone.min.css')}}">


    

    <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }
  
        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
        /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
  height:80%;
  border-radius:10px ;
}

/* The Closem Button */
.closem {
  color: black;
  font-size: 28px;
  font-weight: bold;
}

.closem:hover,
.closem:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
      </style>


  
</head>
<body>

    @yield('content')
   
<script>
      /* Sets the width of the sidebar
      to 250 and the left margin of the
      page content to 250 */
      function openNav() {
          document.getElementById(
          "sidebar").style.display = "block";
          document.getElementById(
          "form").style.marginLeft = "-1050px";
          document.getElementById(
          "open").style.display = "none";
          document.getElementById(
          "close").style.display = "block";
          document.getElementById(
          "main").style.width = "1650px";
          document.getElementById(
          "main").style.marginLeft = "0px";
      }
  
      /* Set the width of the sidebar
      to 0 and the left margin of the
      page content to 0 */
      function closeNav() {
          document.getElementById(
          "sidebar").style.display = "none";
          document.getElementById(
          "main").style.marginLeft = "0";
          document.getElementById(
          "main").style.width = "1850px";
          document.getElementById(
          "form").style.marginLeft = "-1150px";
          document.getElementById(
          "close").style.display = "none";
          document.getElementById(
          "open").style.display = "block";
      }
      // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closem")[0];
var spann = document.getElementsByClassName("closemm")[0];


// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
spann.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
//--------------------------------
	// This code compares two fields in a form and submit it
	// if they're the same, or not if they're different.
	//--------------------------------
	function checkEmail(theForm) {
		if (theForm.password.value != theForm.rpassword.value)
		{
			alert('Those password don\'t match!');
			return false;
		} else {
			return true;
		}
	}
	//-->
  </script>
 <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>