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
	
	var timelineScale = new TimelineScale(1300, 1500), 
		barController = new BarController(timelineScale);
	
	var ajaxObj = new AjaxHandler();
	ajaxObj.url = '/rest/en/search/people';
	ajaxObj.data = {
					from: 13500000, 
					to: 14000000, 
					limit: 30
				}
	
	ajaxObj.callbackSuccess = function(data){
		barController.setBars(data.result);
	}
	ajaxObj.call();
});