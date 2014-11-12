$(function() {

	var menuElems = $('.top-bar-section').find('ul');
	menuElems.find('li').removeClass('active');
	if(location.pathname.indexOf('people') != -1){
		menuElems.find('.menu-people').addClass('active');
	}else if(location.pathname.indexOf('state') != -1){
		menuElems.find('.menu-state').addClass('active');
	}else if(location.pathname.indexOf('event') != -1){
		menuElems.find('.menu-event').addClass('active');
	}else if(location.pathname.indexOf('invention') != -1){
		menuElems.find('.menu-invention').addClass('active');
	}

});