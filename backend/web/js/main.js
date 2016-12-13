$(function(){
	$(document).on('click','.language', function(){
		csrfToken = $('meta[name="csrf-token"]').attr("content");
		var lang = $(this).attr('id');
		$.post('site/language',{'lang':lang, _csrf: csrfToken}, function(){
		//$.post('index.php',{'lang':lang}, function(){
			location.reload();
		});
	});
});