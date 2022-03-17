<div class="product-desc">
    <div class="tabs">
        <div class="tabs__btns flex --align-center">
            <div class="tabs__btn --js pb-40" data-tab="1">Описание</div>
            <div class="tabs__btn --js is-active pb-40" data-tab="2">Характеристики</div>
            <div class="tabs__btn --js pb-40" data-tab="3">Отзывы</div>
            <div class="tabs__btn --js pb-40" data-tab="4">Видео</div>
        </div>
        <div class="tabs__blocks mt-48">
            <div class="tabs__block --js --1">
                <div class="product-desc__type-editor type-editor --no">
                    <?=$product['description']?>
                </div>
            </div>
            <div class="tabs__block --js --2 is-show">
                <div class="product-desc__parameters-items grid --temp-col-2">
                    <div class="parameter-item flex --align-center --just-space">
                        <div class="parameter-item__label p --l">Страна</div>
                        <div class="parameter-item__line mx-32"></div>
                        <div class="parameter-item__value p --l"><?=$product['country']?></div>
                    </div>
                    <div class="parameter-item flex --align-center --just-space">
                        <div class="parameter-item__label p --l">Производитель</div>
                        <div class="parameter-item__line mx-32"></div>
                        <a href="/brands/<?=$product['manufacture']?>/" class="parameter-item__value link --color-1 p --l"><?=$product['manufacture']?></a>
                    </div>
                    <? foreach ($product['props'] as $key => $prop) { ?>
                        <? if ($prop['value'] != null ) { ?>
                            <div class="parameter-item flex --align-center --just-space">
                                <div class="parameter-item__label p --l"><?=$prop['name']?></div>
                                <? if (is_array($prop['value'])) { ?>
                                    <div class="parameter-item__value p --l --full-width mt-8">
                                        <? foreach ($prop['value'] as $key => $val) { ?>
                                            <?=$val?> 
                                        <? } ?>
                                        <?=$prop['sufix']?>
                                    </div>
                                <? } else { ?>
                                    <div class="parameter-item__line mx-32"></div>
                                    <div class="parameter-item__value p --l">
                                        <?=$prop['value']?>
                                    </div>
                                <? } ?>
                            </div>
                        <? } ?>
                    <? } ?>
                </div>
            </div>
            <div class="tabs__block --js --3 flex --align-stretch --just-space">
                <div class="product-desc__reviews-wrap col --7">
                    <div class="product-desc__reviews-head flex --align-center --just-space pb-32">
                        <div class="product-desc__reviews-selects flex col --4">
                            <div class="product-desc__reviews-select-wrap mr-16">
                                <select class="product-desc__reviews-select select --border --svg__arrow">
                                    <option value="">Сначало новые</option>
                                    <option value="">Сначало новые</option>
                                </select>
                            </div>
                            <div class="product-desc__reviews-select-wrap">
                                <select class="product-desc__reviews-select select --border --svg__arrow">
                                    <option value="">Оценка: Отлично</option>
                                    <option value="">Оценка: Отлично</option>
                                </select>
                            </div>
                        </div>
                        <div class="pagination__show-in flex --align-center col --2">
                            <div class="pagination__show-in-label --p mr-16">Выводить по: </div>
                            <div class="pagination__show-in-wrap flex">
                                <select name="" id="" class="pagination__show-in-select select --border --svg__arrow">
                                    <option value="">9</option>
                                    <option value="">12</option>
                                    <option value="">24</option>
                                    <option value="">32</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="product-desc__reviews-items mt-32">
                        <? /*
                        <div class="review-item flex">
                            <div class="review-item__author-wrap flex --direction-column --align-center mr-56">
                                <div class="review-item__ava"></div>
                                <div class="review-item__name p --l mt-8">Елена</div>
                                <div class="review-item__rating mt-4">
                                    <div class="rate flex">
                                        <div id="star5" class="rate__icon is-active"></div>
                                        <div id="star4" class="rate__icon is-active"></div>
                                        <div id="star3" class="rate__icon is-active"></div>
                                        <div id="star2" class="rate__icon"></div>
                                        <div id="star1" class="rate__icon"></div>
                                    </div>
                                </div>
                                <div class="review-item__date p --m mt-4">22.02.2018</div>
                            </div>
                            <div class="review-item__desc-wrap">
                                <div class="review-item__desc --p">Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях.</div>
                                <div class="review-item__quality-wrap mt-24">
                                    <div class="review-item__label p --l">Достоинства</div>
                                    <div class="review-item__desc --p mt-4">Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру </div>
                                </div>
                                <div class="review-item__defect-wrap mt-24">
                                    <div class="review-item__label p --l">Недостатки</div>
                                    <div class="review-item__desc --p mt-4">Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного</div>
                                </div>
                                <div class="review-item__video mt-32">
                                    <iframe class="lazy" width="100%" height="100%" data-src="https://www.youtube.com/embed/pDzAuQZf1JI" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        */ ?>
                    </div>
                    <div class="pagination__load-more flex --align-center --just-center mt-40">
                        <i class="pagination__icon mr-12"></i>
                        <span class="pagination__label">Показать еще</span>
                    </div>
                </div>
                <div class="product-desc__reviews-sticky flex --just-end col --5">
                    <div class="reviews-sticky__wrap">
                        <div class="js-stiky">
                            <div class="reviews-sticky">
                                <div class="reviews-sticky__sub-wrap flex --align-center --just-space">
                                    <div class="reviews-sticky__total-rating flex --direction-column --align-center mr-18">
                                        <div class="reviews-sticky__rating-value h1">4.2</div>
                                        <div class="reviews-sticky__rating-indicators">
                                            <div class="rate flex">
                                                <div id="star5" class="rate__icon is-active"></div>
                                                <div id="star4" class="rate__icon is-active"></div>
                                                <div id="star3" class="rate__icon is-active"></div>
                                                <div id="star2" class="rate__icon"></div>
                                                <div id="star1" class="rate__icon"></div>
                                            </div>
                                            <div class="rate__count p --m mt-6">16 отзывов</div>
                                        </div>
                                    </div>
                                    <div class="reviews-sticky__detail-ratings">
                                        <div class="detail-rating flex --align-center --just-space">
                                            <div class="detail-rating__numb p --m">5</div>
                                            <div class="detail-rating__scale mx-12">
                                                <div class="detail-rating__scale-progress" style="width: 80%"></div>
                                            </div>
                                            <div class="detail-rating__value p --m">80%</div>
                                        </div>
                                        <div class="detail-rating flex --align-center --just-space">
                                            <div class="detail-rating__numb p --m">4</div>
                                            <div class="detail-rating__scale mx-12">
                                                <div class="detail-rating__scale-progress" style="width: 40%"></div>
                                            </div>
                                            <div class="detail-rating__value p --m">40%</div>
                                        </div>
                                        <div class="detail-rating flex --align-center --just-space">
                                            <div class="detail-rating__numb p --m">3</div>
                                            <div class="detail-rating__scale mx-12">
                                                <div class="detail-rating__scale-progress" style="width: 10%"></div>
                                            </div>
                                            <div class="detail-rating__value p --m">10%</div>
                                        </div>
                                        <div class="detail-rating flex --align-center --just-space">
                                            <div class="detail-rating__numb p --m">2</div>
                                            <div class="detail-rating__scale mx-12">
                                                <div class="detail-rating__scale-progress" style="width: 70%"></div>
                                            </div>
                                            <div class="detail-rating__value p --m">70%</div>
                                        </div>
                                        <div class="detail-rating flex --align-center --just-space">
                                            <div class="detail-rating__numb p --m">1</div>
                                            <div class="detail-rating__scale mx-12">
                                                <div class="detail-rating__scale-progress" style="width: 20%"></div>
                                            </div>
                                            <div class="detail-rating__value p --m">20%</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#add-review" data-popup="#add-review" class="reviews-sticky__add-review-btn btn p --l mt-24">Добавить отзыв</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tabs__block --js --4"></div>
        </div>
    </div>
</div>