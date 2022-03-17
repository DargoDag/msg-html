<? if (isset($items)) { ?>
    <div class="catalog-list">
        <? if ($_COOKIE['products-view'] && $_COOKIE['products-view'] == 'list' && $carousel !== true ) { ?>
            <div class="catalog-list__products-items --list-view grid --temp-col-4">
                <? foreach ($items as $key => $item) {?>
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/catalog-list/item.php'); ?>
                <? } ?>
            </div>
        <? } else { ?>
            <div class="catalog-list__products-items grid --temp-col-4">
                <? foreach ($items as $key => $item) {?>
                    <?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/catalog-list/item.php'); ?>
                <? } ?>
            </div>
        <? } ?>
    </div>
<? } ?>