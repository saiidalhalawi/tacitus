function TimelineScale(start, end){
	this.startYear = start;
	this.endYear = end;

	this.midPoint1 = 0;
	this.midPoint2 = 0;
	this.midPoint3 = 0;
	this.range = 0;
	this.pxPerYear = 0;

	this.init();
}

TimelineScale.prototype.init = function(){

	this.range = this.endYear - this.startYear;
	var dividePoint = this.range / 4, 
		timelineLength = $('#timebox').width()*0.90;
	this.midPoint1 = this.startYear + dividePoint;
	this.midPoint2 = this.startYear + (dividePoint*2);
	this.midPoint3 = this.startYear + (dividePoint*3);
	this.pxPerYear = timelineLength / this.range;
	
	this.startDate = this.startYear * 10000;
	this.endDate = this.endYear * 10000;
	var midYearPoint = $('<span>').addClass('y-index mid');
	var index = $('.y-index');
	$(index[0]).html(this.startYear);
	$('.inner-arrow').append(
						midYearPoint.clone()
								.css('left', dividePoint*this.pxPerYear)
								.html(this.midPoint1))
					.append(
						midYearPoint.clone()
								.css('left', (dividePoint*2)*this.pxPerYear)
								.html(this.midPoint2))
					.append(
						midYearPoint.clone()
								.css('left', (dividePoint*3)*this.pxPerYear)
								.html(this.midPoint3));
	$(index[1]).html(this.endYear).css('left', this.range*this.pxPerYear);
	$('#timebox').width(this.range*this.pxPerYear);
}

$(function() {
	$('#timebox').mousemove(function(e){
		
	});	
});