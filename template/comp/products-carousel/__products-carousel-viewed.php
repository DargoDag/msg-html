<?php 
	if ($_COOKIE['viewed']) {
		$viewed = unserialize($_COOKIE['viewed']);
        $viewed = json_encode($viewed);
        $viewed_items = json_decode(file_get_contents(API.'/api/get-items.php?ids='.$viewed), true);
	};
	$carousel = true;
?>
<? if ($_COOKIE['viewed']) { ?>
    <div class="products-carousel --viewed">
        <div class="js-swiper__products-viewed type-carusel">
            <div class="type-carusel__head flex --align-center --just-space mb-32">
                <div class="type-carusel__title h3">Вы смотрели</div>
                <div class="type-carusel__nav flex --align-center">
                    <div class="type-carusel__nav-wrap flex --align-center mr-16">
                        <div class="type-carusel__btn --left swiper-button-prev --products">
                            <div class="type-carusel__btn-icon --svg__arrow-2--left"></div>
                        </div>
                        <div class="type-carusel__pagination mx-16">
                            <div class="swiper-pagination --products"></div>
                        </div>
                        <div class="type-carusel__btn --right swiper-button-next --products">
                            <div class="type-carusel__btn-icon --svg__arrow-2--right"></div>
                        </div>
                    </div>
                    <a href="#" class="type-carusel__all-btn btn --fill-1">Все</a>
                </div>
            </div>
            <div class="type-carusel__swiper">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <? 
                            foreach ($viewed_items as $key => $item) {
                                $sect = strtolower(str_replace('https://tiu.ru/', '', $item['category_link']));
                                $detail_link = '/catalog/'.$sect.'/'.$item['code'].'/';
                        ?>
                            <div class="swiper-slide">
                                <div class="product-item">
                                    <? $src = str_replace('https://images.ru.prom.st/', 'min-', $item['img'][0]); ?>
                                    <? $new_src = str_replace('.jpg', '', $src); ?>
                                    <a href="<?=$detail_link?>" class="product-item__cover">
                                        <picture class="product-item__cover-img lazy">
                                            <source srcset="/template/dist/img/<?=$new_src?>.webp" type="image/webp">
                                            <source srcset="/template/dist/img/<?=$new_src?>.jpg" type="image/jpg">
                                        </picture>
                                    </a>
                                    <a href="<?=$detail_link?>" class="product-item__name link mt-4"><?=$item['name']?></a>
                                    <div class="product-item__rating flex mt-4">
                                        <div class="rate flex mr-8">
                                            <div id="star5" class="rate__icon is-active"></div>
                                            <div id="star4" class="rate__icon is-active"></div>
                                            <div id="star3" class="rate__icon is-active"></div>
                                            <div id="star2" class="rate__icon is-active"></div>
                                            <div id="star1" class="rate__icon"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <? } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<? } ?>