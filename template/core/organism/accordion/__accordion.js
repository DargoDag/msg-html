$(document).ready(function(){
	var accordion__speed = 240;
	function accordion__open(i){
		// $(i).parent().parent().find('.accordion__desc').slideUp(accordion__speed);
		// $(i).parent().parent().find('.accordion').removeClass('is-open');
		$(i).parent().find('.accordion__desc').slideToggle(accordion__speed);
		$(i).parent().toggleClass('is-open');
		$(i).parent().find('.accordion__title-icon').toggleClass('is-open');
	};
	$('body').on('click', '.accordion__title.--js', function(){
		accordion__open(this);
	});
});