<div class="banks-carousel">
    <div class="js-swiper__banks type-carusel">
    	<div class="type-carusel__head flex --align-center --just-space mb-32">
            <div class="type-carusel__title h3">Банки</div>
    		<div class="type-carusel__nav flex --align-center">
    		    <div class="type-carusel__nav-wrap flex --align-center mr-16">
    		        <div class="type-carusel__btn --left swiper-button-prev --banks">
                        <div class="type-carusel__btn-icon --svg__arrow-2--left"></div>
                    </div>
        			<div class="type-carusel__pagination mx-16">
        				<div class="swiper-pagination --banks"></div>
        			</div>
        		    <div class="type-carusel__btn --right swiper-button-next --banks">
                        <div class="type-carusel__btn-icon --svg__arrow-2--right"></div>
                    </div>
    		    </div>
                <div class="type-carusel__all-btn btn --fill-1">Все</div>
    		</div>
    	</div>
    	<div class="type-carusel__swiper">
    		<div class="swiper-container --banks">
    			<div class="swiper-wrapper">
                    <? for ($i=1; $i < 13; $i++) {
                        $name = $i;
                    ?>
                        <!-- bank-item -->
                        <div class="swiper-slide">
                            <div class="bank-item flex --align-center --just-center">
                                <picture class="bank-item__thumb lazy">
                                    <source srcset="/template/dist/img/bank-<?=$name?>.webp" type="image/webp">
                                    <source srcset="/template/dist/img/bank-<?=$name?>.png" type="image/png">
                                </picture>
                            </div>
                        </div>
                    <? } ?>
    			</div>
    		</div>
    	</div>
    </div>
</div>