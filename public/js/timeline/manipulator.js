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
	
	var timelineScale = new TimelineScale(from - 50, to - 50), 
		barController = new BarController(timelineScale);
	
	var ajaxObj = new AjaxHandler();
	ajaxObj.url = '/rest/en/search/people';
	ajaxObj.data = {
					from: from * 10000, 
					to: to * 10000, 
					limit: 30
				}
	
	ajaxObj.callbackSuccess = function(data){
		barController.setBars(data.result);
	}
	ajaxObj.call();
});