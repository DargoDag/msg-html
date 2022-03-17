<?php 
    $api_url = 'http://'.$_SERVER['HTTP_HOST'];
    define("API", $api_url);
    $fave_items = [];
    $fave = [];
    if ($_COOKIE['fave']) {
        $ids = json_decode($_COOKIE['fave'], true);
        $ids = json_encode($ids);
        $url = API.'/api/get-items.php?ids='.$ids;
        $fave_items = json_decode(file_get_contents($url), true);
        $fave = json_decode($_COOKIE['fave']);
        $total = [
            "count" => count($fave_items),
        ];
    }
?>
<? 
    if ($_GET['view'] == 'total') { 
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        echo json_encode($total);
    }
?>
<? if ($_GET['view'] == 'fave') { ?>
    <? foreach ($fave_items as $key => $item) {?>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/catalog-list/item.php'); ?>
    <? } ?>
<? } ?>
 