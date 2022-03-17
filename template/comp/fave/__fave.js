$(document).ready(function () {
    
	let URL = window.location.origin;
	function remove_dublicates(originalArray, prop) {
		var newArray = [];
		var lookupObject  = {};
		for(var i in originalArray) {
			lookupObject[originalArray[i][prop]] = originalArray[i];
		}
		for(i in lookupObject) {
			newArray.push(lookupObject[i]);
		}
		return newArray;
	}

	let fave = [];
	if (Cookies.get('fave')) {
		fave = JSON.parse(Cookies.get('fave'));
	}

	function fave_pushItem(item){
		fave.push(item)
		fave = fave.reverse();
		fave = fave.filter((item, index) => fave.indexOf(item) === index);
		Cookies.set('fave', fave);
		console.log(JSON.parse(Cookies.get('fave')))
	};
    function fave_updateHtml(){
        $.ajax({
			type: "method",
			url:  window.location.origin + '/api/get-fave.php?view=fave',
			success: function (response) {
                $('.js-fave-items').html(response);
                const observer = lozad('.lazy');
                observer.observe();
			}
		});
        $.ajax({
			type: "method",
			url:  window.location.origin + '/api/get-fave.php?view=total',
			success: function (response) {
				if (response.count > 0) {
					$('.header-middle .menu-item__count.--fave').removeClass('--hidden');

				} else {
					$('.header-middle .menu-item__count.--fave').addClass('--hidden');
				}
                $('.js-fave-total-count').html(response.count);			 
			}
		});
    };

	$('body').on('click', '.js-fave-add', function(){
        let product_id = $(this).parents('.js-fave-parent').find('.js-fave-id').val();
        if ($(this).hasClass('is-active')) {
            fave = fave.filter(function(item){
                return item !== product_id;
            });
            Cookies.set('fave', fave);
            $(this).removeClass('is-active');
        } else {
            $(this).addClass('is-active');
            fave_pushItem(product_id);
        }
        fave_updateHtml();
	});
});