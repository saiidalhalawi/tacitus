$(function() {

	$('#timebox').dragScroll({});

	/*
	$('.vector.prev').on('mouseover', function(){
		var div = $('#timebox'), 
			pos = div.scrollLeft();
        div.animate({ scrollLeft: div.position().left-100 }, 500);
    });
    $('.vector.next').on('mouseover', function(){
		var div = $('#timebox'), 
			pos = div.scrollLeft();
        div.animate({ scrollLeft: div.position().left+100 }, 500);
    });
	*/
	
	var timelineScale = new TimelineScale(1450, 1750), 
		barController = new BarController(timelineScale);
	
	var ajaxObj = new AjaxHandler();
	ajaxObj.url = '/rest/en/search/people';
	ajaxObj.data = {
					from: 15000000, 
					to: 17000000, 
					limit: 8
				}
	
	ajaxObj.callbackSuccess = function(data){
		barController.setBars(data.result);
	}
	ajaxObj.call();
});