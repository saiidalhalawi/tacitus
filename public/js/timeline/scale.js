function TimelineScale(start, end){
	this.startYear = start;
	this.endYear = end;

	this.midPoint = 0;
	this.range = 0;
	this.pxPerYear = 0;

	this.init();
}

TimelineScale.prototype.init = function(){

	this.range = this.endYear - this.startYear;
	this.midPoint = this.startYear + (this.range/2);
	this.pxPerYear = $(window).width() / this.range;

	this.startDate = this.startYear * 10000;
	this.endDate = this.endYear * 10000;

	var index = $('.y-index');
	$(index[0]).html(this.startYear);
	$('.inner-arrow').append($('<span>').addClass('y-index mid').html(this.midPoint));
console.log($('.inner-arrow').height());
console.log($('.inner-arrow').offset());
	$(index[1]).html(this.endYear);
}

