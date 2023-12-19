var currentSlide = 0;

function showSlide(index) {
  var slides = document.getElementsByClassName("slide");
  if (index >= slides.length) currentSlide = 0;
  if (index < 0) currentSlide = slides.length - 1;

  // Hide all slides
  for (var i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }

  // Show the current slide
  slides[currentSlide].style.display = "block";
}

function changeSlide(step) {
  showSlide(currentSlide += step);
}

// Start the slider and show the first slide
function startSlider() {
  showSlide(currentSlide);
}

// Initialize the slider when the DOM is fully loaded
document.addEventListener('DOMContentLoaded', startSlider);
