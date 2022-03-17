$(document).ready(function(){
	let popup__speed = 240;
	
	// functions
	window.towls.popupOpen = function(id){
		let utm =  window.location.href; 
		$('.js-utm').val(utm);
		$('.popup').each(function(){
			var this__id = $(this).attr('id');
			if (this__id == id) {
				$('.popup').fadeOut(popup__speed);
				$('#'+this__id).fadeIn(popup__speed);
				$('body').addClass('js-no-scroll');
			};
		});
	};
	window.towls.popupReady = function(){
		let hash =  window.location.hash.replace("#","");   
		towls.popupOpen(hash);
	};
	window.towls.popupClose = function(id){
		if (id == 'all') {
			$('.popup').fadeOut(popup__speed);
		} else {
			$('#' + id).fadeOut(popup__speed);
		}
		history.pushState(null, null, window.location.href.split('#')[0]);
		$('body').removeClass('js-no-scroll');
	};
	window.towls.popupValues = function(id, utm, title, value,){
		$('#'+id+' .js-title--text').text(title);
		$('#'+id+' .js-value--text').text(value);
		$('#'+id+' .js-title--val').text(title);
		$('#'+id+' .js-value--val').text(value);
		$('#'+id+' .js-utm').text(utm);
	};
	towls.popupReady();

	// triggers
	$('body').on('click', '*[data-popup]', function(){
		let link = $(this).data("popup").replace("#","");
		towls.popupOpen(link);
	});
	$('body').on('click', '.js-popup__close', function(){
		towls.popupClose('all');
	});
	$('body').on('click', '*[data-popup-title]', function(){
		let id = $(this).data("popup").replace("#","");
		let utm =  window.location.href;  
		let title = $(this).data('popup-title');
		let value = $(this).data('popup-value');
		towls.popupValues(id, utm, title, value);
	});
});