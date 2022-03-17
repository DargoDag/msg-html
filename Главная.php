<?php
$brands = json_decode(file_get_contents(API . '/api/get-manufacture.php'), true);
$popular_ids = json_encode(array(499392950, 499399017, 499400031, 510534696, 510534753, 499936391));
$news_ids = json_encode(array(499367093, 499369387, 499370154, 516870936, 516870974, 501462632, 502320953, 502321252));
$hit_ids = json_encode(array(506486459, 506489205, 489186074, 489762583, 489617829));
$ndx_sales_ids = json_encode(array(507149762, 507149744, 489617829));
$populars = json_decode(file_get_contents(API . '/api/get-items.php?ids=' . $popular_ids), true);
$news = json_decode(file_get_contents(API . '/api/get-items.php?ids=' . $news_ids), true);
$hits = json_decode(file_get_contents(API . '/api/get-items.php?ids=' . $hit_ids), true);
$ndx_sales = json_decode(file_get_contents(API . '/api/get-items.php?ids=' . $ndx_sales_ids), true);
$meta__title = "Главная";
$meta__desc  = "";
$meta__key   = "";
$modifier   = "--banner --main";
require($_SERVER['DOCUMENT_ROOT'] . '/template/header.php');
?>
<div class="content__main-wrap">
	<div class="content__page-banner <?= $modifier ?>">
		<div class="content__banner-carousel">
			<div class="js-swiper__main type-carusel">
				<div class="type-carusel__swiper">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<!-- banner-item -->
							<div class="swiper-slide">
								<div class="banner-item">
									<picture class="banner-item__bg-thumb lazy">
										<source srcset="/template/dist/img/BetaSonic2.webp" type="image/webp">
										<img src="/template/dist/img/BetaSonic2.png" type="image/png">
									</picture>
									<picture class="banner-item__bg-thumb lazy --mob">
										<source srcset="/template/dist/img/BetaSonic2--mob.webp" type="image/webp">
										<img src="/template/dist/img/BetaSonic2--mob.jpg" type="image/jpg">
									</picture>
								</div>
							</div>
							<!-- banner-item -->
							<div class="swiper-slide">
								<div class="banner-item">
									<picture class="banner-item__bg-thumb lazy">
										<source srcset="/template/dist/img/Aura.webp" type="image/webp">
										<img src="/template/dist/img/Aura.png" type="image/png">
									</picture>
									<picture class="banner-item__bg-thumb lazy --mob">
										<source srcset="/template/dist/img/Aura--mob.webp" type="image/webp">
										<img src="/template/dist/img/Aura--mob.jpg" type="image/jpg">
									</picture>
								</div>
							</div>
							<!-- banner-item -->
							<div class="swiper-slide">
								<div class="banner-item">
									<picture class="banner-item__bg-thumb lazy">
										<source srcset="/template/dist/img/AlphaSonic2.webp" type="image/webp">
										<img src="/template/dist/img/AlphaSonic2.png" type="image/png">
									</picture>
									<picture class="banner-item__bg-thumb lazy --mob">
										<source srcset="/template/dist/img/AlphaSonic2--mob.webp" type="image/webp">
										<img src="/template/dist/img/AlphaSonic2--mob.jpg" type="image/jpg">
									</picture>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="center-wrap flex">
					<div class="type-carusel__nav flex --align-center col --9">
						<div class="type-carusel__btns flex mr-32">
							<div class="type-carusel__btn --left swiper-button-prev mr-8">
								<div class="type-carusel__btn-icon --svg__arrow-2--left"></div>
							</div>
							<div class="type-carusel__btn --right swiper-button-next">
								<div class="type-carusel__btn-icon --svg__arrow-2--right"></div>
							</div>
						</div>
						<div class="type-carusel__pagination">
							<div class="swiper-pagination"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content__banner-bottom"></div>
	</div>
	<div class="center-wrap pt-32">
		<div class="content__wrap flex --just-space --align-stretch">
			<div class="content__brands-carousel col --12">
				<?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/brands-carousel/__brands-carousel.php'); ?>
			</div>
			<div class="content__catalog-wrap col --12 mt-48">
				<div class="catalog-items --catalog flex --align-stretch --just-space">
					<!-- catalog-item -->
					<div class="catalog-item --big col --6">
						<div class="catalog-item__wrap flex --direction-column --just-space">
							<div class="catalog-item__info">
								<div class="catalog-item__title-wrap">
									<a href="/catalog/massazhnye-kresla/" class="catalog-item__title link h3">Массажные кресла</a>
									<div class="catalog-item__products-count --p mt-4">1235 товаров</div>
								</div>
								<div class="catalog-item__desc p --xl col --3 mt-24">Широкий выбор массажных кресел на любой вкус</div>
							</div>
							<a href="/catalog/massazhnye-kresla/" class="catalog-item__more-btn btn">
								<div class="catalog-item__more-btn-icon --svg__arrow-2--right"></div>
							</a>
						</div>
						<a href="/catalog/massazhnye-kresla/" class="catalog-item__bg link">
							<picture class="catalog-item__bg-thumb lazy">
								<source srcset="/template/dist/img/catalog-chairs.webp" type="image/webp">
								<source srcset="/template/dist/img/catalog-chairs.png" type="image/png">
							</picture>
						</a>
					</div>
					<div class="catalog-items__wrap grid --temp-col-2 --gap-24 col --6">
						<!-- catalog-item -->
						<div class="catalog-item --small">
							<div class="catalog-item__wrap flex --direction-column --just-space">
								<div class="catalog-item__info">
									<div class="catalog-item__title-wrap">
										<a href="/catalog/massazhnye-nakidki/" class="catalog-item__title link h5">Массажные <br>накидки</a>
										<!-- <div class="catalog-item__products-count p --m mt-8">1235 товаров</div> -->
									</div>
								</div>
								<a href="/catalog/massazhnye-nakidki/" class="catalog-item__more-btn btn">
									<div class="catalog-item__more-btn-icon --svg__arrow-2--right"></div>
								</a>
							</div>
							<a href="/catalog/massazhnye-nakidki/" class="catalog-item__bg link">
								<picture class="catalog-item__bg-thumb lazy">
									<source srcset="/template/dist/img/catalog-mantle.webp" type="image/webp">
									<source srcset="/template/dist/img/catalog-mantle.png" type="image/png">
								</picture>
							</a>
						</div>
						<!-- catalog-item -->
						<div class="catalog-item --small">
							<div class="catalog-item__wrap flex --direction-column --just-space">
								<div class="catalog-item__info">
									<div class="catalog-item__title-wrap">
										<a href="/catalog/massazhnaye-podushki/" class="catalog-item__title link h5">Массажные <br>подушки</a>
										<!-- <div class="catalog-item__products-count p --m mt-8">1235 товаров</div> -->
									</div>
								</div>
								<a href="/catalog/massazhnaye-podushki/" class="catalog-item__more-btn btn">
									<div class="catalog-item__more-btn-icon --svg__arrow-2--right"></div>
								</a>
							</div>
							<a href="/catalog/massazhnaye-podushki/" class="catalog-item__bg link">
								<picture class="catalog-item__bg-thumb lazy">
									<source srcset="/template/dist/img/catalog-pillow.webp" type="image/webp">
									<source srcset="/template/dist/img/catalog-pillow.png" type="image/png">
								</picture>
							</a>
						</div>
						<!-- catalog-item -->
						<div class="catalog-item --small">
							<div class="catalog-item__wrap flex --direction-column --just-space">
								<div class="catalog-item__info">
									<div class="catalog-item__title-wrap">
										<a href="/catalog/inversionnye-stoly/" class="catalog-item__title link h5">Инверсионные <br>столы</a>
										<!-- <div class="catalog-item__products-count p --m mt-8">1235 товаров</div> -->
									</div>
								</div>
								<a href="/catalog/inversionnye-stoly/" class="catalog-item__more-btn btn">
									<div class="catalog-item__more-btn-icon --svg__arrow-2--right"></div>
								</a>
							</div>
							<a href="/catalog/inversionnye-stoly/" class="catalog-item__bg link">
								<picture class="catalog-item__bg-thumb lazy">
									<source srcset="/template/dist/img/catalog-bad.webp" type="image/webp">
									<source srcset="/template/dist/img/catalog-bad.png" type="image/png">
								</picture>
							</a>
						</div>
						<!-- catalog-item -->
						<div class="catalog-item --small">
							<div class="catalog-item__wrap flex --direction-column --just-space">
								<div class="catalog-item__info">
									<div class="catalog-item__title-wrap">
										<a href="/catalog/massazhery-dlya-nog/" class="catalog-item__title link h5">Массажеры <br>для ног</a>
										<!-- <div class="catalog-item__products-count p --m mt-8">1235 товаров</div> -->
									</div>
								</div>
								<a href="/catalog/massazhery-dlya-nog/" class="catalog-item__more-btn btn">
									<div class="catalog-item__more-btn-icon --svg__arrow-2--right"></div>
								</a>
							</div>
							<a href="/catalog/massazhery-dlya-nog/" class="catalog-item__bg link">
								<picture class="catalog-item__bg-thumb lazy">
									<source srcset="/template/dist/img/catalog-foot.webp" type="image/webp">
									<source srcset="/template/dist/img/catalog-foot.png" type="image/png">
								</picture>
							</a>
						</div>
					</div>
				</div>
				<a href="/catalog/" class="pagination__load-more --catalog flex --align-center --just-center col --12 mt-24">
					<i class="pagination__icon mr-12"></i>
					<span class="pagination__label">Показать еще</span>
				</a>
			</div>
			<div class="content__catalog-pagination --main col --12 mt-24">
				<?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/pagination/__pagination.php'); ?>
			</div>
			<div class="content__products-wrap col --12 flex --just-space mt-64">
				<div class="sale-tabs col --12">
					<div class="tabs">
						<div class="tabs__btns flex">
							<div class="tabs__btn --js is-active" data-tab="1"><b>Популярные</b></div>
							<div class="tabs__btn --js" data-tab="2"><b>Новинки</b></div>
							<div class="tabs__btn --js" data-tab="3"><b>Хиты</b></div>
						</div>
						<div class="tabs__blocks mt-32 flex --just-space">
							<!-- sale-tab -->
							<div class="sale-tab__carousel col --4">
								<?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/sale-carousel/__sale-carousel.php'); ?>
							</div>
							<div class="tabs__block --js --1 is-show">
								<div class="sale-tab flex --align-stretch --just-space">
									<div class="sale-tab__products-carousel col --8">
										<?php $carusel = $populars;
										include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/products-carousel/__products-carousel-sale.php'); ?>
									</div>
								</div>
							</div>
							<!-- sale-tab -->
							<div class="tabs__block --js --2">
								<div class="sale-tab flex --just-space">
									<div class="products-carousel--sale col --8">
										<?php $carusel = $news;
										include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/products-carousel/__products-carousel-sale.php'); ?>
									</div>
								</div>
							</div>
							<!-- sale-tab -->
							<div class="tabs__block --js --3">
								<div class="sale-tab flex --just-space">
									<div class="products-carousel--sale col --8">
										<?php $carusel = $hits;
										include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/products-carousel/__products-carousel-sale.php'); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="content__options-wrap col --12 mt-72">
				<?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/options/__options.php'); ?>
			</div>
			<div class="content__why-are-we col --12 mt-24">
				<?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/why-are-we/__why-are-we.php'); ?>
			</div>
			<? /*
			<div class="content__video-wrap flex --align-stretch --just-space col --12 mt-24">
				<div class="content__video-reviews col --6">
					<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/video-reviews/__video-reviews.php'); ?>
				</div>
				<div class="content__video-recall col --6">
					<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/video-recall/__video-recall.php'); ?>
				</div>
			</div>
			*/ ?>
			<div class="content__why-are-we col --12 mt-64">
				<?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/stores-carousel/__stores-carousel.php'); ?>
			</div>
			<div class="content__seo-wrap col --12 mt-80">
				<?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/seo-text/__seo-text.php'); ?>
			</div>
		</div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php'); ?>