$(document).ready(function () {
	
	const observer = lozad('.lazy');
	observer.observe();
	

	// $('.').on('click', function(){
	// });

	// $('.js-stiky').hcSticky({
    //     top: 0
    // });

	$('.js-mask__tell').inputmask('+7(999) 999-99-99');
	// $('.js-mask__email').inputmask("email");

	if(window.innerWidth <= 1359) {

		var a = $('.catalog-item.--small').remove();
		$('.catalog-items').append(a);

	}

	$('.--js__get-address').on('click', function() {
		let city = $(this).data('city');
		$('.--js__address').val(city)
	});
	
	// Сбор заказа из мини-корзины в скрытый инпут

		function order() {
			let products = '';
			$('.mini-basket-item').each(function () {
				let name = 'Наименование: ' + $(this).find('.mini-basket-item__name').text();
				let art = $(this).find('.mini-basket-item__article').text();
				let cost = 'Цена: ' + $(this).find('.product-item__price').text();
				let number = 'Кол-во: ' + $(this).find('.mini-basket-item__counter-input').val();
				products += name + '; ' + art + '; ' + cost + '; ' + number + ';';
				$('.basket-order__products').val(products);
			})
		};

		$('body').on('click', '.js-cart-item-remove, .js-plus, .js-minus', function() {
			setTimeout(() => {
				order();
			}, 300)
		});

		order();

	//

	// Оформить в 1 клик

		$('body').on('click', '#order-on-click', function() {
			order()
		});

	//

	// Купить в 1 клик

		$('body').on('click', '#buy-on-click', function() {
			let img = $('.promo .product-item__tumb source').attr('srcset');
			let name = $('.promo .product-item__name').text();
			let art = $('.promo .product-item__articul').text();
			let price = $('.promo .product-item__price').text();
			let old_price = $('.promo .product-item__old-price').text();
			let discount = $('.promo .product-item__sale-label').text();
			$(this).parents().find('.mini-basket-item__img-thumb source').attr('srcset', img);
			$(this).parents().find('.mini-basket-item__name').text(name);
			$(this).parents().find('.mini-basket-item__article').text(art);
			$(this).parents().find('.product-item__price').text(price);
			$(this).parents().find('.product-item__old-price').text(old_price);
			$(this).parents().find('.product-item__sale-label').text(discount);
			
			let products = '';
			$('#buy-on-click .popup__product-info').each(function () {
				let popup_name = 'Наименование: ' + $(this).find('.mini-basket-item__name').text();
				let popup_art = $(this).find('.mini-basket-item__article').text();
				let popup_cost = 'Цена: ' + $(this).find('.product-item__price').text();
				products += popup_name + '; ' + popup_art + '; ' + popup_cost + ';';
				$('.basket-order__products').val(products)
			})
		});

	//

	// Блок с формой в трейд-ин

		function trade_in() {
			$('.trade-in__tabs-btn').removeClass('tabs__btn');
			if ($('.tabs__block').children('.trade-in__field').length == 0) {
				$('.trade-in__tabs-btn').on('click', function() {
					$('.--js__warning-modal').show();
					$('.trade-in__field').css({'border' : '1px solid red'})
				})
			} else {
				$('.trade-in__field').css({'border' : '1px solid green'})
			}
			$('.thanks .js-popup__close').on('click', function() {
				$('.trade-in__field').css({'border' : '1px solid transparent'})
			})
		};

		trade_in();

		$('body').on('change', '.trade-in__field', function() {
			let field_length = $(this).val().length;
			if (field_length > 0) {
				$(this).addClass('is-inputed');
				$(this).css({'border' : '1px solid green'})
			} else {
				$(this).removeClass('is-inputed');
				$(this).css({'border' : '1px solid red'})
			}
			let tab_fields = $(this).parents('.tabs__block').find('.trade-in__field').length;
			let tab_fields_active = $(this).parents('.tabs__block').find('.trade-in__field.is-inputed').length;
			if (tab_fields == tab_fields_active) {
				$(this).parents().find('.trade-in__tabs-btn').addClass('tabs__btn is-open');
				$('.--js__warning-modal').hide()
			} else {
				$(this).parents().find('.trade-in__tabs-btn').removeClass('tabs__btn is-open');
				$('.--js__warning-modal').show()
			}
		})

	//

});

$(window).load(function () {
	
	var mainCarousel = new Swiper('.js-swiper__main .swiper-container', {
	// Мобилка
		slidesPerView: 1,
		slidesPerColumn: 1,
		spaceBetween: 8,
		loop: true,
		autoHeight:true,
		slidesPerGroup: 1,
		pagination: {
			el: '.js-swiper__main .swiper-pagination',
			clickable: true,
		},
		navigation: {
			nextEl: '.js-swiper__main .swiper-button-next',
			prevEl: '.js-swiper__main .swiper-button-prev',
		},
		breakpoints: {
		// Десктоп
			990: {
			slidesPerView: 1,
			slidesPerColumn: 1,
			spaceBetween: 24,
			},
		// Адаптив
			640: {
			slidesPerView: 1,
			slidesPerColumn: 1,
			slidesPerGroup: 1,
			spaceBetween: 16,
			},
		}
	})

});