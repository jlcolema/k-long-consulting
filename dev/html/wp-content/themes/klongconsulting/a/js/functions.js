
/*-------------------------------------------
	Browser Detection
-------------------------------------------*/

// For when you get desparate.

// http://rog.ie/post/9089341529/html5boilerplatejs

// var b = document.documentElement;
// b.setAttribute('data-useragent',  navigator.userAgent);
// b.setAttribute('data-platform', navigator.platform);

// sample CSS: html[data-useragent*='Chrome/13.0'] { ... }


/*-------------------------------------------
	General Functions
-------------------------------------------*/


(function($){


	/* On Page Ready */

	$(document).ready(function (){


		/*-------------------------------------------
			Title
		-------------------------------------------*/

		// Notes...


		/*-------------------------------------------
			Open External URLs in New Window
		-------------------------------------------*/

		// Notes...


		$('a').each(function() {

			var a = new RegExp('/' + window.location.host + '/');

			if(!a.test(this.href)) {

				$(this).click(function(event) {

					event.preventDefault();
					event.stopPropagation();
					window.open(this.href, '_blank');

				});

			}

		});


		/*-------------------------------------------
			Nav Toggle
		-------------------------------------------*/

		// Notes...


		$('#nav').find('.toggle').click(function() {

			$(this).next('ul').toggleClass('open');

		});

		$('#nav').find('a').click(function() {

			$('#nav').find('ul').removeClass('open');

		});


		/*-------------------------------------------
			Scroll
		-------------------------------------------*/

		// Primary Navigation


		$('.more').find('a').smoothScroll({

			offset: -39,
			speed: 750,
			easing: 'swing'

		});

		$('#header').onePageNav({

			currentClass: 'current',
			changeHash: false,
			scrollSpeed: 750,
			scrollThreshold: 0.5,
			filter: '',
			scrollOffset: -39,
			easing: 'swing',

			begin: function() {

				// I get fired when the animation is starting

			},

			end: function() {

				// I get fired when the animation is ending

			},

			scrollChange: function($currentListItem) {

				// I get fired when you enter a section and I pass the list item of the section

			}

		});


		/*-------------------------------------------
			Dev Tools
		-------------------------------------------*/


		/*-------------------------------------------
			Screen Size
		-------------------------------------------*/


		if (location.hostname == 'klongconsulting.dev' || 'klongconsulting.smbls.com') {

			// Add class of "dev" to <body>

			$("body").addClass("dev");

			// Displays screen size on the fly.

			var pixelWindowWidth = $(window).width();
			var emWindowWidth = $(window).width() / 16;

			$("#footer").after('<div id="dev"></div>');

			$("#dev").text(pixelWindowWidth + "px" + " / " + emWindowWidth + "em");

		}


	});


	/* On Page Load */


	$(window).load(function() {


		/*-------------------------------------------
			Title
		-------------------------------------------*/

		// Notes...


	});


	/* On Window Resize */


	$(window).resize(function() {


		/*-------------------------------------------
			Dev Tools
		-------------------------------------------*/


		/*-------------------------------------------
			Screen Size
		-------------------------------------------*/


		if (location.hostname == 'klongconsulting.dev' || 'klongconsulting.smbls.com') {

			// Displays screen size on the fly.

			var pixelWindowWidth = $(window).width();
			var emWindowWidth = $(window).width() / 16;

			$("#dev").text(pixelWindowWidth + "px" + " / " + emWindowWidth + "em");

		}


	});


})(window.jQuery);