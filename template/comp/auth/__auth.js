$(document).ready(function () {
    $('.js-show-password').on('click', function(){
		$(this).parents('.--password').toggleClass('is-show-pass');
		let item = $(this).parents('.--password').find('input');
		item.attr('type', item.attr('type') === 'password' ? 'text' : 'password');
	});
});