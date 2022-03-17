<?php
	$carousel = true;
?>
<div class="products-carousel --sale">
    <div class="js-swiper__products-sale type-carusel">
    	<div class="type-carusel__head flex --align-center --just-end mb-24">
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
                <div class="type-carusel__all-btn btn --fill-1">Все</div>
    		</div>
    	</div>
    	<div class="type-carusel__swiper">
    		<div class="swiper-container --products">
    			<div class="swiper-wrapper">
                    <? foreach ($carusel as $key => $item) { ?>
                        <div class="swiper-slide">
                            <?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/catalog-list/item.php'); ?>
                        </div>
                    <? } ?>
    			</div>
    		</div>
    	</div>
    </div>
</div>