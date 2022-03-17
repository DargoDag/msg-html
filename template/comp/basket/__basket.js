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

	let cart = [];
	if (Cookies.get('cart')) {
		cart = JSON.parse(Cookies.get('cart'));
	}
	// console.log('cart', cart);

	function cart_pushItem(item){
		cart.push(item)
		cart = cart.reverse();
		cart = remove_dublicates(cart, 'id');
		Cookies.set('cart', cart);
		// console.log(JSON.parse(Cookies.get('cart')))
	};

	function cart_added(item){
		$.ajax({
			type: "method",
			url: URL + '/api/get-item.php?id=' + item.id,
			success: function (response) {
				towls.popupOpen('add-to-basket');
                $('#add-to-basket .js-cart-popup-img').attr('src', response.img[0]);
                $('#add-to-basket .js-cart-id').val(response.id);
                let count;
                cart.forEach(el => {
                    if (el.id == item.id) {
                        count = el.count 
                    }
                });
                $('#add-to-basket .js-cart-item-count-val').val(count);
                $('#add-to-basket .js-cart-popup-art').html(response.article);
                $('#add-to-basket .js-cart-popup-name').html(response.name);
                let color = '';
                response.props.forEach(prop => {
                    if (prop.name == 'Цвет') {
                        color = prop.value;
                    }
                });
                $('#add-to-basket .js-cart-popup-color').html(color);
                $('#add-to-basket .js-cart-popup-price').html(new Intl.NumberFormat('ru-RU').format(response.price));
			}
		});
		$.ajax({
			type: "method",
			url:  window.location.origin + '/api/get-cart.php?view=total',
			success: function (response) {
				if (response.count > 0) {
					$('.header-middle .menu-item__count.--cart').removeClass('--hidden');
					$('.mini-basket.tooltip__block').removeClass('--hidden');
					$('.menu-item__shade').removeClass('--hidden');
				} else {
					$('.header-middle .menu-item__count.--cart').addClass('--hidden');
					$('.mini-basket.tooltip__block').addClass('--hidden');
					$('.menu-item__shade').addClass('--hidden');
				}
			}
		});
	};

    function cart_updateHtml(){
        $.ajax({
			type: "method",
			url:  window.location.origin + '/api/get-cart.php?view=mini',
			success: function (response) {
                $('.js-cart-mini-items').html(response);
                const observer = lozad('.lazy');
                observer.observe();
			}
		});
        $.ajax({
			type: "method",
			url:  window.location.origin + '/api/get-cart.php?view=basket',
			success: function (response) {
                $('.js-cart-basket-items').html(response);
                const observer = lozad('.lazy');
                observer.observe();
			}
		});
        $.ajax({
			type: "method",
			url:  window.location.origin + '/api/get-cart.php?view=total',
			success: function (response) {
				if (response.count > 0) {
					$('.header-middle .menu-item__count.--cart').removeClass('--hidden');
					$('.mini-basket.tooltip__block').removeClass('--hidden');
					$('.menu-item__shade').removeClass('--hidden');
				} else {
					$('.header-middle .menu-item__count.--cart').addClass('--hidden');
					$('.mini-basket.tooltip__block').addClass('--hidden');
					$('.menu-item__shade').addClass('--hidden');
				}
                $('.js-cart-total-count').html(response.count);
                $('.js-cart-total-price').html(new Intl.NumberFormat('ru-RU').format(response.total_price));
				if (window.location.pathname == '/cart/' && response.count == 0) {
					document.location.reload();
				}
			}
		});
    };

	$('body').on('click', '.js-cart-add', function(){
        $(this).removeClass('--fill-1');
        $(this).addClass('--green');
		let detail_btn = $(this).data('detail-btn');
		if (detail_btn == true){
			$(this).html('В корзине');
		}
		let product_id = $(this).parents('.js-cart-parent').find('.js-cart-id').val();
		let item = {
			id: product_id,
			count: 1,
		};
		cart_pushItem(item);
		cart_added(item);
        cart_updateHtml();
	});

	$('body').on('click', '.js-cart-item-count-change', function(){
        // console.log('change');
		let product_id = $(this).parents('.js-cart-parent').find('.js-cart-id').val();
        let count;
        setTimeout(() => {
            count = parseInt($(this).parents('.js-cart-parent').find('.js-cart-item-count input').val());
            let item = {
                id: product_id,
                count: count,
            };
            cart = cart.filter(function(cart_item){
                return cart_item.id !== item.id;
            });
            cart.push(item);
            Cookies.set('cart', cart);
            cart_updateHtml();
        }, 100);
	});

	$('body').on('click', '.js-cart-item-remove', function(){
		let product_id = $(this).parents('.js-cart-parent').find('.js-cart-id').val();
        cart = cart.filter(function(cart_item){
            return cart_item.id !== product_id;
        });
        Cookies.set('cart', cart);
        cart_updateHtml();
		$('.js-cart-removed.--id-'+product_id).removeClass('--green');
		$('.js-cart-removed.--id-'+product_id).addClass('--fill-1');
		let detail_btn = $('.js-cart-removed.--id-'+product_id).data('detail-btn');
		if (detail_btn == true){
			$('.js-cart-removed.--id-'+product_id).html('В корзину');
		}
	});

	$('body').on('click', '.basket-sticky .product-item__add-btn', function(){
		$('html,body').animate({scrollTop: $('.step-item.--final-order').offset().top - 104 });
	});


});