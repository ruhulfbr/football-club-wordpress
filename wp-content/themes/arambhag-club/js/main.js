(function ($) {
"use strict";
/*--
	Counter UP
-----------------------------------*/
$('.counter').counterUp({
    delay: 20,
    time: 3000
});
/*--
	Menu Sticky
-----------------------------------*/
var windows = $(window);
windows.on('scroll', function() {
    var sticky = $('.header-area')
	var scroll = windows.scrollTop();
	if (scroll < 400) {
		sticky.removeClass('stick');
	}else{
		sticky.addClass('stick');
	}
});
/*--
	Mean Mobile Menu
------------------------*/
$('.main-menu nav').meanmenu({
	meanScreenWidth: '750',
	meanMenuContainer: '.mobile-menu',
	meanMenuClose: '<i class="zmdi zmdi-close"></i>',
	meanMenuOpen: '<i class="zmdi zmdi-menu"></i>',
	meanRevealPosition: 'right',
	meanMenuCloseSize: '30px',
	onePage: true,
});
/*--
	Hero Slider
-----------------------------------*/
$('.hero-slider').slick({
    infinite: true,
    prevArrow: '<button class="slick-prev"><i class="zmdi zmdi-chevron-left"></i></button>',
    nextArrow: '<button class="slick-next"><i class="zmdi zmdi-chevron-right"></i></button>',
    fade: true,
});
/*--
	Testimonial Slider
-----------------------------------*/
$('.testimonial-slider').slick({
    infinite: true,
    arrows: false,
});

/*--
	Amenities Border Line
-----------------------------------*/
$('.single-result .team-name').each(function(){

    var aLBorder = $(this).find('.left').width();
    var aRBorder = $(this).find('.right').width();

    $(this).find('.border').css({
        left: (aLBorder + 5),
        right: (aRBorder + 5),
    })
}) 
/*--
	Staff Slider
-----------------------------------*/
$('.staff-slider').slick({
    arrows: false,
    infinite: true,
    swipeToSlide: true,
    slidesToShow: 4,
    responsive: [
        {
          breakpoint: 1150,
          settings: {
            slidesToShow: 3,
          }
        },
        {
          breakpoint: 950,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 750,
          settings: {
            slidesToShow: 1,
          }
        }
    ]
});
/*--
	Product Slider
-----------------------------------*/
$('.product-slider').slick({
    arrows: false,
    infinite: true,
    swipeToSlide: true,
    slidesToShow: 4,
    responsive: [
        {
          breakpoint: 1150,
          settings: {
            slidesToShow: 3,
          }
        },
        {
          breakpoint: 950,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 750,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
    ]
});
/*--
	Bnews Slider
-----------------------------------*/
$('.bnews-slider').slick({
    arrows: false,
    adaptiveHeight: true,
    infinite: true,
    fade: true,
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 2000,
});
/*--
	Product Image Slider
-----------------------------------*/
$('.product-image-slider').slick({
    arrows: false,
    infinite: true,
    fade: true,
    slidesToShow: 1,
    asNavFor: '.product-thumb-slider',
});
/*--
	Product Thumb Slider
-----------------------------------*/
$('.product-thumb-slider').slick({
    infinite: true,
    vertical: true,
    verticalSwiping: true,
    swipeToSlide: true,
    focusOnSelect: true,
    centerMode: true,
    centerPadding: '0px',
    slidesToShow: 3,
    asNavFor: '.product-image-slider',
    prevArrow: '<button class="slick-prev"><i class="zmdi zmdi-chevron-up"></i></button>',
    nextArrow: '<button class="slick-next"><i class="zmdi zmdi-chevron-down"></i></button>',
    responsive: [
        {
          breakpoint: 750,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        }
    ]
});
/*--
	Magnific Popup
-----------------------------------*/
/*-- Video --*/
var videoPopup = $('.video-popup');
videoPopup.magnificPopup({
	type: 'iframe',
	mainClass: 'mfp-fade',
	removalDelay: 160,
	preloader: false,
	zoom: {
		enabled: true,
	}
});
/*-- Image --*/
var imagePopup = $('.image-popup');
imagePopup.magnificPopup({
	type: 'image',
});
/*-- Gallery --*/
var galleryPopup = $('.gallery-popup');
galleryPopup.magnificPopup({
	type: 'image',
	gallery:{
		enabled:true
	}	
});
/*-- Video Gallery --*/
var videGalleryPopup = $('.video-gallery-popup');
videGalleryPopup.magnificPopup({
	type: 'iframe',
	mainClass: 'mfp-fade',
	removalDelay: 160,
	preloader: false,
	zoom: {
		enabled: true,
	},
	gallery:{
		enabled:true
	}	
});
/*--
	Smooth Scroll
-----------------------------------*/
$('[data-scroll]').on('click', function(e) {
	e.preventDefault();
	var link = this;
	$.smoothScroll({
        speed: 1000,
        scrollTarget: link.hash,
        offset: -79,
	});
});
/*--
	Scroll Up
-----------------------------------*/
$.scrollUp({
	easingType: 'linear',
	scrollSpeed: 900,
	animation: 'fade',
	scrollText: '<i class="zmdi zmdi-chevron-up"></i>',
});
    
/*--
	Count Down Timer
------------------------*/
$('[data-countdown]').each(function() {
    var $this = $(this), finalDate = $(this).data('countdown');
    $this.countdown(finalDate, function(event) {
    $this.html(event.strftime('<div class="cdown days"><span class="counting">%-D</span>Days</div><div class="cdown hours"><span class="counting">%-H</span>Hours</div><div class="cdown minutes"><span class="counting">%M</span>Minutes</div>'));
    });
});
 
    
    
})(jQuery);	

