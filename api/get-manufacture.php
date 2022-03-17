<?php
$data = [];
$all = [];

foreach( glob($_SERVER['DOCUMENT_ROOT'].'/json/catalog/items/*.json') as $file ){
    $item = [];
    if ($file_content = file_get_contents($file)) {
        if ($item = json_decode($file_content, true)) {
            $del = [ 
                'id' => '',
                'article' => '',
                'name' => '',
                'price' => '',
                'description' => '',
                'group_numb' => '',
                'category_link' => '',
                'in_stock' => '',
                'img' => '',
                'id_subcategory' => '',
                'country' => '',
                'price_per' => '',
                'marker' => '',
                'sales' => '',
                'sales_date_for' => '',
                'sales_date_to' => '',
                'props' => '',
            ];
            foreach ($item as $key => $i) {
                $i = array_diff_key($i, $del);
                $trim = trim($i['manufacture']);
                array_push($all, $trim);
            }
        }
    }
}
$unique = array_unique($all);
foreach ($unique as $key => $u_item) {
    $counter = 0;
    foreach ($all as $key => $itm) {
        if ($u_item == $itm) {
            $counter ++;
        }
    }
    $this_item = [
        "name" => $u_item,
        "count" => $counter,
    ];
    if ($u_item != '') {
        array_push($data, $this_item);
    }
}
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
echo json_encode($data);