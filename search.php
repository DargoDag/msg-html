<?php 
	$meta__title = "Поиск";
	$meta__desc  = "";
	$meta__key   = "";
	$modifier   = "--search";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<div class="content__main-wrap pt-24 <?= $modifier ?>">
	<div class="center-wrap">
		<!-- <div class="header-middle__search col --7 --mob-search">
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
        </div> -->
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>