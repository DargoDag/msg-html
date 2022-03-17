<?php 
	$section_code = strtolower(str_replace('https://tiu.ru/', '', $product['category_link']));
	$url = API.'/api/get-items.php?group_numb='.$section['group_numb'].'&random=true';
	$recomendation = json_decode(file_get_contents($url), true);
	if ($_COOKIE['viewed']) {
		$viewed = unserialize($_COOKIE['viewed']);
	} else {
		$viewed = [];
	}
	array_push($viewed, $product['id']);
	setcookie('viewed', serialize(array_unique($viewed)), time() + ((86400 * 30) * 7), "/");
 
	$meta__title = $product['name'];
	$meta__desc = "";
	$meta__key = "";
	$modifier = "";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
 
?>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
<div class="content__main-wrap">
	<div class="center-wrap pt-16">
		<div class="content__wrap flex --just-space --align-stretch">
			<div class="content__promo-wrap col --12">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/promo/__promo.php'); ?>
			</div>
			<div class="content__desc-wrap col --12 mt-40">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/product-desc/__product-desc.php'); ?>
			</div>
			<div class="content__carousel-wrap col --12 mt-128">
				<?php 
					$more_btn = '/catalog/'.$section_code.'/';
					$carusel = $recomendation;
					include($_SERVER['DOCUMENT_ROOT'].'/template/comp/products-carousel/__products-carousel.php');
				?>
			</div>
			<div class="content__line col --12 mt-48"></div>
			<div class="content__carosusel-wrap col --12 mt-56">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/products-carousel/__products-carousel-viewed.php'); ?>
			</div>
		</div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>