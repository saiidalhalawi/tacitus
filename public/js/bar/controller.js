function BarController(timelineScale){
	this.bars = [];
	this.startYear = timelineScale.startYear;
	this.endYear = timelineScale.endYear;
	this.scale = timelineScale;
	this.verticalMargin = 50;
}

BarController.prototype.setBars = function(people){

	var controller = this, 
		scaleObj = controller.scale, 
		currPerson = null, 
		tmpBar = null, 
		tooltip = null;

	$.each(people, function(idx){
		currPerson = this;
		currPerson.xStart = Math.floor((currPerson.birth_year - scaleObj.startDate) / 10000) * scaleObj.pxPerYear;
		currPerson.xEnd = Math.floor((currPerson.death_year - scaleObj.startDate) / 10000) * scaleObj.pxPerYear;
		currPerson.width = currPerson.xEnd - currPerson.xStart;

		tooltip = '<i class="name-on-bar">'+currPerson.name_en
					+'<span>'+currPerson.name_en+'<br>'+currPerson.title_en
					+'<br>'+String(currPerson.birth_year).substring(0, 4)+'&nbsp;-&nbsp;'
					+String(currPerson.death_year).substring(0, 4)+'</span>'
					+'</i>';
		tmpBar = $('<div class="bar person state-'+currPerson.state_id+' ">&nbsp;</div>')
					.css({
							'left' : currPerson.xStart, 
							'width' : currPerson.width, 
							'margin' : '1.5rem 0', 
							'top' : idx * controller.verticalMargin
						})
					.attr('person_id', currPerson.id)
					.html($(tooltip));
		$('#timebox').append(tmpBar);
	});
}