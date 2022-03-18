	var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  
  newSlide = slideIndex += n;
  showSlides(newSlide);
  //var button = getElementByID("delete");
  //button.href = "Delete.php?imageIndex=" + slideIndex;
  
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
  
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("demo").length;
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides) {slideIndex = 1}
  if (n < 1) {slideIndex = slides}

  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  document.getElementById("numbers").innerHTML = slideIndex + " / " + slides;
  document.getElementById("image").src = dots[slideIndex-1].src;
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
  var hiddenInput = document.getElementById("hiddenInput");
  hiddenInput.value=dots[slideIndex-1].alt;
}



