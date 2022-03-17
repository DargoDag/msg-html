<?php
    $basket = file_get_contents(API.'/api/get-cart.php?view=basket', false, $context);
?>
<div class="basket flex --just-space">
    <div class="basket__wrap col --8">
        <div class="basket-items js-cart-basket-items">
            <?=$basket?>
        </div>
        <div class="basket__additionals-carousel mt-64">
            <?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/additionals-carousel/__additionals-carousel.php'); ?>
        </div>
        <div class="basket__order-wrap mt-80">
            <?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/basket-order/__basket-order.php'); ?>
        </div>
    </div>
    <div class="basket__sticky-wrap col --4 flex --just-end">
        <div class="js-stiky">
            <div class="basket-sticky__sub-wrap">
                <div class="basket-sticky">
                    <div class="basket-sticky__head pb-12">
                        <div class="basket-sticky__head-label h5">
                            Товаров 
                            <span class="basket-sticky__products-count">(<span class="js-cart-total-count"><?=$cart_total['count']?></span> ед.)</span>
                        </div>
                    </div>
                    <div class="basket-sticky__price-wrap pb-24 mt-12">
                        <div class="basket-sticky__price-item --product flex --align-center --just-space">
                            <div class="basket-sticky__price-label --p">Стоимость заказа</div>
                            <div class="basket-sticky__price-value p --xl"><b><span class="js-cart-total-price"><?=number_format($cart_total['total_price'], 0, '.', ' ')?></span> Р</b></div>
                        </div>
                        <div class="basket-sticky__price-item --delivery flex --align-center --just-space">
                            <div class="basket-sticky__price-label --p">Доставка</div>
                            <div class="basket-sticky__price-value p --xl"><b>0 Р</b></div>
                        </div>
                        <div class="basket-sticky__price-item --discount flex --align-center --just-space">
                            <div class="basket-sticky__price-label --p">Скидка</div>
                            <div class="basket-sticky__price-value p --xl"><b>0 Р</b></div>
                        </div>
                        <div class="basket-sticky__devider"></div>
                    </div>
                    <div class="basket-sticky__total-price mt-24">
                        <div class="basket-sticky__total-price-label --p">Итого к оплате:</div>
                        <div class="basket-sticky__total-price-value h2 mt-14"><b><span class="js-cart-total-price"><?=number_format($cart_total['total_price'], 0, '.', ' ')?></span> Р</b></div>
                    </div>
                    <div class="basket-sticky__btns-wrap mt-32">
                        <a href="#" class="product-item__add-btn btn --fill-1 p --l">Оформить заказ</a>
                        <a href="#order-on-click" data-popup="#order-on-click" class="product-item__buy-btn btn p --l">Оформить в 1 клик</a>
                    </div>
                    <div class="basket-sticky__payment-items flex --align-center mt-24">
                        <div class="payment-item">
                            <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/visa.svg'); ?>
                        </div>
                        <div class="payment-item">
                            <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/master-card.svg'); ?>
                        </div>
                        <div class="payment-item">
                            <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/mir.svg'); ?>
                        </div>
                        <div class="payment-item">
                            <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/qiwi.svg'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="basket-sticky__delivery-wrap mt-24">
                <div class="basket-sticky__delivery-desc --p">Доступные способы оплаты и доставки можно выбрать при оформлении заказа</div>
                <div class="basket-sticky__delivery-options mt-32 px-40">
                    <div class="option-item accordion">
                        <div class="accordion__title --js flex --align-center --just-space">
                            <div class="accordion__title-label p --l">Доставка по Москве</div>
                            <div class="accordion__title-icon"></div>
                        </div>
                        <div class="accordion__desc">
                            <p><b>Бесплатно</b> - завтра с 9:00 утра</p>
                        </div>
                    </div>
                    <div class="option-item accordion">
                        <div class="accordion__title --js flex --align-center --just-space">
                            <div class="accordion__title-label p --l">Доставка по России</div>
                            <div class="accordion__title-icon"></div>
                        </div>
                        <div class="accordion__desc">
                            <p><b>Бесплатно</b> - сроки уточняйте по телефону <a href="tel:88006004126" class="link --color-dark"><b>8 (800) 600-41-26</b></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="basket-sticky__callback-wrap pt-40">
                <div class="basket-sticky__callback-label p --l">Сомневаетесь или есть вопросы?</div>
                <div class="basket-sticky__callback-post-title p --m mt-4">Просто позвоните:</div>
                <a href="tel:88006004126" class="basket-sticky__callback-tel-link link h4 mt-8"><b>8 (800) 600-41-26</b></a>
                <a href="#request-call" data-popup="#request-call" class="basket-sticky__callback-order-link link p --m mt-4"><b>Заказать обратный звонок</b></a>
            </div>
        </div>
    </div>
</div>