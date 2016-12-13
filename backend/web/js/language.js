function language_change(selected){
	csrfToken = $('meta[name="csrf-token"]').attr("content");
	$.post('site/language',{'lang':selected.value, _csrf: csrfToken}, function(){
	//$.post('index.php',{'lang':lang}, function(){
		location.reload();
	});
};