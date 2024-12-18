showSlides(slideIndex = 1);
let slideIndexAuto = 0;
showSlidesAuto();
// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i=0;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active1", "");
  }

  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active1";

}

function showSlidesAuto() {
  let i;
  let slides = document.getElementsByClassName("mySlidesAuto");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndexAuto++;
  if (slideIndexAuto > slides.length) {slideIndexAuto = 1}    
  slides[slideIndexAuto-1].style.display = "block";  
  setTimeout(showSlidesAuto, 5000); // Change image every 2 seconds
}
