// Preloader
$(window).on("load", function () {
	$("#preloader-bg").fadeOut(500);
});

// Mobile navbar
let burger = document.getElementById('navbar-toggle'),
	nav    = document.getElementById('navbar');

burger.addEventListener('click', function(e){
	this.classList.toggle('toggle-open');
	nav.classList.toggle('menu-opened');
});


$(document).ready(function(){
	/* Main page banner carousel */
	$('#carousel-banner').slick({
		autoplay: true,
		fade: true,
		pauseOnHover: true,
		// adaptiveHeight: true,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					arrows: false
				}
			}
		]
	});

	/* Main page news carousel */
	$('#carousel-news').slick({
		autoplay: true,
		pauseOnHover: true,
		slidesToShow: 3,
		dots: true,
		adaptiveHeight: true,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					arrows: false,
					slidesToShow: 1
				}
			}
		]
	});

	/* Tabs */
	$("ul.tabs-caption").on("click", "li:not(.active)", function() {
		$(this)
		  .addClass("active")
		  .siblings()
		  .removeClass("active")
		  .closest("div.tabs")
		  .find("div.tab-panel")
		  .removeClass("active")
		  .eq($(this).index())
		  .addClass("active");
	});
});
  