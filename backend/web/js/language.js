function language_change(selected){
	$.post('index.php?r=site/language',{'lang':selected.value}, function(){
	//$.post('index.php',{'lang':lang}, function(){
		location.reload();
	});
};