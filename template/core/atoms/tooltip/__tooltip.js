$(document).ready(function(){

	$('body').on('click', '.tooltip.action-click', function(){
		$(this).toggleClass('is-open');
	}); 

});