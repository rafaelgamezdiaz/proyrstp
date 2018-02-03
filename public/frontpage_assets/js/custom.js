$(document).ready(function(){
	$('.scrollto').bind('click', function(e){
		e.preventDefault();
		for (var i = 4; i >= 0; i--) {
			$('#menu-opt'+i).removeClass('active');
		};
		var btn = $(this).parents('li');
		btn.addClass('active');
		var target = $(this).data('id');
		scrollTo('#'+target);
	});
});