$(document).on('ready', function(){
	$('body').on('click', '.counter-calc__btn.js-plus', function(){
		var this__min 	= $(this).parents('.counter-calc').data('min');
		var this__max 	= $(this).parents('.counter-calc').data('max');
	    var this__count = $(this).parents('.counter-calc').find('.counter-calc__input').val();
	    if (this__count < this__max) {
	    	this__count = parseInt(this__count) + 1;
	    	$(this).parents('.counter-calc').find('.counter-calc__input').val(this__count);
	    }
	    if (this__count >= this__max) {
	    	$(this).parents('.counter-calc').find('.js-plus').addClass('is-disable');
	    } else {
	    	$(this).parents('.counter-calc').find('.js-plus').removeClass('is-disable');
	    }
	    if (this__count <= this__min) {
	    	$(this).parents('.counter-calc').find('.js-minus').addClass('is-disable');
	    } else {
	    	$(this).parents('.counter-calc').find('.js-minus').removeClass('is-disable');
	    }
	});

	$('body').on('click', '.counter-calc__btn.js-minus', function(){
	    var this__min 	= $(this).parents('.counter-calc').data('min');
		var this__max 	= $(this).parents('.counter-calc').data('max');
	    var this__count = $(this).parents('.counter-calc').find('.counter-calc__input').val();
	    if (this__count >= this__min) {
	        this__count = parseInt(this__count) - 1;
	        $(this).parents('.counter-calc').find('.counter-calc__input').val(this__count);              
	    }
	    if (this__count >= this__max) {
	    	$(this).parents('.counter-calc').find('.js-plus').addClass('is-disable');
	    } else {
	    	$(this).parents('.counter-calc').find('.js-plus').removeClass('is-disable');
	    }
	    if (this__count <= this__min) {
	    	$(this).parents('.counter-calc').find('.js-minus').addClass('is-disable');
	    } else {
	    	$(this).parents('.counter-calc').find('.js-minus').removeClass('is-disable');
	    }
	});

});