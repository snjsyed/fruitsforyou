<?php


?>


<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>fruits.</title>
    <link rel="stylesheet" type="text/css" href="fruits.css">
	  <script type="text/javascript" src="fruits.js"></script>
  </head>
  <header>
      <h1> fruits. </h1>
</header>
 
  <body>
      <hr>
<section class="slider">
<button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
<div class="mySlides">
<img width="200px" src="berry.jpg">
<div class="fruitdesc"> berries </div> </div>
<div class="mySlides">
<img width="200px" src="apple.jpg">
<div class="fruitdesc"> apple </div> </div>
<div class="mySlides">
<img width="200px"src="watermelon.jpg">
<div class="fruitdesc"> watermelon </div> </div>
<div class="mySlides">
<img width="200px"src="cherry.jpg">
<div class="fruitdesc"> cherry </div> </div>
<div class="mySlides">
<img width="200px" src="mango.jpg">
<div class="fruitdesc"> mango </div> </div>

<button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
</section>
      <footer> 
    <h3> thanks reehie < 3 </h3>
      </footer>

	
  </body>
  <script>
  var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}

carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 9000); 
}



</script>
</html>

