$(function(){
	$(document).on('click','.language', function(){alert('main');
		csrfToken = $('meta[name="csrf-token"]').attr("content");
		var lang = $(this).attr('id');
		$.post('site/language',{'lang':lang, _csrf: csrfToken}, function(){
			location.reload();
		});
	});
});