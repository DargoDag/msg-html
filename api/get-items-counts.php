<?php
if ($_GET['group_numb']) {
    $name = $_GET['group_numb'];
} else {
    $name = '*';
}
$data = [];
$data = [];
foreach( glob($_SERVER['DOCUMENT_ROOT'].'/json/catalog/items/'.$name.'.json') as $file ){
    $item = [];
    if ($file_content = file_get_contents($file)) {
        if ($item = json_decode($file_content, true)) {
            $del = [ 
                'article' => '',
                'name' => '',
                'price' => '',
                'description' => '',
                'group_numb' => '',
                'category_link' => '',
                'in_stock' => '',
                'img' => '',
                'id_subcategory' => '',
                'manufacture' => '',
                'country' => '',
                'price_per' => '',
                'marker' => '',
                'sales' => '',
                'sales_date_for' => '',
                'sales_date_to' => '',
                'props' => '',
            ];
            $item = array_diff_key($item, $del);
        }
    }
    foreach ($item as $key => $i) {
        array_push($data, $i);
    }
}
header('Access-Control-Allow-Origin: *');
echo count($data);
