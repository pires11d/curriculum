//region CLICK/HOVER FUNCTIONS

$("body").bind("touchstart", function() {});

$(".doc").hover(function() {
    (this).src = "icon/doc2.png"
});
$(".doc").mouseout(function() {
    (this).src = "icon/doc.png"
});


$("#c1_1").click(function() {
    $("#hidden1").slideToggle();
});
$("#c1_2").click(function() {
    $("#hidden2").slideToggle();
});
$("#c1_3").click(function() {
    $("#hidden3").slideToggle();
});
$("#c1_4").click(function() {
    $("#hidden4").slideToggle();
});


$(".dropbtn").click(function() {
    // $(".dropdown").slideToggle();
    $(".dropdown-content").slideToggle();
});


$("#h1_1").hover(function() {
    $(this).html("Universidade Federal de Santa Catarina");
});
$("#h1_1").mouseout(function() {
    $(this).html("UFSC (BRA)");
});
$("#h1_2").hover(function() {
    $(this).html("University of New Brunswick");
});
$("#h1_2").mouseout(function() {
    $(this).html("UNB (CAN)");
});

// window.addEventListener('load',myOnLoadFunction);
// function myOnLoadFunction () {
//     document.getElementsByClassName("dropdown-content").style.display = "none";
// };
// myOnLoadFunction();

// function showDropdown(n) {
//     var i = document.getElementById("dropbtn");
//     i.ontouchstart(document.getElementsByClassName("dropdown").style.display = "block");
// }
// showDropdown();

//endregion


// region GALLERY FUNCTIONS

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function changeSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var stdSlide = document.getElementById("stdSlide");
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
  stdSlide.style.display = "none";
}

// endregion