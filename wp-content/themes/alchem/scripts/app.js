// Sticky Header
$(window).scroll(function() {

    if ($(window).scrollTop() > 100) {
        $('.main_h').addClass('sticky');
    } else {
        $('.main_h').removeClass('sticky');
    }
});

// Mobile Navigation
$('.mobile-toggle').click(function() {
    if ($('.main_h').hasClass('open-nav')) {
        $('.main_h').removeClass('open-nav');
    } else {
        $('.main_h').addClass('open-nav');
    }
});

$('.main_h li a').click(function() {
    if ($('.main_h').hasClass('open-nav')) {
        $('.navigation').removeClass('open-nav');
        $('.main_h').removeClass('open-nav');
    }
});

// navigation scroll lijepo radi materem
$('nav a').click(function(event) {
    var id = $(this).attr("href");
    var offset = 70;
    var target = $(id).offset().top - offset;
    $('html, body').animate({
        scrollTop: target
    }, 500);
    event.preventDefault();
});


function isElementInView(el) {
	if (typeof jQuery === "function" && el instanceof jQuery) {
		el = el[0];
	}

	var react = el.getBoundingClientRect();
	return (
		react.top >= 0 &&
		react.left >= 0 &&
	    react.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
	    react.right <= (window.innerWidth || document.documentElement.clientWidth)
	)
}

var items = document.querySelectorAll('.timeline__list');

function callBackFun() {
	for(var i = 0; i < items.length; i++){
		if (isElementInView(items[i])){
			items[i].classList.add("in-view");
		}
	}
}

window.addEventListener("load", callBackFun);
window.addEventListener("scroll", callBackFun);





var slideIndex = 1;
showSlides(slideIndex);


function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = $(".mySlides");
  var dots = $(".dots__d");
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


$(document).ready(function() {
      $('form').submit(function (event) {
        event.preventDefault();
        var name = $("#mail-name").val(),
            email = $("#mail-email").val(),
            message = $("#mail-message").val(),
            familyname = $("#familyname").val(),
            token = $("#token").val(),
            submit = $("#mail-submit").val();
        $(".form-message").load("process_form.php", {
          name: name,
          email: email,
          message: message,
          familyname: familyname,
          token: token,
          submit: submit
        });
      });
});


var $socialLink = $(".footer__link--soc");

$socialLink.each(function(index, element){
  var icon = $(element).find("i");
  var time = 0.2;
  var tl = new TimelineMax({paused:true});
  tl.to(icon, time, {y:30, ease:Expo.easeIn})
    .set(icon, {y:-30})
    .to(icon, time, {y:0, ease:Back.easeOut});
  element.animation = tl;
})

  $socialLink.hover(over, out);

  function over(){
    this.animation.play();
  }

  function out(){
    this.animation.reverse();
  }

