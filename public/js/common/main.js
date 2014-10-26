jQuery(document).ready(function($){
	//if you change this breakpoint in the style.css file (or _layout.scss if you use SASS), don't forget to update this value as well
	var MQL = 1170;
	//primary navigation slide-in effect
	if($(window).width() > MQL) {
		var headerHeight = $('.header-content').height();
		$(window).on('scroll',
		{
	        previousTop: 0
	    },
	    function () {
		    var currentTop = $(window).scrollTop();
		    //check if user is scrolling up
		    if (currentTop < this.previousTop ) {
		    	//if scrolling up...
		    	if (currentTop > 0 && $('.header-content').hasClass('is-fixed')) {
		    		$('.header-content').addClass('is-visible');
		    	} else {
		    		$('.header-content').removeClass('is-visible is-fixed');
		    	}
		    } else {
		    	//if scrolling down...
		    	$('.header-content').removeClass('is-visible');
		    	if( currentTop > headerHeight && !$('.header-content').hasClass('is-fixed')) $('.header-content').addClass('is-fixed');
		    }
		    this.previousTop = currentTop;
		});
	}

	//open/close primary navigation
	$(document).on('click', '.switch-navigation', function(){

		$('.menu-marker').toggleClass('is-clicked');
		$('.header-content').toggleClass('menu-is-open');
		//in firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
		if( $('.navigation-menu').hasClass('is-visible') ) {
			$('.navigation-menu').removeClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
				$('body').removeClass('overflow-hidden');
				/*$('.search-area').find("input[type='text']").toggle();*/
			});
			
		} else {
			$('.navigation-menu').addClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
				$('body').addClass('overflow-hidden');
			});
			/*$('.search-area').find("input[type='text']").toggle();*/
		}
		$('.search-area').toggleClass('hidden');

	});
});