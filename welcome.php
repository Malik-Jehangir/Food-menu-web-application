
<?php 
if ( isset( $_POST['logout'] ) ) 
{
session_start();

session_unset();

session_destroy();

header("location:login.php");

exit();

}

?>
<html>
   
   <head>
   <link rel="stylesheet" type="text/css" href="nav.css">
     <style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
    border-right:1px solid #bbb;
}

li:last-child {
    border-right: none;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #DC143C;
}

.active {
    background-color: #DC143C;
}
</style>
	 
      <title>FODP | Home Page</title>
      
     
      
   </head>
   
   <body style=" background: rgba(255, 255, 255, 0.5) url() no-repeat 0 70%;     margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;">
	
   

   <label><font face="moire" size="10px" style="width: 1000px; height: 40px; right: 60%"><b>FOOD ONLINE DELIVERY PLATFORM<b></font></label><form action="" method="post"><input type = "submit" name="logout" value = "Logout"  style="position:absolute; top:2%; left:90%; font-size: 24px; font-family: moire;" /></form><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
     


 <div align="center" style="position:absolute; top:10%; bottom:20%; width:100%">
             <ul>
  <li><a class="active" href="welcome.php">Home</a></li>
  <li><a href="offers.php">Offers</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a  href="aboutus.php">About</a></li>
</ul>
</div>
	 
	 <!--slide show-->
	 <div align="center" style="position:absolute; top:17%; bottom:30%; width:100%; background-color: #A02424;height: 400px">
	 <div class="slideshow-container" >
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="images/img1.jpg" style="width:100%; height: 400px">
    <div class="text">Biryani that can taste the best</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="images/img2.jpg" style="width:100%; height: 400px">
    <div class="text">Soup that stirs the continental cuisine spirit</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="images/img3.jpg" style="width:100%; height: 400px">
    <div class="text">The sweet dive in Jordanian Kunafa</div>
  </div>

  
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
	 </div>
	 
	 
	 
	 <!--slide show ends-->
	 
	 <!--Javascript for slide show-->
	 <script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}

function showSlidesMe(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}

function currentSlide(n) {
  showSlidesMe(slideIndex = n);
}
</script>

	 
	 <!--  Javascript for slide show ends -->
	 
	 

	 
	          
             
  <div style=" position:absolute;
   bottom:0;
   width:100%;
   height:60px;
   
   background:#A02424;">
               <a  align="center" href="copyright.php" style="position:absolute; top:10%; bottom:30%; left:43%; right=20%; color:white">Copyrights @ 2017</a></div>
 
   </body>
</html>