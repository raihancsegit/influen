(function ($) {
 "use strict";
$(document).ready(function(){
	  
		/*
		Jquery Mobile Menu
		============================*/
/* 		$('#main-menu').meanmenu({
			meanScreenWidth: "767",
			meanMenuContainer: '.mobile-nav-menu',
		});	 */
		// breakpoint and up  
/* 		$(window).resize(function(){
			if ($(window).width() >= 768){	

			  // when you hover a toggle show its dropdown menu
			  $(".navbar .dropdown-toggle").hover(function () {
				 $(this).parent().toggleClass("show");
				 $(this).parent().find(".dropdown-menu").toggleClass("show"); 
			   });

				// hide the menu when the mouse leaves the dropdown
			  $( ".navbar .dropdown-menu" ).mouseleave(function() {
				$(this).removeClass("show");  
			  });
		  
				// do something here
			}	
		});   */



		
		/*
		Search Bar Js
		============================*/		
/* 		
    $('a[href="#search"]').on('click', function(event) {
        event.preventDefault();
        $('#search').addClass('open');
        $('#search > form > input[type="search"]').focus();
    });
    
    $('#search, #search button.close').on('click keyup', function(event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
            $(this).removeClass('open');
        }
    }); */
    
	/*
		Testimonial v1 Crousel
		============================*/ 	

		  
    var carousel = $(".testimonial-v1-all");
    carousel.owlCarousel({
			autoplay: true, 
			pagination:false,
			nav:false, 
			dots:true, 
			margin:60,
			items :3,
			navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				768:{
					items:2
				},				
				992:{
					items:3
				}
			}
    });		  
		  
			checkClasses();
			carousel.on('translated.owl.carousel', function(event) {
				checkClasses();
			});

			function checkClasses(){
				var total = $('.testimonial-v1-all .owl-stage .owl-item.active').length;
				
				$('.testimonial-v1-all .owl-stage .owl-item').removeClass('firstActiveItem lastActiveItem');
				
				$('.testimonial-v1-all .owl-stage .owl-item.active').each(function(index){
					if (index === 0) {
						// this is the first one
						$(this).addClass('firstActiveItem');
					}
					if (index === total - 1 && total>1) {
						// this is the last one
						$(this).addClass('lastActiveItem');
					}
				});
			}		  
		  
		/*
		Accordion Active JS
		============================*/
		$('.panel-heading a').click(function() {
			$('.panel-heading').removeClass('active');
			if(!$(this).closest('.panel').find('.panel-collapse').hasClass('in'))
				$(this).parents('.panel-heading').addClass('active');
		});	
					
		/*
		Service Crousel
		============================*/ 			
		  $(".service-crousel").owlCarousel({
			autoplay: true, 
			loop: true,
			pagination:false,
			nav:false, 
			dots:true, 
			center: true,
			margin:30,
			navText: ['<i class="icofont-long-arrow-left"></i>', '<i class="icofont-long-arrow-right"></i>'],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				768:{
					items:2
				},				
				992:{
					items:3
				},				
				1000:{
					items:3
				}
			}
		  }); 			
		/*
		Slider Portfolio
		============================*/ 	
		
		  $(".all-slide-portfolio").owlCarousel({
			autoplay: true, 
			loop: true,
			pagination:false,
			nav:false, 
			dots:true, 
			center: true,
			navText: ['<i class="icofont-long-arrow-left"></i>', '<i class="icofont-long-arrow-right"></i>'],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				768:{
					items:1
				},				
				992:{
					items:3
				},				
				1000:{
					items:3
				}
			}
		  }); 		
		 /*
		Patner Crousel
		============================*/ 	
		  $(".all-patner").owlCarousel({
			autoplay: true, 
			pagination:false,
			nav:false, 
			dots:true, 
			items :4,
			navText: ['<i class="icofont-long-arrow-left"></i>', '<i class="icofont-long-arrow-right"></i>'],
			responsive:{
				0:{
					items:2
				},
				600:{
					items:3
				},
				768:{
					items:4
				},				
				992:{
					items:4
				},				
				1000:{
					items:5
				}
			}
		  }); 		
		/*
		Testimonial Crousel
		============================*/ 	
		  $(".all-testimonial").owlCarousel({
			autoplay: true, 
			pagination:false,
			nav:true, 
			navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
			dots:true, 
			items :1,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				768:{
					items:1
				},				
				1000:{
					items:1
				}
			}			
		  }); 		
		/*
		Testimonial Version 2 Crousel
		============================*/ 	
		  $(".testimonaila-v2").owlCarousel({
			autoplay: true, 
			pagination:false,
			nav:false, 
			navText:["<i class='flaticon-left-arrow'></i>","<i class='icofont-thin-right'></i>"],
			dots:true, 
			items :1,
			margin:5,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				768:{
					items:1
				},				
				1000:{
					items:1
				}
			}			
		  }); 		
		/*
		Team V3 Crousel
		============================*/ 	
  
  
 jQuery(document).ready(function($) {
    
    var carousel = $(".team-v3-all");
    carousel.owlCarousel({
        loop : true,
        items : 5,
		center:true,
        margin:0,
        nav : true,
        dots : false,
    });

    checkClasses();
    carousel.on('translated.owl.carousel', function(event) {
        checkClasses();
    });

    function checkClasses(){
        var total = $('.team-v3-all .owl-stage .owl-item.active').length;
        
        $('.team-v3-all .owl-stage .owl-item').removeClass('firstActiveItem lastActiveItem');
        
        $('.team-v3-all .owl-stage .owl-item.active').each(function(index){
            if (index === 0) {
                // this is the first one
                $(this).addClass('firstActiveItem');
            }
            if (index === total - 1 && total>1) {
                // this is the last one
                $(this).addClass('lastActiveItem');
            }
        });
    }

        
}); 
 
		  
		  
		/*
		Slider Crousel
		============================*/ 
		$(".all-slide").owlCarousel({
            items: 1,
            nav: false,
            dots: true,
            autoplay: true,			
            loop: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            mouseDrag: false,
            touchDrag: false,
        });
        
        $(".all-slide").on("translate.owl.carousel", function(){	
            $(".slider-text h1").removeClass("animated fadeInUp").css("opacity", "0");
            $(".slider-text p").removeClass("animated fadeInDown").css("opacity", "0");
            $(".slider-text ul").removeClass("animated fadeInDown").css("opacity", "0");
        });
        
        $(".all-slide").on("translated.owl.carousel", function(){
            $(".slider-text h1").addClass("animated fadeInUp").css("opacity", "1");
            $(".slider-text p").addClass("animated fadeInDown").css("opacity", "1");
            $(".slider-text ul").addClass("animated fadeInDown").css("opacity", "1");
        });	
		
		/*
		scrollUp
		============================*/	
		$.scrollUp({
			scrollText: '<i class="fa fa-long-arrow-up"></i>',
			easingType: 'linear',
			scrollSpeed: 900,
			animation: 'fade'
		});	
		/*
		Counter Js
		============================*/ 
        $('.counter').counterUp({
            delay: 10,
            time: 1000			
        });
		
		/*
		Stikey Js
		============================*/ 
 		(function () {
			var nav = $('.custom-nav-menu');
			var scrolled = false;
			$(window).scroll(function () {
				if (120 < $(window).scrollTop() && !scrolled) {
					nav.addClass('sticky_menu animated fadeInDown').animate({ 'margin-top': '0px' });
					scrolled = true;
				}
				if (120 > $(window).scrollTop() && scrolled) {
					nav.removeClass('sticky_menu animated fadeInDown').css('margin-top', '0px');
					scrolled = false;
				}
			});
		}());
		
		
/*
		Google Map
		============================*/
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(55.378052, -3.435973), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"administrative.country","elementType":"geometry","stylers":[{"visibility":"simplified"},{"hue":"#ff0000"}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('gmap');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(55.378052, -3.435973),
                    map: map,
                    title: 'UK!'
                });
            }				
		/*
		Magnific Popup
		============================*/ 		
        $('.gallery-photo').magnificPopup({
            type: 'image',
            gallery: {
              enabled: true
            },
        });	 

		/*
		Portfolio Gallery Js
		============================*/			
$('.portfolio-grid').imagesLoaded( function() {
		$('.portfolio-grid-filter').on( 'click', 'li', function() {
		$("li").removeClass("active");
		$(this).addClass("active");			
		  var filterValue = $(this).attr('data-filter');
		  $grid.isotope({ filter: filterValue });
		});				
		var $grid = $('.portfolio-grid').isotope({
		  itemSelector: '.portfolio-selector',
		  layoutMode: 'fitRows',
		})	
});
		
	
		/*
		Preeloader
		============================*/
		$(window).on("load", function() {
			$('#preloader').fadeOut();
			$('#preloader-status').delay(200).fadeOut('slow');
			$('body').delay(200).css({'overflow-x':'hidden'});
		});

		

		
		
	});	
})(jQuery);

