<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>T-bot</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel= "stylesheet" type= "text/css" href= "style.css">
<!--Chatbot-->
    <link rel= "stylesheet" type= "text/css" href= "style.css">
    <!--Speech-->
    <link rel="stylesheet" href="Speech_Add-on/speech-input.css">
    <script>
      window.console = window.console || function(t) {};
    </script>
    <script>
      if (document.location.search.match(/type=embed/gi)) {
        window.parent.postMessage("resize", "*");
      }
    </script>
</head>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("yo.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
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
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>

<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">T-bot</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
      <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
      <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>
      <a href="#pricing" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> PRICING</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
      <div id="logged_in" style="display:inline-block;"></div>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>
<!-- The Modal -->
<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" method="post">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
	  <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="submit" class="signupbtn" name="signupsubmit">Sign Up</button>
      </div>
	  
	<div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn" >Cancel</button>
      <label align="right">
        Already have a account? <a href="#" class="psw" onclick="document.getElementById('id02').style.display='none';document.getElementById('id01').style.display='block';">Sign In</a>
      </label>
    </div>
    </div>
  </form>
</div>

<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="main_logo.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit" name="submit">Login</button>
      <label>
        <a href="#" class="psw" onclick="document.getElementById('id01').style.display='none';document.getElementById('id02').style.display='block';">Sign Up</a> Instead
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <label class="psw">Forgot <a href="#">password?</a></label>
    </div>
  </form>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-white w3-black w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
  <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
  <div id="logged_in_1"></div>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Travel With AI</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Travel With AI</span><br>
    <span class="w3-large">Your Own Personalized Travel Assistant.</span>
    <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Your Own Personalized Travel Assistant.</a></p>
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center w3-xxlarge" >TEA IS EVERYWHERE</h3>
  <p class="w3-center w3-hide-large">Key features of our company</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-mobile w3-margin-bottom w3-xxlarge w3-center"></i>
      <p class="w3-large">Your Phone</p>
      <p> incididunt ut labore et dolore.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-laptop w3-margin-bottom w3-xxlarge"></i>
      <p class="w3-large">Your Browser</p>
      <p>Lorem et dolore.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-whatsapp w3-margin-bottom w3-xxlarge"></i>
      <p class="w3-large">Your Whatsapp</p>
      <p>Lorem ipsum doloe et dolore.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-facebook w3-margin-bottom w3-xxlarge"></i>
      <p class="w3-large">Your facebook</p>
      <p>Lorem ipsor incididunt ut labore et dolore.</p>
    </div>
  </div>
</div>

<!-- Promo Section - "We know design" -->
<div class="w3-container w3-light-grey" style="padding:128px 16px">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>We Will Sort Your Travel</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore.</p>
      <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Serices</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-small" src="Screenshot.png" alt="Buildings" width="200" height="200">
    </div>
  </div>
</div>

<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="team">
  <h3 class="w3-center">THE TEAM</h3>
  <p class="w3-center w3-large">The ones who runs this company</p>
  <div class="w3-row-padding w3-light-grayscale" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="" alt="John" style="width:100%">
        <div class="w3-container">
          <h3>John Doe</h3>
          <p class="w3-opacity">CEO & Founder</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>Anja Doe</h3>
          <p class="w3-opacity">Art Director</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h3>Mike Ross</h3>
          <p class="w3-opacity">Web Designer</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="" alt="Dan" style="width:100%">
        <div class="w3-container">
          <h3>Dan Star</h3>
          <p class="w3-opacity">Designer</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Slideshow container -->
<div class="slideshow-container">

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
  <div class="w3-quarter">
    <span class="w3-xxlarge">14+</span>
    <br>Partners
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">55+</span>
    <br>Projects Done
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">89+</span>
    <br>Happy Clients
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">150+</span>
    <br>Meetings
  </div>
</div>

<!-- Work Section -->
<div class="w3-container" style="padding:128px 60px" id="work">
  <h3 class="w3-center">OUR WORK</h3>
  <p class="w3-center w3-large">What we've done for people</p>
  <div class="w3-row-padding" style="margin-top:64px">
  <div class="w3-col l3 m6">
  <div class="w3-quarter flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="main4.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1> 
      <p>Architect & Engineer</p> 
      <p>We love that guy a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a </p>
    </div>
    </div>
  </div>
</div>
<div class="w3-col l3 m6">
  <div class="w3-quarter flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="main4.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1> 
      <p>Architect & Engineer</p> 
      <p>We love that guy</p>
    </div>
    </div>
  </div>
</div>
<div class="w3-col l3 m6">
  <div class="w3-quarter flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="main4.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1> 
      <p>Architect & Engineer</p> 
      <p>We love that guy</p>
    </div>
    </div>
  </div>
</div>
<div class="w3-col l3 m6">
  <div class="w3-quarter flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="main4.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1> 
      <p>Architect & Engineer</p> 
      <p>We love that guy</p>
    </div>
    </div>
  </div>
</div>
</div>
</div>
</div>


<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Skills Section -->
<div class="w3-container w3-light-grey w3-padding-64">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Our Skills.</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
      tempor incididunt ut labore et dolore.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
      tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="w3-col m6">
      <p class="w3-wide"><i class="fa fa-camera w3-margin-right"></i>Photography</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Web Design</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-photo w3-margin-right"></i>Photoshop</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:75%">75%</div>
      </div>
    </div>
  </div>
</div>

<!-- Pricing Section -->
<div class="w3-container w3-center w3-dark-grey" style="padding:128px 16px" id="pricing">
  <h3>PRICING</h3>
  <p class="w3-large">Choose a pricing plan that fits your needs.</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Basic</li>
        <li class="w3-padding-16"><b>10GB</b> Storage</li>
        <li class="w3-padding-16"><b>10</b> Emails</li>
        <li class="w3-padding-16"><b>10</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 10</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-black w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>
    <div class="w3-third">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-blue w3-xlarge w3-padding-48">Pro</li>
        <li class="w3-padding-16"><b>25GB</b> Storage</li>
        <li class="w3-padding-16"><b>25</b> Emails</li>
        <li class="w3-padding-16"><b>25</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 25</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-black w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Premium</li>
        <li class="w3-padding-16"><b>50GB</b> Storage</li>
        <li class="w3-padding-16"><b>50</b> Emails</li>
        <li class="w3-padding-16"><b>50</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 50</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-black w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Chicago, US</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +00 151515</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: mail@mail.com</p>
    <br>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-black" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
    <!-- Image of location/map -->
    <img src="beachtop.jpg" class="w3-image" style="width:100%;margin-top:48px">
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>


<!-- Travel Bot -->
<script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>

<!--Chatbot-->
      <div class="fabs">
      <div class="chat">
      <div class="chat_header">
        <div class="chat_option">
        <div class="header_img">
        <img src="https://res.cloudinary.com/dqvwa7vpe/image/upload/v1496415051/avatar_ma6vug.jpg" />
        </div>
        <span id="chat_head">Tea</span> <br> <span class="agent">Chatbot</span> <span class="online">(Online)</span>
         <span id="chat_fullscreen_loader" class="chat_fullscreen_loader"><i class="fullscreen zmdi zmdi-window-maximize"></i></span>

        </div>

      </div>
       
      <div class="chat_body chat_login">
        <a id="chat_first_screen" class="fab"><i class="zmdi zmdi-arrow-right"></i></a>
        <p>We make it simple and seamless for businesses and people to talk to each other. Ask us anything</p>
      </div>
      <div id="chat_converse" class="chat_conversion chat_converse">
          <a id="chat_second_screen" class="fab"><i class="zmdi zmdi-arrow-right"></i></a>
        <div class="chats" id="chats">
        <span class="chat_msg_item chat_msg_item_admin" >
          <div class="chat_avatar">
             <img src="https://res.cloudinary.com/dqvwa7vpe/image/upload/v1496415051/avatar_ma6vug.jpg" />
          </div>Hey! I am a travel bot. how can i help You!!</span>
        </div>
      </div>
      
      <div id="chat_body" class="chat_body">
        <div class="chat_category">
          <a id="chat_third_screen" class="fab"><i class="zmdi zmdi-arrow-right"></i></a>
        <p>What would you like to talk about?</p>
        <ul>
          <li>Tech</li>
          <li class="active">Sales</li>
          <li >Pricing</li>
          <li>other</li>
        </ul>
        </div>

      </div>
      <div id="chat_form" class="chat_converse chat_form">
      <a id="chat_fourth_screen" class="fab"><i class="zmdi zmdi-arrow-right"></i></a>
        <span class="chat_msg_item chat_msg_item_admin">
          <div class="chat_avatar">
             <img src="https://res.cloudinary.com/dqvwa7vpe/image/upload/v1496415051/avatar_ma6vug.jpg" />
          </div>Hey there! Any question?</span>
        <span class="chat_msg_item chat_msg_item_user">
          Hello!</span>
          <span class="status">20m ago</span>
        <span class="chat_msg_item chat_msg_item_admin">
          <div class="chat_avatar">
             <img src="https://res.cloudinary.com/dqvwa7vpe/image/upload/v1496415051/avatar_ma6vug.jpg" />
          </div>Agent typically replies in a few hours. Don't miss their reply.
          <div>
            <br>
            <form class="get-notified">
              <label for="chat_log_email">Get notified by email</label>
              <input id="chat_log_email" placeholder="Enter your email"/>
              <i class="zmdi zmdi-chevron-right"></i>
            </form>
          </div></span>

        <span class="chat_msg_item chat_msg_item_admin">
          <div class="chat_avatar">
             <img src="https://res.cloudinary.com/dqvwa7vpe/image/upload/v1496415051/avatar_ma6vug.jpg" />
          </div>Send message to agent.
          <div>
            <form class="message_form">
              <input placeholder="Your email"/>
              <input placeholder="Technical issue"/>
              <textarea rows="4" placeholder="Your message"></textarea>
              <button>Send</button> 
            </form>

        </div></span>   
      </div>
        <div id="chat_fullscreen" class="chat_conversion chat_converse">
        <span class="chat_msg_item chat_msg_item_admin">
          <div class="chat_avatar">
             <img src="https://res.cloudinary.com/dqvwa7vpe/image/upload/v1496415051/avatar_ma6vug.jpg" />
          </div>Hey there! Any question?</span>
        <span class="chat_msg_item chat_msg_item_user">
          Hello!</span>
          <div class="status">20m ago</div>
        <span class="chat_msg_item chat_msg_item_admin">
          <div class="chat_avatar">
             <img src="https://res.cloudinary.com/dqvwa7vpe/image/upload/v1496415051/avatar_ma6vug.jpg" />
          </div>Hey! Would you like to talk sales, support, or anyone?</span>
        <span class="chat_msg_item chat_msg_item_user">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
        <span class="chat_msg_item chat_msg_item_admin">
          <div class="chat_avatar">
             <img src="https://res.cloudinary.com/dqvwa7vpe/image/upload/v1496415051/avatar_ma6vug.jpg" />
           </div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
        <span class="chat_msg_item chat_msg_item_user">
          Where can I get some?</span>
        <span class="chat_msg_item chat_msg_item_admin">
          <div class="chat_avatar">
             <img src="https://res.cloudinary.com/dqvwa7vpe/image/upload/v1496415051/avatar_ma6vug.jpg" />
           </div>The standard chuck...</span>
        <span class="chat_msg_item chat_msg_item_user">
          There are many variations of passages of Lorem Ipsum available</span>
          <div class="status2">Just now, Not seen yet</div>
        <span class="chat_msg_item ">
          <ul class="tags">
          <li>Hats</li>
          <li>T-Shirts</li>
          <li>Pants</li>
          </ul>
        </span>
      </div>
      <div class="fab_field">
        <a id="fab_camera" class="fab"><i class="volume zmdi zmdi-volume-up"></i></a>
        <a id="fab_send" class="fab"><i class="zmdi zmdi-mail-send"></i></a>
        <input type="text" id="chatSend" class="chat_field chat_message  speech-input" name="chat_message" placeholder="Type a message..." >
      </div>
      </div>
      <a id="prime" class="fab"><i class="prime zmdi zmdi-comment-outline"></i></a>
    </div>
    <!--JavaScripts Chatbot-->
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script id="rendered-js" >
      hideChat(0);

      $('#prime').click(function () {
        toggleFab();
      });


      //Toggle chat and links
      function toggleFab() {
        $('.prime').toggleClass('zmdi-comment-outline');
        $('.prime').toggleClass('zmdi-close');
        $('.prime').toggleClass('is-active');
        $('.prime').toggleClass('is-visible');
        $('#prime').toggleClass('is-float');
        $('.chat').toggleClass('is-visible');
        $('.fab').toggleClass('is-visible');

      }

      $('#chat_first_screen').click(function (e) {
        hideChat(1);
      });

      $('#chat_second_screen').click(function (e) {
        hideChat(2);
      });

      $('#chat_third_screen').click(function (e) {
        hideChat(3);
      });

      $('#chat_fourth_screen').click(function (e) {
        hideChat(4);
      });

      //volume button
      $('#fab_camera').click(function (e) {
        $('.volume').toggleClass('zmdi zmdi-volume-up');
        $('.volume').toggleClass('zmdi zmdi-volume-off');
      })

      $('#chat_fullscreen_loader').click(function (e) {
        $('.fullscreen').toggleClass('zmdi-window-maximize');
        $('.fullscreen').toggleClass('zmdi-window-restore');
        $('.chat').toggleClass('chat_fullscreen');
        $('.fab').toggleClass('is-hide');
        $('.header_img').toggleClass('change_img');
        $('.img_container').toggleClass('change_img');
        $('.chat_header').toggleClass('chat_header2');
        $('.fab_field').toggleClass('fab_field2');
        $('.chat_converse').toggleClass('chat_converse2');
        //$('#chat_converse').css('display', 'none');
        // $('#chat_body').css('display', 'none');
        // $('#chat_form').css('display', 'none');
        // $('.chat_login').css('display', 'none');
        // $('#chat_fullscreen').css('display', 'block');
      });

      function hideChat(hide) {
        switch (hide) {
        case 0:
          $('#chat_converse').css('display', 'none');
          $('#chat_body').css('display', 'none');
          $('#chat_form').css('display', 'none');
          $('.chat_login').css('display', 'block');
          $('.chat_fullscreen_loader').css('display', 'none');
          $('#chat_fullscreen').css('display', 'none');
          break;
        case 1:
          $('#chat_converse').css('display', 'block');
          $('#chat_body').css('display', 'none');
          $('#chat_form').css('display', 'none');
          $('.chat_login').css('display', 'none');
          $('.chat_fullscreen_loader').css('display', 'block');
          break;
        case 2:
          $('#chat_converse').css('display', 'none');
          $('#chat_body').css('display', 'block');
          $('#chat_form').css('display', 'none');
          $('.chat_login').css('display', 'none');
          $('.chat_fullscreen_loader').css('display', 'block');
          break;
        case 3:
          $('#chat_converse').css('display', 'none');
          $('#chat_body').css('display', 'none');
          $('#chat_form').css('display', 'block');
          $('.chat_login').css('display', 'none');
          $('.chat_fullscreen_loader').css('display', 'block');
          break;
        case 4:
          $('#chat_converse').css('display', 'none');
          $('#chat_body').css('display', 'none');
          $('#chat_form').css('display', 'none');
          $('.chat_login').css('display', 'none');
          $('.chat_fullscreen_loader').css('display', 'block');
          $('#chat_fullscreen').css('display', 'block');
          break;}

      }
      //# sourceURL=pen.js
    </script>
    <!--JS Speech Input-->
    <script src="Speech_Add-on/speech-input.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!--JS Chatbot-->
    <script type="text/javascript" src="script.js"></script>

    </script>
    <form method=post>
      <input type="submit" id="logout" name="logout">
    </form>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
// Get the modal
var modal2 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}
function lol(){
  document.getElementById("id01").style.display="block";
}
function haha(){
  alert("lol");
  document.getElementById("logout").click();
}
</script>

<?php
if (array_key_exists("submit",$_POST)){
	$conn = new mysqli("remotemysql.com","znQpgumjmV","p55RkgsiKw","znQpgumjmV");
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	// getting the value of name field
	$email = $_POST["email"];
	$password = $_POST["password"];

	//Requesting Data
	$sql = "SELECT password FROM users where email='".$email."'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			if ($password==$row["password"]){
				$username=explode("@",$email)[0];
				$_SESSION['my_login_var']=$username;
			}
			else{
				echo '<script> alert("Incorrect Passowrd")</script>';
			}
		}
	} 
	else {
		echo '<script> alert("User Dosen\'t exist")</script>';
	}
	$result->close();
	$conn->close();
} 
if (array_key_exists("signupsubmit",$_POST)){
	$conn = new mysqli("remotemysql.com","znQpgumjmV","p55RkgsiKw","znQpgumjmV");
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	// getting the value of name field
	$email = $_POST["email"];
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo '<script> alert("Invalid Email")</script>';
    }
    else{
    	$password = $_POST["password"];
        
    	$sql = "SELECT password FROM users where email='".$email."'";
    	$result = $conn->query($sql);
    
    	if ($result->num_rows > 0) {
    		echo '<script> alert("User Already Exists")</script>';
    	}
    	else{
    		$query="insert into users values ('".$email."','".$password."')";
    		$stmt=$conn->prepare($query);
    		$stmt->execute();
    		$stmt->close();
			$username=explode("@",$email)[0];
    		$_SESSION['my_login_var']=$username; 
    	}
    }
	$conn->close();
}
if (array_key_exists("logout",$_POST)){
        echo "<script>alert('haha')</script>";
        unset($_SESSION['my_login_var']); 
}
if (!isset($_SESSION['my_login_var'])) {
    echo '<script type="text/JavaScript">document.getElementById("logged_in").innerHTML=\'<a href="#" class="w3-bar-item w3-button" onclick="lol()"><i class="fa fa-envelope"></i> SIGN IN</a>\';</script>';
	echo '<script type="text/JavaScript">document.getElementById("logged_in_1").innerHTML=\'<a href="#" onclick="w3_close()" class="w3-bar-item w3-button">SIGN IN</a>\';</script>';
}
else{
    echo '<script type="text/JavaScript">document.getElementById("logged_in").innerHTML=\'<a href="#" class="w3-bar-item w3-button" onclick="haha()"><i class="fa fa-envelope"></i>&nbsp;'.$_SESSION['my_login_var'].'</a>\'</script>'; 
	echo '<script type="text/JavaScript">document.getElementById("logged_in").innerHTML=\'<a href="#" onclick="w3_close();haha()" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i>>&nbsp;'.$_SESSION['my_login_var'].'</a>\'</script>';  
  echo "<script>var user='".$_SESSION['my_login_var']."'</script>";
}
?>

<script type="text/javascript" src="script.js"></script>

</body>
</html>
