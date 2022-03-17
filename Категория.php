<?php
	$page = '';
	$count = '';
	$pagination = '';
	if ($_GET['page']) {
		$page = '&page='.$_GET['page'];
	}
	if ($_GET['count']) {
		$count = '&count='.$_GET['count'];
	}
	$url = API.'/api/get-items.php?group_numb='.$section['group_numb'].$page.$count;
	

	if ($_GET['filter']) {
		$items = json_decode(file_get_contents(API.'/api/get-items.php?group_numb='.$section['group_numb'].'&props=true&filter='.$_GET['filter']), true);
		$items_length = count($items);
    } else {
        $items = json_decode(file_get_contents($url), true);
		// $items_length = count($items);
		$items_length = json_decode(file_get_contents(API.'/api/get-items-counts.php?group_numb='.$section['group_numb']), true);
    }
	
	$meta__title = $section['name'];
	$meta__desc = "";
	$meta__key = "";
	
	if (isset($section['is_used']) && $section['is_used'] == true) {
		$modifier   = "--banner --test-drive";
	} else {
		$modifier = "--banner";
	}

	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
<div class="content__main-wrap">
	<? if (isset($section['is_used']) && $section['is_used'] == true) { ?>
		<div class="content__page-banner <?= $modifier ?> --used">
			<div class="content__banner-wrap">
				<div class="center-wrap flex --just-space">
					<div class="content__banner-info col --5 pt-88">
						<h1 class="content__banner-title"><?=$section['head_h1']?></h1>
						<div class="content__banner-post-title h5 mt-8"><?=$section['head_desc']?></div>
						<div class="content__banner-desc --p mt-16"><?=$section['head_sub-desc']?></div>
					</div>
					<picture class="content__banner-img lazy col --7">
						<source srcset="/template/dist/img/<?=$section['head_img']?>.webp" type="image/webp">
						<img src="/template/dist/img/<?=$section['head_img']?>.png" type="image/png">
					</picture>
				</div>
			</div>
			<div class="content__banner-mask"></div>
			<div class="content__banner-bottom"></div>
		</div>
	<? } else { ?>
		<div class="content__page-banner">
			<div class="content__banner-wrap">
				<div class="center-wrap">
					<div class="content__banner-sub-wrap flex">
						<h1 class="content__banner-title"><?=$section['head_h1']?><span class="content__banner-desc p --xl"><?=$section['head_desc']?></span></h1>
					</div>
				</div>
			</div>
			<div class="content__banner-mask"></div>
			<picture class="content__banner-img lazy">
				<source srcset="/template/dist/img/<?=$section['head_img']?>.webp" type="image/webp">
				<img src="/template/dist/img/<?=$section['head_img']?>.jpg" type="image/jpg">
			</picture>
			<div class="content__banner-bottom"></div>
		</div>
	<? } ?>
	<div class="center-wrap pt-16">
		<? if (isset($section['is_used']) && $section['is_used'] == true) { ?>
			<div class="content__wrap flex --just-space --align-stretch">
				<div class="content__catalog-filter-ajax col --12">
					<div class="content__catalog-desc mt-40">
						<div class="center-wrap">
							<div class="desc-items --used flex --just-space">
								<div class="desc-item flex col --6">
									<div class="desc-item__icon-thumb flex --align-center --just-center mr-24">
										<img class="desc-item__icon lazy" data-src="/template/dist/img/store-icon.svg" alt="">
									</div>
									<div class="desc-item__wrap mt-24">
										<div class="desc-item__title h5">Выставочные образцы</div>
										<div class="desc-item__desc --p mt-12">Интернет-магазин Массажер.Маркет предлагает к покупке выставочные образцы массажного оборудования известных брендов из собственной сети магазинов со скидкой. Все образцы не имеют внешних и внутренних дефектов, находятся в идеальном состоянии и продаются с официальной гарантией с момента продажи.  Для записи на тест-драйв выберите модель, и заполните форму заявки.</div>
									</div>
								</div>
								<div class="desc-item flex col --6">
									<div class="desc-item__icon-thumb flex --align-center --just-center mr-24">
										<img class="desc-item__icon lazy" data-src="/template/dist/img/return-icon.svg" alt="">
									</div>
									<div class="desc-item__wrap mt-24">
										<div class="desc-item__title h5">Б/у массажное оборудование</div>
										<div class="desc-item__desc --p mt-12">Интернет-магазин Массажер.Маркет предлагает принятые по программе Трейд Ин массажные оборудования, которые были в употреблении, а затем прошли специализированную подготовку в сервисном центре нашего магазина! Каждое массажное оборудование, перед попаданием в продажу, наши технические специалисты проверяют на работоспособность, проводят его чистку, смазку и, при необходимости, заменяют изношенные детали. Мы гарантируем их работоспособность и высокое качество!</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="content__catalog-items col --12 mt-88">
						<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/catalog-list/__catalog-list.php'); ?>
					</div>
					<div class="content__catalog-pagination col --12 mt-0">
						<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/pagination/__pagination.php'); ?>
					</div>
				</div>
				<? if (isset($section['seo_text'])) { ?>
					<div class="content__catalog-seo col --12 mt-88">
						<?php $seo_text = $section['seo_text']; include($_SERVER['DOCUMENT_ROOT'].'/template/comp/seo-text/__seo-text.php'); ?>
					</div>
				<? } ?>
			</div>
		<? } else { ?>
			<div class="content__wrap flex --just-space --align-stretch">
				<div class="content__catalog-filters col --12">
					<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/catalog-filter/__catalog-filter.php'); ?>
				</div>
				<div class="catalog-list__catalog-head col --12 mt-32">
					<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/catalog-list/__catalog-list-head.php'); ?>
				</div>
				<div class="catalog-list__blog-wrap col --12 mt-32">
					<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/blog/__blog-items.php'); ?>
				</div>
				<div class="content__catalog-filter-ajax col --12">
					<div class="content__catalog-items col --12 mt-32">
						<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/catalog-list/__catalog-list.php'); ?>
					</div>
					<div class="content__catalog-pagination col --12 mt-0">
						<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/pagination/__pagination.php'); ?>
					</div>
				</div>
				<? if (isset($section['seo_text'])) { ?>
					<div class="content__catalog-seo col --12 mt-96">
						<?php $seo_text = $section['seo_text']; include($_SERVER['DOCUMENT_ROOT'].'/template/comp/seo-text/__seo-text.php'); ?>
					</div>
				<? } ?>
			</div>
		<? } ?>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>