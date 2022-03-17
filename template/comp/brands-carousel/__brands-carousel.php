<div class="brands-carousel">
    <div class="js-swiper__brands type-carusel">
    	<div class="type-carusel__head flex --align-center --just-space mb-32">
            <div class="type-carusel__title h3">Бренды</div>
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
                <a href="/brands/" class="type-carusel__all-btn btn --fill-1">Все</a>
    		</div>
    	</div>
    	<div class="type-carusel__swiper">
    		<div class="swiper-container --products">
    			<div class="swiper-wrapper">
                    <? foreach ($brands as $key => $item) { ?>
                        <div class="swiper-slide">
                            <a href="/brands/<?=$item['name']?>/" class="brand-item">
                                <picture class="brand-item__thumb lazy">
                                    <source srcset="/template/dist/img/<?=$item['name']?>.webp" type="image/webp">
                                    <source srcset="/template/dist/img/<?=$item['name']?>.png" type="image/png">
                                </picture>
                                <div class="brand-item__desc h5">Показать <span><?=$item['count']?> товаров</span></div>
                            </a>
                        </div>
                    <? } ?>
    			</div>
    		</div>
    	</div>
    </div>
</div>