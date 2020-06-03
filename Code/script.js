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
  var slides = document.getElementsByClassName("slides");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
}

//////////////////////////////////////////calendar/////////////////////////////////////////////

//////////////////////////////////////////Login-Signup/////////////////////////////////////////////

function switchLoginSignup() {
var x = document.getElementById("1");
var y = document.getElementById("2");
if(window.getComputedStyle(x).display === "none"){
  document.getElementById("2").style ="display: none;";
  document.getElementById("1").style ="display: block;";
  } else {
  document.getElementById("1").style ="display: none;";
  document.getElementById("2").style ="display: block;";
}
}
