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
  var nrs = document.getElementsByClassName("nr");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < nrs.length; i++) {
      nrs[i].className = nrs[i].className.replace(" nractive", "");
  }
  slides[slideIndex-1].style.display = "block";  
  nrs[slideIndex-1].className += " nractive";
}