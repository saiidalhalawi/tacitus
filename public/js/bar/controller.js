function BarController(timelineScale){
	this.bars = [];
	this.startYear = timelineScale.startYear;
	this.endYear = timelineScale.endYear;
	this.scale = timelineScale;
	this.peopleCountLimit = 50;
	this.verticalMargin = 45;
}

BarController.prototype.setBars = function(people){

	var controller = this, 
		scaleObj = controller.scale, 
		currPerson = null, 
		tmpBar = null, 
		tooltip = null, 
		tmpSurvivalTime, 
		tmpYmd, 
		tmpMmdd, 
		tmpInnerArrow;

	$.each(people, function(idx){
		currPerson = this;
		currPerson.xStart = Math.floor((currPerson.birth_year - scaleObj.startDate) / 10000) * scaleObj.pxPerYear;
		currPerson.xEnd = Math.floor((currPerson.death_year - scaleObj.startDate) / 10000) * scaleObj.pxPerYear;
		currPerson.width = currPerson.xEnd - currPerson.xStart;

		tmpYmd = currPerson.birth_year.toString();
		tmpMmdd = tmpYmd.substr(-4);
		tmpSurvivalTime = tmpYmd.replace(tmpMmdd, '');
		if(tmpMmdd != '0000'){
			tmpSurvivalTime += '/'+tmpYmd.substr(-4, 2)+'/'+tmpYmd.substr(-2);
		}
		if(!currPerson.is_birth_year_fixed){
			tmpSurvivalTime += '?';
		}
		tmpSurvivalTime += '&nbsp;〜&nbsp;';

		tmpYmd = currPerson.death_year.toString();
		tmpMmdd = tmpYmd.substr(-4);
		tmpSurvivalTime += tmpYmd.replace(tmpMmdd, '');
		if(tmpMmdd != '0000'){
			tmpSurvivalTime += '/'+tmpYmd.substr(-4, 2)+'/'+tmpYmd.substr(-2);
		}
		if(!currPerson.is_death_year_fixed){
			tmpSurvivalTime += '?';
		}

		tooltip = '<i class="name-on-bar">'+currPerson.name+'</i>';
		tmpBar = $('<div class="bar person state-'+currPerson.state_id+' " data-name="'
						+currPerson.name+'" data-title="'
						+currPerson.title+'" data-live="'
						+tmpSurvivalTime+'" data-state="'
						+currPerson.state_id+'" data-explain="'
						+escapeQ(currPerson.explanation)+'">&nbsp;</div>')
					.css({
							'left' : currPerson.xStart, 
							'width' : currPerson.width, 
							'margin' : '1.5rem 0', 
							'top' : idx * controller.verticalMargin
						})
					.attr('person_id', currPerson.id)
					.html($(tooltip));
		$('#timebox').append(tmpBar);

		if(idx > 0 && idx % 20 == 0){
			// 年号表示線を追加
			tmpInnerArrow = $('.inner-arrow').clone(false);
			tmpInnerArrow.css('top', $('#timebox')[0].scrollHeight+'px')
				.appendTo($('#timebox'));
		}
	});
}

BarController.prototype.showDetail = function(id){


}