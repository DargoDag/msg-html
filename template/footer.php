			</div>
			<div class="footer">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/footer/__footer-top.php'); ?>
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/footer/__footer-menu.php'); ?>
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/footer/__footer-contacts.php'); ?>
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/footer/__footer-bottom.php'); ?>
				<script src="//code-eu1.jivosite.com/widget/zd6ir3svUW" async></script>
			</div>
			<div class="popup request-call" id="request-call">
				<div class="popup__wrap">
					<div class="popup__content col --6">
						<div class="popup__close js-popup__close"></div>
						<h4 class="popup__title js-title--text"><b>Заказать звонок</b></h4>
						<form action="#" method="post" name="form-3" class="popup__form mt-32">
							<div class="popup__inputs flex">
								<div class="popup__input-wrap big-input mr-12">
									<input type="text" name="name" class="popup__input big-input__input">
									<div class="big-input__title">Имя</div>
									<div class="big-input__error-wrap">
										<div class="big-input__error-title p --l"><b>Заголовок ошибки</b></div>
										<div class="big-input__error-desc  p --m">Описание ошибки</div>
									</div>
								</div>
								<div class="popup__input-wrap big-input">
									<input type="tel" name="tel" class="popup__input big-input__input js-mask__tell">
									<div class="big-input__title">Телефон</div>
									<div class="big-input__error-wrap">
										<div class="big-input__error-title p --l"><b>Заголовок ошибки</b></div>
										<div class="big-input__error-desc  p --m">Описание ошибки</div>
									</div>
								</div>
							</div>
							<button type="send" class="popup__send-btn btn feedback btn-success --fill-1 p --xl mt-16">Отправить</button>
							<div class="popup__checkbox mt-14">
								<label class="checkbox">
									<input type="checkbox" name="private" checked="checked" required>
									<div class="flex --align-center">
										<div class="checkbox__trigger"></div>
										<div class="checkbox__label p --s ml-16">Даю согласие на <a href="/policy/" target="_blank" class="checkbox__link link"><b>обработку персональных данных</b></a></div>
									</div>
								</label>
							</div>
						</form>
					</div>
					<div class="popup__shade js-popup__close"></div>
				</div>
			</div>
			<div class="popup get-address" id="get-address">
				<div class="popup__wrap">
					<div class="popup__content col --6">
						<div class="popup__close js-popup__close"></div>
						<h4 class="popup__title js-title--text"><b>Получить адрес по смс</b></h4>
						<form action="#" method="post" name="form-4" class="popup__form order-form mt-24">
							<div class="order-form__input-wrap flex --align-center">
								<div class="order-form__icon --svg__tell"></div>
								<div class="big-input">
									<input type="tel" name="tel" class="order-form__input big-input__input --js js-mask__tell">
									<div class="big-input__title">Ваш телефон:</div>
									<div class="big-input__error-wrap">
										<div class="big-input__error-title p --l"><b>Заголовок ошибки</b></div>
										<div class="big-input__error-desc  p --m">Описание ошибки</div>
									</div>
								</div>
								<button type="send" disabled class="order-form__send-btn btn feedback btn-success p --xl">Получить адрес</button>
								<input type="hidden" name="city" class="--js__address">
							</div>
							<div class="popup__checkbox mt-20">
								<label class="checkbox">
									<input type="checkbox" name="private" checked="checked" required>
									<div class="flex --align-center">
										<div class="checkbox__trigger"></div>
										<div class="checkbox__label p --s ml-16">Даю согласие на <a href="/policy/" target="_blank" class="checkbox__link link"><b>обработку персональных данных</b></a></div>
									</div>
								</label>
							</div>
						</form>
					</div>
					<div class="popup__shade js-popup__close"></div>
				</div>
			</div>
			<div class="popup add-to-basket js-cart-parent" id="add-to-basket">
				<input type="hidden" class="js-cart-id" value="<?=$item['id']?>">
				<div class="popup__wrap">
					<div class="popup__content col --6">
						<div class="popup__close js-popup__close"></div>
						<div class="popup__content-wrap">
							<h4 class="popup__title js-title--text"><b>Товар добавлен в корзину</b></h4>
							<div class="popup__product-info flex --align-center mt-24 pb-24">
								<div class="mini-basket-item__img mr-24">
									<picture class="mini-basket-item__img-thumb lazy">
										<img src="" alt="" class="js-cart-popup-img">
									</picture>
								</div>
								<div class="mini-basket-item__info-wrap">
									<div class="mini-basket-item__name h5 js-cart-popup-name"></div>
									<div class="mini-basket-item__info-sub-wrap flex --align-center">
										<div class="mini-basket-item__article p --s mr-14">
											Артикул: 
											<span class="mini-basket-item__article-value js-cart-popup-art">c92</span>
										</div>
										<div class="mini-basket-item__color p --s js-cart-popup-color">Белый</div>
									</div>
									<div class="product-item__price-sub-wrap flex --align-center">
										<div class="product-item__price h4 mr-16"><span class="js-cart-popup-price"></span> Р</div>
										<div class="product-item__old-price-wrap flex --align-center">
											<div class="product-item__old-price p --xl mr-8">720 000 Р</div>
											<div class="product-item__sale-label p --s">-16%</div>
										</div>
									</div>
								</div>
							</div>
							<div class="popup__options-wrap flex --align-center --just-space mt-24">
								<div class="product-item__credit-wrap">
									<div class="product-item__credit flex --align-center">
										<div class="product-item__credit-icon --svg__credit mr-8"></div>
										<div class="product-item__credit-label --p">Рассрочка:</div>
									</div>
									<div class="product-item__credit-payment mt-8">3 500 Р/мес.</div>
									<a href="#" class="product-item__order-link link p --m mt-4">Оформить</a>
								</div>
								<div class="product-item__trade-wrap">
									<div class="product-item__trade flex --align-center">
										<div class="product-item__trade-icon --svg__trade mr-8"></div>
										<div class="product-item__trade-label --p">Трейд-ин</div>
									</div>
									<div class="product-item__credit-payment mt-8">400 000 Р</div>
									<a href="#" class="product-item__order-link link p --m mt-4">Оставить заявку</a>
								</div>
								<div class="product-item__delivery-wrap">
									<div class="product-item__delivery-info p --m">Доставка на дом <br>бесплатно: <span>завтра</span></div>
									<div class="product-item__delivery-info p --m mt-12">Забрать самостоятельно <br>бесплатно: <span>сегодня</span></div> 
								</div>
							</div>
							<div class="popup__order-wrap flex --align-center --just-space mt-32">
								<div class="mini-basket-item__counter mr-8">
									<div class="counter-calc" data-min="1" data-max="999">
										<div class="js-cart-item-count mini-basket-item__counter-calc-wrap flex --align-center">
											<input type="text" class="mini-basket-item__counter-input counter-calc__input h5 js-cart-item-count-val" value="1">
											<div class="mini-basket-item__counter-btns">
												<div class="mini-basket-item__counter-btn --top counter-calc__btn btn js-cart-item-count-change js-plus">
													<div class="mini-basket-item__counter-btn-icon --svg__counter--plus"></div>
												</div>
												<div class="mini-basket-item__counter-btn --btm counter-calc__btn disable-btn btn js-cart-item-count-change js-minus is-disable">
													<div class="mini-basket-item__counter-btn-icon"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<a href="/cart/" class="product-item__add-btn btn --fill-1 p --xl mr-8">Оформить заказ</a>
								<div class="product-item__buy-btn js-popup__close btn p --xl">Продолжить покупки</div>
							</div>
						</div>
					</div>
					<div class="popup__shade js-popup__close"></div>
				</div>
			</div>
			<div class="popup buy-on-click" id="order-on-click">
				<div class="popup__wrap">
					<div class="popup__content">
						<div class="popup__close js-popup__close"></div>
						<div class="popup__content-wrap col --5">
							<h4 class="popup__title js-title--text"><b>Оформить в 1 клик</b></h4>
							<form action="#" method="post" name="form-5" class="popup__form mt-24">
								<input class="basket-order__products" type="text" name="products" value="" style="display: none">
								<div class="popup__inputs flex">
									<div class="popup__input-wrap big-input mr-12">
										<input type="text" name="name" class="popup__input big-input__input">
										<div class="big-input__title">Имя</div>
										<div class="big-input__error-wrap">
											<div class="big-input__error-title p --l"><b>Заголовок ошибки</b></div>
											<div class="big-input__error-desc  p --m">Описание ошибки</div>
										</div>
									</div>
									<div class="popup__input-wrap big-input">
										<input type="tel" name="tel" class="popup__input big-input__input js-mask__tell">
										<div class="big-input__title">Телефон</div>
										<div class="big-input__error-wrap">
											<div class="big-input__error-title p --l"><b>Заголовок ошибки</b></div>
											<div class="big-input__error-desc  p --m">Описание ошибки</div>
										</div>
									</div>
								</div>
								<button type="send" class="popup__send-btn btn feedback btn-success --fill-1 p --xl mt-16">Отправить</button>
								<div class="popup__checkbox mt-14">
									<label class="checkbox">
										<input type="checkbox" checked="checked" name="private" required>
										<div class="flex --align-center">
											<div class="checkbox__trigger"></div>
											<div class="checkbox__label p --s ml-16">Даю согласие на <a href="/policy/" target="_blank" class="checkbox__link link"><b>обработку персональных данных</b></a></div>
										</div>
									</label>
								</div>
							</form>
						</div>
					</div>
					<div class="popup__shade js-popup__close"></div>
				</div>
			</div>
			<div class="popup buy-on-click" id="buy-on-click">
				<div class="popup__wrap">
					<div class="popup__content">
						<div class="popup__close js-popup__close"></div>
						<div class="popup__content-wrap col --5">
							<h4 class="popup__title js-title--text"><b>Купить в 1 клик</b></h4>
							<div class="popup__product-info flex --align-center mt-24 pb-24">
								<div class="mini-basket-item__img lazy mr-24">
									<picture class="mini-basket-item__img-thumb lazy">
										<source srcset="/template/dist/img/chair-2--min.webp" type="image/webp">
										<source srcset="/template/dist/img/chair-2--min.png" type="image/png">
									</picture>
								</div>
								<div class="mini-basket-item__info-wrap">
									<div class="mini-basket-item__name h5">Casada SkyLiner 2</div>
									<div class="mini-basket-item__info-sub-wrap flex --align-center">
										<div class="mini-basket-item__article p --s">
											Артикул: 
											<span class="mini-basket-item__article-value">c92</span>
										</div>
									</div>
									<div class="product-item__price-sub-wrap flex --align-center">
										<div class="product-item__price h4 mr-16">650 000 Р</div>
										<div class="product-item__old-price-wrap flex --align-center">
											<div class="product-item__old-price p --xl mr-8">720 000 Р</div>
											<div class="product-item__sale-label p --s">-16%</div>
										</div>
									</div>
								</div>
							</div>
							<form action="#" method="post" name="form-5" class="popup__form mt-32">
								<input class="basket-order__products" type="text" name="products" value="" style="display: none">
								<div class="popup__inputs flex">
									<div class="popup__input-wrap big-input mr-12">
										<input type="text" name="name" class="popup__input big-input__input">
										<div class="big-input__title">Имя</div>
										<div class="big-input__error-wrap">
											<div class="big-input__error-title p --l"><b>Заголовок ошибки</b></div>
											<div class="big-input__error-desc  p --m">Описание ошибки</div>
										</div>
									</div>
									<div class="popup__input-wrap big-input">
										<input type="tel" name="tel" class="popup__input big-input__input js-mask__tell">
										<div class="big-input__title">Телефон</div>
										<div class="big-input__error-wrap">
											<div class="big-input__error-title p --l"><b>Заголовок ошибки</b></div>
											<div class="big-input__error-desc  p --m">Описание ошибки</div>
										</div>
									</div>
								</div>
								<button type="send" class="popup__send-btn btn feedback btn-success --fill-1 p --xl mt-16">Отправить</button>
								<div class="popup__checkbox mt-14">
									<label class="checkbox">
										<input type="checkbox" checked="checked" name="private" required>
										<div class="flex --align-center">
											<div class="checkbox__trigger"></div>
											<div class="checkbox__label p --s ml-16">Даю согласие на <a href="/policy/" target="_blank" class="checkbox__link link"><b>обработку персональных данных</b></a></div>
										</div>
									</label>
								</div>
							</form>
						</div>
					</div>
					<div class="popup__shade js-popup__close"></div>
				</div>
			</div>
			<div class="popup add-review" id="add-review">
				<div class="popup__wrap">
					<div class="popup__content">
						<div class="popup__close js-popup__close"></div>
						<h4 class="popup__title js-title--text"><b>Написать отзыв</b></h4>
						<form action="get" class="popup__form col --6 mt-32">
							<div class="popup__inputs flex --just-space mt-32">
								<div class="popup__input-wrap --name col --3 mr-16">
									<input class="popup__input input --fill" type="text" name="name" placeholder="Имя">
								</div>
								<div class="popup__input-wrap --email col --3">
									<input class="popup__input input --fill" type="email" name="email" placeholder="E-mail:">
								</div>
							</div>
							<div class="popup__rating-wrap flex --align-center mt-24">
								<div class="popup__rating-label p --l mr-16">Общая оценка:</div>
								<div class="rate">
									<input type="radio" id="star5" data-pform-validation="required" name="rate" value="5" data-pform-cache="false">
									<label for="star5" title="text">5 stars</label>
									<input type="radio" id="star4" data-pform-validation="required" name="rate" value="4" data-pform-cache="false">
									<label for="star4" title="text">4 stars</label>
									<input type="radio" id="star3" data-pform-validation="required" name="rate" value="3" data-pform-cache="false">
									<label for="star3" title="text">3 stars</label>
									<input type="radio" id="star2" data-pform-validation="required" name="rate" value="2" data-pform-cache="false">
									<label for="star2" title="text">2 stars</label>
									<input type="radio" id="star1" data-pform-validation="required" name="rate" value="1" data-pform-cache="false">
									<label for="star1" title="text">1 star</label>
								</div>
							</div>
							<div class="popup__textareas-wrap mt-24">
								<div class="popup__textarea-wrap --quality">
									<textarea name="quality" placeholder="Достоинства" class="popup__textarea"></textarea>
								</div>
								<div class="popup__textarea-wrap --defect">
									<textarea name="defect" placeholder="Недостатки" class="popup__textarea"></textarea>
								</div>
								<div class="popup__textarea-wrap --comment">
									<textarea name="comment" placeholder="Комментарий" class="popup__textarea"></textarea>
								</div>
							</div>
							<div class="popup__send-wrap flex --align-center --just-space mt-32">
								<div class="popup__checkbox">
									<label class="checkbox">
										<input type="checkbox" checked="checked">
										<div class="flex --align-center">
											<div class="checkbox__trigger"></div>
											<div class="checkbox__label p --m ml-16">Даю согласие на <a href="#" class="checkbox__link link"><b>обработку персональных данных</b></a></div>
										</div>
									</label>
								</div>
								<button type="send" class="popup__send-btn btn --fill-1 p --xl">Оставить отзыв</button>
							</div>
						</form>
					</div>
					<div class="popup__shade js-popup__close"></div>
				</div>
			</div>
			<div class="popup thanks" id="thanks">
				<div class="popup__wrap">
					<div class="popup__content col --8">
						<div class="popup__close js-popup__close"></div>
						<h4 class="popup__title js-title--text my-0"><b>Спасибо за заявку!</b></h4>
						<p class="popup__desc p --l mt-24">Наш специалист свяжется с вами в течении 15 мин</p>
						<div class="popup__btn-wrap flex --just-center mt-32">
							<div class="btn --fill-1 js-popup__close col --4"><span>Хорошо</span></div>
						</div>
					</div>
					<div class="popup__shade js-popup__close"></div>
				</div>
			</div>
			<div class="popup thanks-contacts" id="thanks-contacts">
				<div class="popup__wrap">
					<div class="popup__content col --8">
						<div class="popup__close js-popup__close"></div>
						<h4 class="popup__title js-title--text my-0"><b>Спасибо за обращение!</b></h4>
						<p class="popup__desc p --l mt-24">Ваше обращение передано ответственному специалисту, статус по Вашему обращению можно уточнить по телефону <a href="tel:88006004126" class="popup__link link --color-dark"><b>8 (800) 600-41-26</b></a> с 9:00 до 18:00</p>
						<div class="popup__btn-wrap flex --just-center mt-32">
							<a href="/" class="btn --fill-1 js-popup__close col --4"><span>На главную</span></a>
						</div>
					</div>
					<div class="popup__shade js-popup__close"></div>
				</div>
			</div>
			<div class="scroll__top --js animated fadeInUp"><div></div></div>
		</main>
	</div>
	<?php  if ($__dev_mode == true ){}else{ require($_SERVER['DOCUMENT_ROOT'].'/template/dist.php'); } ?>
</body>
</html>