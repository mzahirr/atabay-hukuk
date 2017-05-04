"use strict";

// contact form validation
function contactFormValidation () {
	if($('.thm-contact-form').length){
		$('.thm-contact-form').validate({ // initialize the plugin
			rules: {
				name: {
					required: true
				},
				email: {
					required: true,
					email: true
				},
				phone: {
					required: true
				},
				date: {
					required: true
				},
				message: {
					required: true
				},
				subject: {
					required: true
				}
			},
			submitHandler: function (form) { 
				// sending value with ajax request
				$.post($(form).attr('action'), $(form).serialize(), function (response) {
					$(form).parent('div').append(response);
					$(form).find('input[type="text"]').val('');
					$(form).find('input[type="email"]').val('');
					$(form).find('textarea').val('');
				});
				return false;
			}
		});
	}
}

// Google Map
function gMap () {
	if ($('.google-map').length) {
        $('.google-map').each(function () {
        	// getting options from html 
        	var mapName = $(this).attr('id');
        	var mapLat = $(this).data('map-lat');
        	var mapLng = $(this).data('map-lng');
        	var iconPath = $(this).data('icon-path');
        	var mapZoom = $(this).data('map-zoom');
        	var mapTitle = $(this).data('map-title');

        	// if zoom not defined the zoom value will be 15;
        	if (!mapZoom) {
        		var mapZoom = 15;
        	};
        	// init map
        	var map;
            map = new GMaps({
                div: '#'+mapName,
                scrollwheel: false,
                lat: mapLat,
                lng: mapLng,
                zoom: mapZoom
            });
            // if icon path setted then show marker
            if(iconPath) {
        		map.addMarker({
	            	icon: iconPath,
	                lat: mapLat,
	                lng: mapLng,
	                title: mapTitle
	            });
        	}
        });  
	};
}

function headerSearchToggler () {
	if($('header .search-box').length) {
		$('.header-search-toggler').on('click', function () {
			$('header .search-box').slideToggle();
		});
	}
}

function stickyHeader () {
	if ($('.stricky').length) {
		var strickyScrollPos = $('.stricky').next().offset().top;
		if($(window).scrollTop() > strickyScrollPos) {
			$('.stricky').addClass('stricky-fixed'); 
		}
		else if($(this).scrollTop() <= strickyScrollPos) {
			$('.stricky').removeClass('stricky-fixed'); 
		}
	};
}

// revolution slider
function revolutionSliderActiver () {
	if ($('.home-v1.banner').length) {
		$('.home-v1.banner').revolution({
			delay:5000,
			startwidth:1170,
			startheight:940,
			startWithSlide:0,

			fullScreenAlignForce:"on",
			autoHeight:"off",
			minHeight:"off",

			shuffle:"off",

			onHoverStop:"off",

			thumbWidth:100,
			thumbHeight:50,
			thumbAmount:3,

			hideThumbsOnMobile:"off",
			hideNavDelayOnMobile:1500,
			hideBulletsOnMobile:"off",
			hideArrowsOnMobile:"off",
			hideThumbsUnderResoluition:0,

			hideThumbs:0,
			hideTimerBar:"on",

			keyboardNavigation:"on",

			navigationType:"bullet",
			navigationArrows: "nexttobullets",
			navigationStyle:"preview4",

			navigationHAlign:"center",
			navigationVAlign:"bottom",
			navigationHOffset:30,
			navigationVOffset:30,

			soloArrowLeftHalign:"left",
			soloArrowLeftValign:"center",
			soloArrowLeftHOffset:20,
			soloArrowLeftVOffset:0,

			soloArrowRightHalign:"right",
			soloArrowRightValign:"center",
			soloArrowRightHOffset:20,
			soloArrowRightVOffset:0,


			touchenabled:"on",
			swipe_velocity:"0.7",
			swipe_max_touches:"1",
			swipe_min_touches:"1",
			drag_block_vertical:"false",

			parallax:"mouse",
			parallaxBgFreeze:"on",
			parallaxLevels:[10,7,4,3,2,5,4,3,2,1],
			parallaxDisableOnMobile:"off",

			stopAtSlide:-1,
			stopAfterLoops:-1,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			hideSliderAtLimit:0,

			dottedOverlay:"none",

			spinned:"spinner4",

			fullWidth:"on",
			forceFullWidth:"on",
			fullScreen:"off",
			fullScreenOffsetContainer:"#banner",
			fullScreenOffset:"0px",

			panZoomDisableOnMobile:"off",

			simplifyAll:"off",

			shadow:0

		});
	}
}

function CounterNumberChanger () {
	var timer = $('.timer');
	if(timer.length) {
		timer.appear(function () {
			timer.countTo();
		})
	}

}

// Mobile Navigation
function mobileNavToggler () {
	if ($('.mainmenu .nav-holder').length) {
		$('.mainmenu .nav-expander .nav-collapser').on('click', function () {
			$('.mainmenu .nav-holder').children('ul').slideToggle();
			return false;
		});
		$('.mainmenu .nav-holder ul li.dropdown').children('a').append(function () {
			return '<i class="fa fa-bars"></i>';
		});
		$('.mainmenu .nav-holder ul li.dropdown').children('a').find('.fa').on('click', function () {
			$(this).parent().parent().children('ul').slideToggle();			
			return false;
		});

	}
}


jQuery(document).on('ready', function(){
	(function ($) {
		headerSearchToggler();
		gMap();
		contactFormValidation();
		revolutionSliderActiver();
		mobileNavToggler();
		$('#nav').slicknav();
		$(".owl-carousel").owlCarousel({
			autoPlay: 3000, //Set AutoPlay to 3 seconds
			loop: true,
			dots: false,
			margin: 80,
			nav: true,
			autoWidth: true,
	        navText: [
	            '<i class="fa fa-angle-left"></i>',
	            '<i class="fa fa-angle-right"></i>'
	        ],
		    autoplayHoverPause: true,
		   items : 5,
		    responsive: {
		        0:{
		            items:1
		        },
		        480:{
		            items:2
		        },
		        600:{
		            items:3
		        },
		        1000:{
		            items:5
		        }
		    }

		  });

	})(jQuery);
	




  
	
  
  
});

jQuery(window).on('scroll', function(){
	(function ($) {

		stickyHeader();

	})(jQuery);
});
jQuery(window).on('load', function(){
	(function ($) {

		CounterNumberChanger();

	})(jQuery);
});