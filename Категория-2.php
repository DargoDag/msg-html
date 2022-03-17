<?php 
	$meta__title = "";
	$meta__desc  = "";
	$meta__key   = "";
	$modifier   = "--banner";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
<div class="content__main-wrap">
	<div class="content__page-banner">
		<div class="content__banner-wrap">
			<div class="center-wrap">
				<div class="content__banner-sub-wrap flex">
					<h1 class="content__banner-title">Массажные <br>кресла<span class="content__banner-desc p --xl">Роскошь, которую вы можете <br>себе позволить</span></h1>
				</div>
			</div>
		</div>
		<div class="content__banner-mask"></div>
		<picture class="content__banner-img lazy">
			<source srcset="/template/dist/img/category-banner.webp" type="image/webp">
			<img src="/template/dist/img/category-banner.jpg" type="image/jpg">
		</picture>
		<div class="content__banner-bottom"></div>
	</div>
	<div class="center-wrap pt-16">
		<div class="content__wrap flex --just-space --align-stretch">
			<div class="content__catalog-filters col --12">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/catalog-filter/__catalog-filter.php'); ?>
			</div>
			<div class="catalog-list__blog-wrap mt-32">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/blog/__blog-items.php'); ?>
			</div>
			<div class="content__catalog-items col --12 mt-32">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/catalog-list/__catalog-list-2.php'); ?>
			</div>
			<div class="content__catalog-pagination col --12 mt-96">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/pagination/__pagination.php'); ?>
			</div>
			<div class="content__catalog-seo col --12 mt-96">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/seo-text/__seo-text.php'); ?>
			</div>
		</div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>