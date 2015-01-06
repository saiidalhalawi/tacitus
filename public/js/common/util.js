function dateFormat(date){
	if(typeof date != 'Date') return false;

	return date.getFullYear()
			+ '/' + ('0' + (date.getMonth()+1)).slice(-2)
			+ '/' + ('0' + date.getDate()).slice(-2)
            + ' ' + ('0' + date.getHours()).slice(-2)
            + ':' + ('0' + date.getMinutes()).slice(-2);
}

function nl2br(txt){
	return txt.replace(/(\r\n|\n\r|\r|\n)/g, "<br>");
};

function escapeQ(text){
	return text.replace(/\"/g,'&quot;');
}