<!DOCTYPE HTML>
<html>
 <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JDM</title>
  <link rel="stylesheet" href="Main.css">
 </head>
 <body>
     <video autoplay muted loop id="myVideo">
  <source src="Main.mp4" type="video/mp4">
</video>
     <div class="content">
         <image src="log.png"></image>
  <p></p>
         <p id="logoname"><font size="20" color="White" face="Old English Text MT">JDM</font></p>
         <p id="Recom"><font size="20" color="White">Рекомендуем для покупки: Mazda RX-7</font></p>
         <p id="about"><font size="4" color="White">Крупнейший поставщик японских автомобилей в стиле JDM</font></p>
         <a href="AutoAll.php"><button id="myBtn" onclick="myFunction()" >Выбрать авто</button></a>
         <a href="Auth.php"><button id="myBtn1" onclick="myFunction()">Авторизоваться</button></a>
         <button id="Buy" onclick="myFunction()">Купить сейчас</button>
</div>
     
     
     <div class="content2">

<div class="slideshow-container" style="border-radius: 8px;" class="radius">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="car2.png" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="car1.png" style="width:100%">
</div>
   
<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="car3.png" style="width:100%">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
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
</script>
         
         
         
     </div>
     
     
 </body>
</html>