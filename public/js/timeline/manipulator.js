/**
 * 画面操作オブジェクト
 *
 * @param {Integer} from 開始年
 * @param {Integer} to   終了年
 */
function Manipulator(from, to){
	this.from = from;
	this.to = to;
	this.durationAmount = to - from;
	this.bufferYear = 50;
	this.timelineScale = new TimelineScale(from - this.bufferYear, to + this.bufferYear);
	this.barController = new BarController(this.timelineScale);

	this.peopleAjaxObj = new AjaxHandler();
}

/**
 * Intializer
 *
 */
Manipulator.prototype.init = function(){	
	var	barController = this.barController;
	this.peopleAjaxObj.url = '/rest/'+lang+'/search/people';
	this.peopleAjaxObj.data = {
					from: this.from * 10000, 
					to: this.to * 10000, 
					limit: barController.peopleCountLimit
				}
	
	this.peopleAjaxObj.callbackSuccess = function(data){
		barController.setBars(data.result);
	}
	this.peopleAjaxObj.call();
}

/**
 * タイムラインの前後への移動
 *
 */
Manipulator.prototype.move = function(){	
	var	barController = this.barController;
	this.peopleAjaxObj.data.from = this.from * 10000;
	this.peopleAjaxObj.data.to = this.to * 10000;	
	this.peopleAjaxObj.callbackSuccess = function(data){
		barController.setBars(data.result);
	}
	this.peopleAjaxObj.call();
}

$(function() {

	var manipulatorObj = new Manipulator(from, to);
	manipulatorObj.init();

	$('#timebox').dragScroll({});

	// 前ページの移動
	$('.vector.prev').on('click', function(){
		manipulatorObj.from -= manipulatorObj.durationAmount;
		manipulatorObj.to -= manipulatorObj.durationAmount;
		location.href = '/timeline?k='+manipulatorObj.from
							+' '+manipulatorObj.to
							+' '+words;
		/*
		manipulatorObj.timelineScale.expandBackward(manipulatorObj.from - manipulatorObj.bufferYear);
		manipulatorObj.move();
		*/
    });
    // 次ページの移動
    $('.vector.next').on('click', function(){
		manipulatorObj.from += manipulatorObj.durationAmount;
		manipulatorObj.to += manipulatorObj.durationAmount;
		location.href = '/timeline?k='+manipulatorObj.from
							+' '+manipulatorObj.to
							+' '+words;
		/*
		manipulatorObj.timelineScale.expandForward(manipulatorObj.to + manipulatorObj.bufferYear);
		manipulatorObj.move();
		*/
    });
});