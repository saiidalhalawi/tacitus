function TimelinePanel(){
	this.currentId = null;
	this.init();
}

TimelinePanel.prototype.init = function(){

}

TimelinePanel.prototype.createPersonDetail = function(bar){
	var targetList = $('#person-detail-panel').find('div').find('ul').find('li');
	targetList.first().html($(bar).data('name'))
		.next().html($(bar).data('title'))
		.next().html($(bar).data('live'))
		.next().html($(bar).attr('state'))
		.next().html($(bar).data('explain'));
	// オープン
	$('#person-detail-panel').addClass('active');
}

$(function() {
	var timelinePanelObj = new TimelinePanel();

	// 人物詳細パネルひらく
	$(document).on('click', '.bar.person', function(){
		timelinePanelObj.createPersonDetail(this);
	});
	// 人物詳細パネルとじる
	$(document).on('click', '.close-button', function(){
		$('#person-detail-panel').removeClass('active');
	});	
});