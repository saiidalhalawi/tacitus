/**
 * Ajaxのコントロールクラス
 * 
 */
function AjaxHandler(){
	this.url = null;
	this.type = 'POST';
	this.data = {};
	this.dataType = 'json';
	this.callbackSuccess = null;
	this.callbackError = function(data){
		alert('情報の取得に失敗しました。');
		return false;
	};
}

/**
 * Ajaxのコール
 */
AjaxHandler.prototype.call = function(){

	$.ajax({
		type: this.type,
		url: this.url, 
		data: this.data, 
		dataType: this.dataType, 
		success: this.callbackSuccess, 
		error: this.callbackError
	});
}