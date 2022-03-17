<?php 
	$meta__title = "Результат поиска";
	$meta__desc  = "";
	$meta__key   = "";
	$modifier   = "--search";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
<div class="content__main-wrap pt-32">
	<div class="center-wrap">
		<div class="search-wrapper">
			<div class="header-middle__search col --7 --mob-search mb-32">
				<div class="header-middle__search-wrap">
					<form action="/search/" method="get" name="search" class="header-middle__form-wrap">
						<input name="search" class="header-middle__search-input input" name="header_search" type="text" placeholder="Поиск по товарам ..." value="<?=$_GET['search']?>">
						<div class="header-middle__select-wrap col --2">
							<select name="group_numb" class="header-middle__search-select select --svg__arrow">
								<option value="*">Все категории</option>
								<? foreach ($sections_list as $key => $item) { ?>
									<option value="<?=$item['group_numb']?>"><?=$item['name']?></option>
								<? } ?>
							</select>
						</div>
						<button type="send" class="header-middle__search-btn btn --svg__search col --1"></button>
					</form>
				</div>
			</div>
		</div>
		<div class="content__head">
			<div class="content__head-title flex --align-center">
				<h1 class="content__title h1 <?= $modifier ?> mr-32"><b><?=$_GET['search']?></b></h1>
				<div class="content__post-title-wrap">
					<div class="content__post-title-label p --xl">Найденно</div>
					<div class="content__post-title-min <?= $modifier ?>"><b><?=count($search_result)?> ед.</b></div>
				</div>
			</div>
		</div>
		<div class="content__wrap mt-48">
			<div class="content__catalog-filters col --12">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/catalog-filter/__catalog-filter.php'); ?>
			</div>
			<div class="content__search-items flex --just-space --align-stretch col --12 mt-48">
				<div class="catalog-list">
					<div class="catalog-list__products-items grid --temp-col-4">
						<? foreach ($search_result as $key => $item) {?>
							<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/catalog-list/item.php'); ?>
						<? } ?>
					</div>
				</div>
				<? /* 
				<div class="sale-item --single-banner --big col --6">
					<div class="sale-item__bg">
						<picture class="sale-item__bg-thumb lazy">
							<source srcset="/template/dist/img/sale-banner--1.webp" type="image/webp">
							<source srcset="/template/dist/img/sale-banner--1.jpg" type="image/jpg">
						</picture>
					</div>
				</div>
				<div class="product-item col --3">
					<div class="product-item__sales-tag">Акция</div>
					<div class="product-item__new-tag">Новинка</div>
					<div class="product-item__compare-btn btn --svg__compare"></div>
					<div class="product-item__favor-btn btn --svg__favor"></div>
					<div class="product-item__cover-carousel">
						<div class="js-swiper__product type-carusel">
							<div class="type-carusel__swiper">
								<div class="type-carusel__btn --left --svg__carusel-arrow-dark--left swiper-button-prev --product"></div>
								<div class="swiper-container --product">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<picture class="product-item__cover-img lazy">
												<source srcset="/template/dist/img/chair-1.webp" type="image/webp">
												<source srcset="/template/dist/img/chair-1.png" type="image/png">
											</picture>
										</div>
										<div class="swiper-slide">
											<picture class="product-item__cover-img lazy">
												<source srcset="/template/dist/img/chair-1.webp" type="image/webp">
												<source srcset="/template/dist/img/chair-1.png" type="image/png">
											</picture>
										</div>
										<div class="swiper-slide">
											<picture class="product-item__cover-img lazy">
												<source srcset="/template/dist/img/chair-1.webp" type="image/webp">
												<source srcset="/template/dist/img/chair-1.png" type="image/png">
											</picture>
										</div>
									</div>
								</div>
								<div class="type-carusel__btn --right --svg__carusel-arrow-dark--right swiper-button-next --product"></div>
							</div>
							<div class="type-carusel__pagination">
								<div class="swiper-pagination --product"></div>
							</div>
						</div>
					</div>
					<div class="product-item__desc mt-20">
						<div class="product-item__head flex --align-center --just-space">
							<div class="product-item__info flex --align-center">
								<div class="product-item__articul mr-14 p --m">Арт: </div>
								<div class="product-item__availability p --m">В наличии</div>
							</div>
							<div class="product-item__rating flex">
								<div class="rate flex mr-8">
									<div id="star5" class="rate__icon is-active"></div>
									<div id="star4" class="rate__icon is-active"></div>
									<div id="star3" class="rate__icon is-active"></div>
									<div id="star2" class="rate__icon"></div>
									<div id="star1" class="rate__icon"></div>
								</div>
								<div class="rate__count p --m">(16)</div>
							</div>
						</div>
						<div class="product-item__name-wrap mt-8">
							<div class="product-item__name">Casada SkyLiner 2</div>
							<div class="product-item__services flex --align-center mt-4">
								<div class="product-item__demo flex --align-center mr-16">
									<div class="product-item__demo-icon --svg__demo mr-6"></div>
									<div class="product-item__demo-label p --m">Демо образец</div>
								</div>
								<div class="product-item__trade flex --align-center">
									<div class="product-item__trade-icon --svg__trade mr-6"></div>
									<div class="product-item__trade-label p --m">Трейд-ин</div>
								</div>
							</div>
						</div>
						<div class="product-item__price-wrap mt-12">
							<div class="product-item__price-sub-wrap flex --align-center">
								<div class="product-item__price mr-12">650 000 Р</div>
								<div class="product-item__old-price --p">720 000 Р</div>
							</div>
							<div class="product-item__credit flex --align-center">
								<div class="product-item__credit-icon --svg__credit mr-8"></div>
								<div class="product-item__credit-label p --m"><b>0/0/12</b> (рассрочка)</div>
							</div>
						</div>
						<div class="product-item__add-btn btn --fill-1 --svg__cart-add"></div>
					</div>
				</div>
				*/ ?>
			</div>
		</div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>