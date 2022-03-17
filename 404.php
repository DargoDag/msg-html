<?php 
	$meta__title = "404";
	$meta__desc  = "Страница не найдена";
	$meta__key   = "";
	$modifier   = "";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<div class="content__main-wrap --order-confirm pt-128">
	<div class="center-wrap">
		<div class="content__head">
			<div class="content__search-wrap2 pb-64 flex --direction-column --align-center --just-center">
				<h1 class="content__404-page h1 mt-16"><b>404</b></h1>
				<div class="content__search-title h2 mt-16"><b>Страница не найдена</b></div>
				<div class="content__search-desc --p mt-16 col --6">Вы нашли Massager Market, но не нашли страницу. Попробуйте начать с главной страницы сайта!</div>
				<div class="content__btns-wrap flex mt-40">
					<a href="/" class="content__on-main-btn btn --fill-1 p --l mr-12">На главную страницу</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>