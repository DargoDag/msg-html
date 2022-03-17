<?php 
	$meta__title = "404";
	$meta__desc  = "";
	$meta__key   = "";
	$modifier   = "--404";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<div class="search-wrapper mx-24">
	<div class="header-middle__search col --7 --mob-search mt-64">
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
<div class="content__main-wrap pt-128">
	<div class="center-wrap">		
		<div class="content__head">
			<div class="content__search-wrap flex --direction-column --align-center --just-center">
				<div class="content__search-icon">
					<?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/search.svg'); ?>
				</div>
				<div class="content__search-desc h4 mt-24">К сожалению, ничего не найдено по запросу</div>
				<div class="content__search-value">«<?=$_GET['search']?>»</div>
			</div>
		</div>
		<div class="content__wrap mt-56">
			<div class="content__products-carousel col --12">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/products-carousel/__products-carousel.php'); ?>
			</div>
		</div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>