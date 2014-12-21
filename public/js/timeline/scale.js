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
	this.coverBackground();
}

TimelineScale.prototype.coverBackground = function(){
	var dividePoint = this.range / 4, 
		timelineLength = $('#timebox').width();
	this.midPoint1 = this.startYear + dividePoint;
	this.midPoint2 = this.startYear + (dividePoint*2);
	this.midPoint3 = this.startYear + (dividePoint*3);
	this.pxPerYear = timelineLength / this.range;
	
	this.startDate = this.startYear * 10000;
	this.endDate = this.endYear * 10000;
	var midYearPoint = $('<span>').addClass('y-index mid'), 
		index = $('.y-index');
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

TimelineScale.prototype.expandForward = function(toYear){
	this.endYear = toYear;
	this.range = this.endYear - this.startYear;
	this.coverBackground();
}

TimelineScale.prototype.expandBackward = function(fromYear){
	this.startYear = fromYear;
	this.range = this.endYear - this.startYear;
	this.coverBackground();
}

$(function() {
	$('#timebox').mousemove(function(e){
		
	});	
});