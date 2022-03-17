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
	$items_length = $brand_length;
	$items = $brand;
	$meta__title = $code;
	$meta__desc = "";
	$meta__key = "";
	$modifier   = "--search";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
<div class="content__main-wrap pt-40">
	<div class="content__head">
		<div class="center-wrap">
			<div class="content__head-wrap">
				<div class="content__head-title flex --align-center">
					<h1 class="content__title h1 <?= $modifier ?> mr-32"><b><?=$code?></b></h1>
					<div class="content__post-title-wrap">
						<div class="content__post-title-label p --xl">Найденно</div>
						<div class="content__post-title-min <?= $modifier ?>"><b><?=$items_length?> товаров</b></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="center-wrap pt-16">
		<div class="content__wrap flex --just-space --align-stretch">
			<? /*
			<div class="content__catalog-filters col --12">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/catalog-filter/__catalog-filter.php'); ?>
			</div>
			*/ ?>
			<div class="content__catalog-items col --12 mt-32">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/catalog-list/__catalog-list.php'); ?>
			</div>
			<? /*
			<div class="content__catalog-pagination col --12 mt-0">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/pagination/__pagination.php'); ?>
			</div>
			*/ ?>
		</div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>