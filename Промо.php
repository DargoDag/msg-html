<?php 
	$section_code = strtolower(str_replace('https://tiu.ru/', '', $product['category_link']));
	$recomendation = json_decode(file_get_contents(API.'/api/get-items.php?group_numb='.$section['group_numb'].'&random=true'), true);

	$meta__title = "Промо";
	$meta__desc  = "";
	$meta__key   = "";
	$modifier   = "--banner";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
<div class="content__main-wrap --promo">
	<div class="content__page-banner --promo">
		<div class="content__banner-wrap">
			<div class="center-wrap">
				<div class="content__banner-sub-wrap">
					<h1 class="content__banner-title">Топ-9 недорогих кресел по версии специалистов магазина Массажер-Маркет</h1>
                </div>
			</div>
		</div>
		<picture class="content__banner-img lazy">
			<source srcset="/template/dist/img/promo-banner.webp" type="image/webp">
			<img src="/template/dist/img/promo-banner.jpg" type="image/jpg">
		</picture>
		<div class="content__banner-bottom"></div>
	</div>
	<div class="center-wrap --promo --promo-new pt-40">
		<div class="promo-title h5">
			Сегодня массажное кресло является не только предметом роскоши  Имея богатый опыт, и большое количество обратной связи от клиентов, наша команда  подготовила обзор бюджетных автоматических массажных кресел, на которые стоит обратить  внимание при выборе. Кресла в ценовом диапазоне от 150 000 до 350 000 рублей, с  достаточным набором функционала, чтобы удовлетворить взыскательного покупателя. На все  представленные кресла распространяется фирменная гарантия от производителя.
		</div>			
		<div class="content__line col --12 mt-48"></div>
		<div class="content__promo-wrap --promo col --12 mt-72">
			<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/promo-carusel/__promo-carusel.php'); ?>
		</div>



		<div class="content__wrap flex --just-space --alignstretch-">
			<div class="content__promo-wrap --promo col --12 mt-72">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/promo-new/__promo-new.php'); ?>
			</div>
		</div>



		<div class="content__carosusel-wrap col --12 mt-128">
			<?php 
				$more_btn = '/catalog/'.$section_code.'/';
				$carusel = $recomendation;
				include($_SERVER['DOCUMENT_ROOT'].'/template/comp/products-carousel/__products-carousel.php');
			?>
		</div>
		
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>