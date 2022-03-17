<div class="basket-order">
    <div class="basket-order__title h2"><b>Оформление заказа</b></div>
    <div class="basket-order__steps-items mt-40">
        <form action="#" method="post" name="form-6" class="step-item__form mt-24">
            <input class="basket-order__products" type="text" name="products" value="" style="display: none">
            <!-- step-item -->
            <div class="step-item pb-48">
                <div class="step-item__title"><span>Шаг 1.</span> Представьтесь</div>
                <div class="step-item__inputs-wrap flex mt-24">
                    <div class="popup__input-wrap big-input --name col --12">
                        <input type="text" name="name" required class="popup__input big-input__input --fill">
                        <div class="big-input__title">Ваше имя:</div>
                        <div class="big-input__error-wrap">
                            <div class="big-input__error-title p --l"><b>Заголовок ошибки</b></div>
                            <div class="big-input__error-desc  p --m">Описание ошибки</div>
                        </div>
                    </div>
                    <div class="popup__input-wrap --tel big-input">
                        <input type="tel" name="tel" required class="popup__input big-input__input --fill js-mask__tell">
                        <div class="big-input__title">Телефон:</div>
                        <div class="big-input__error-wrap">
                            <div class="big-input__error-title p --l"><b>Заголовок ошибки</b></div>
                            <div class="big-input__error-desc  p --m">Описание ошибки</div>
                        </div>
                    </div>
                    <div class="popup__input-wrap --email big-input">
                        <input type="email" name="email" required class="popup__input big-input__input --fill">
                        <div class="big-input__title">Ваш email:</div>
                        <div class="big-input__error-wrap">
                            <div class="big-input__error-title p --l"><b>Заголовок ошибки</b></div>
                            <div class="big-input__error-desc  p --m">Описание ошибки</div>
                        </div>
                    </div>
                </div>
                <div class="popup__input-wrap big-input --city col --12 mt-16">
                    <input type="text" name="city" required class="popup__input big-input__input --fill">
                    <div class="big-input__title">Город:</div>
                    <div class="big-input__error-wrap">
                        <div class="big-input__error-title p --l"><b>Заголовок ошибки</b></div>
                        <div class="big-input__error-desc  p --m">Описание ошибки</div>
                    </div>
                </div>
                <div class="step-item__checkboxes-wrap mt-24">
                    <div class="popup__checkbox">
                        <label class="checkbox">
                            <input type="checkbox" checked="checked" name="private" required>
                            <div class="flex --align-center">
                                <div class="checkbox__trigger"></div>
                                <div class="checkbox__label p --m ml-16">Даю согласие на <a href="/policy.php" target="_blank" class="checkbox__link link"><b>обработку персональных данных</b></a></div>
                            </div>
                        </label>
                    </div>
                    <div class="popup__checkbox mt-8">
                        <label class="checkbox">
                            <input type="checkbox" checked="checked" name="subscribe" value="Да">
                            <div class="flex --align-center">
                                <div class="checkbox__trigger"></div>
                                <div class="checkbox__label p --m ml-16">Подписаться на <a href="/sales/" target="_blank" class="checkbox__link link"><b>рассылку выгодных предложений</b></a></div>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
            <!-- step-item -->
            <div class="step-item mt-48">
                <div class="step-item__title"><span>Шаг 2.</span> Как доставить заказ?</div>
                <div class="step-item__delivery-items grid --temp-col-5 --gap-14 mt-24">
                    <!-- delivery-item -->
                    <label class="delivery-item checkbox">
                        <input class="delivery-item__check-input" type="radio" name="delivery_method" checked="checked" value="Курьером" required>
                        <div class="delivery-item__thumb flex --direction-column --align-center --just-space">
                            <div class="delivery-item__logo flex --align-center --just-center">
                                <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/courier.svg'); ?>
                            </div>
                            <div class="delivery-item__info-wrap">
                                <div class="delivery-item__name p --m">Курьером</div>
                                <div class="delivery-item__price h5"><b>310 Р*</b></div>
                                <div class="delivery-item__term p --m mt-4">7-8 рабочих дней</div>
                            </div>
                        </div>
                    </label>
                    <!-- delivery-item -->
                    <label class="delivery-item checkbox">
                        <input class="delivery-item__check-input" type="radio" name="delivery_method" value="PickPoint" required>
                        <div class="delivery-item__thumb flex --direction-column --align-center --just-space">
                            <div class="delivery-item__logo flex --align-center --just-center">
                                <picture class="delivery-item__logo-thumb flex lazy">
                                    <source srcset="/template/dist/img/pick-point.webp" type="image/webp">
                                    <source srcset="/template/dist/img/pick-point.png" type="image/png">
                                </picture>
                            </div>
                            <div class="delivery-item__info-wrap">
                                <div class="delivery-item__name p --m">PickPoint</div>
                                <div class="delivery-item__price h5"><b>310 руб*</b></div>
                                <div class="delivery-item__term p --m mt-4">7-8 рабочих дней</div>
                            </div>
                        </div>
                    </label>
                    <!-- delivery-item -->
                    <label class="delivery-item checkbox --russian-mail">
                        <input class="delivery-item__check-input" type="radio" name="delivery_method" value="Почта России" required>
                        <div class="delivery-item__thumb flex --direction-column --align-center --just-space">
                            <div class="delivery-item__logo flex --align-center --just-center">
                                <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/russian-mail.svg'); ?>
                            </div>
                            <div class="delivery-item__info-wrap">
                                <div class="delivery-item__name p --m">Почта России</div>
                                <div class="delivery-item__price h5"><b>310 Р*</b></div>
                                <div class="delivery-item__term p --m mt-4">7-8 рабочих дней</div>
                            </div>
                        </div>
                    </label>
                    <!-- delivery-item -->
                    <label class="delivery-item checkbox">
                        <input class="delivery-item__check-input" type="radio" name="delivery_method" value="Boxberry" required>
                        <div class="delivery-item__thumb flex --direction-column --align-center --just-space">
                            <div class="delivery-item__logo flex --align-center --just-center">
                                <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/boxberry.svg'); ?>
                            </div>
                            <div class="delivery-item__info-wrap">
                                <div class="delivery-item__name p --m">Boxberry</div>
                                <div class="delivery-item__price h5"><b>310 Р*</b></div>
                                <div class="delivery-item__term p --m mt-4">7-8 рабочих дней</div>
                            </div>
                        </div>
                    </label>
                    <!-- delivery-item -->
                    <label class="delivery-item checkbox">
                        <input class="delivery-item__check-input" type="radio" name="delivery_method" value="Самовывоз" required>
                        <div class="delivery-item__thumb flex --direction-column --align-center --just-space">
                            <div class="delivery-item__logo flex --align-center --just-center">
                                <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/by-self.svg'); ?>
                            </div>
                            <div class="delivery-item__info-wrap">
                                <div class="delivery-item__name p --m">Самовывоз</div>
                                <div class="delivery-item__price h5"><b>310 Р*</b></div>
                                <div class="delivery-item__term p --m mt-4">7-8 рабочих дней</div>
                            </div>
                        </div>
                    </label>
                </div>
                <div class="step-item__inputs-wrap flex mt-32">
                    <div class="step-item__input-wrap --country mr-32">
                        <div class="step-item__input-label p --m">Страна</div>
                        <input class="step-item__input input --border-bottom" value="Россия" type="text" name="country_step_2" placeholder="Ваша страна:" required>
                    </div>
                    <div class="step-item__input-wrap --region mr-32">
                        <div class="step-item__input-label p --m">Область</div>
                        <input class="step-item__input input --border-bottom" value="Московская" type="text" name="region_step_2" placeholder="Ваша область:" required>
                    </div>
                    <div class="step-item__input-wrap --city">
                        <div class="step-item__input-label p --m">Город</div>
                        <input class="step-item__input input --border-bottom" value="Москва" type="text" name="city_step_2" placeholder="Ваш город:" required>
                    </div>
                </div>
                <div class="step-item__inputs-wrap flex mt-24">
                    <div class="step-item__input-wrap --street mr-32">
                        <div class="step-item__input-label p --m">Улица</div>
                        <input class="step-item__input input --border-bottom" value="Льва Толстого" type="text" name="street_step_2" placeholder="Ваша улица:" required>
                    </div>
                    <div class="step-item__input-wrap --house col --1 mr-32">
                        <div class="step-item__input-label p --m">Дом</div>
                        <input class="step-item__input input --border-bottom" value="103" type="text" name="house_step_2" placeholder="Номер дома:" required>
                    </div>
                    <div class="step-item__input-wrap --housing col --1 mr-32">
                        <div class="step-item__input-label p --m">Корпус</div>
                        <input class="step-item__input input --border-bottom" value="-" type="text" name="housing_step_2" placeholder="Корпус:" required>
                    </div>
                    <div class="step-item__input-wrap --building col --1 mr-32">
                        <div class="step-item__input-label p --m">Строение</div>
                        <input class="step-item__input input --border-bottom" value="-" type="text" name="building_step_2" placeholder="Строение:" required>
                    </div>
                    <div class="step-item__input-wrap --apartment col --1 mr-32">
                        <div class="step-item__input-label p --m">Квартира</div>
                        <input class="step-item__input input --border-bottom" value="95" type="text" name="apartment_step_2" placeholder="Номер квартиры:" required>
                    </div>
                    <div class="step-item__input-wrap --index col --1">
                        <div class="step-item__input-label p --m">Индекс</div>
                        <input class="step-item__input input --border-bottom" value="119034" type="text" name="index_step_2" placeholder="Ваш город:" required>
                    </div>
                </div>
            </div>
            <!-- step-item -->
            <div class="step-item --final-order mt-72">
                <div class="step-item__title"><span>Шаг 3.</span> Как будете оплачивать?</div>
                <div class="step-item__payment-items grid --temp-col-5 --gap-16 mt-32">
                    <!-- payment-item -->
                    <label class="payment-item checkbox">
                        <input class="payment-item__check-input" type="radio" name="payment_method" checked="checked" value="Наличные" required>
                        <div class="payment-item__tumb flex --direction-column --align-center --just-center">
                            <div class="payment-item__logo">
                                <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/wallet.svg'); ?>
                            </div>
                            <div class="payment-item__label --p mt-24">Наличные</div>
                        </div>
                    </label>
                    <!-- payment-item -->
                    <label class="payment-item checkbox">
                        <input class="payment-item__check-input" type="radio" name="payment_method" value="Счет" required>
                        <div class="payment-item__tumb flex --direction-column --align-center --just-center">
                            <div class="payment-item__logo">
                                <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/bill.svg'); ?>
                            </div>
                            <div class="payment-item__label --p mt-24">Счет</div>
                        </div>
                    </label>
                    <!-- payment-item -->
                    <label class="payment-item checkbox">
                        <input class="payment-item__check-input" type="radio" name="payment_method" value="Перевод" required>
                        <div class="payment-item__tumb flex --direction-column --align-center --just-center">
                            <div class="payment-item__logo">
                                <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/transfer.svg'); ?>
                            </div>
                            <div class="payment-item__label --p mt-24">Перевод</div>
                        </div>
                    </label>
                    <!-- payment-item -->
                    <label class="payment-item checkbox">
                        <input class="payment-item__check-input" type="radio" name="payment_method" value="Онлайн" required>
                        <div class="payment-item__tumb flex --direction-column --align-center --just-center">
                            <div class="payment-item__logo">
                                <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/visa-mc.svg'); ?>
                            </div>
                            <div class="payment-item__label --p mt-24">Онлайн</div>
                        </div>
                    </label>
                    <!-- payment-item -->
                    <label class="payment-item checkbox">
                        <input class="payment-item__check-input" type="radio" name="payment_method" value="Сбербанк" required>
                        <div class="payment-item__tumb flex --direction-column --align-center --just-center">
                            <div class="payment-item__logo">
                                <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/sber.svg'); ?>
                            </div>
                            <div class="payment-item__label --p mt-24">Сбербанк</div>
                        </div>
                    </label>
                </div>
            </div>
            <div class="step-item__btns-wrap flex --direction-column --align-center mt-48">
                <div class="step-item__comment-wrap flex --direction-column --align-center col --6">
                    <div class="step-item__comment-btn btn --js">
                        <div class="step-item__comment-btn-icon --svg__plus mr-8"></div>
                        <div class="step-item__comment-btn-label p --xl">Добавить комментарий к заказу</div>
                    </div>
                    <div class="step-item__comment-textarea popup__textarea-wrap --comment mt-32" style="display: none;">
                        <textarea name="comment" placeholder="Комментарий" class="popup__input input --fill"></textarea>
                    </div>
                </div>
                <button type="send" class="step-item__send-btn btn feedback btn-success --fill-1 h5 col --6 mt-32">Завершить оформление заказа</button>
            </div>
        </form>
    </div>
</div>