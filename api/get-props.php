<?php
if ($_GET['group_numb']) {
    $name = $_GET['group_numb'];
} else {
    $name = '*';
}
$data = [];
foreach( glob($_SERVER['DOCUMENT_ROOT'].'/json/catalog/items/'.$name.'.json') as $file ){
    $item = [];
    if ($file_content = file_get_contents($file)) {
        if ($item = json_decode($file_content, true)) {
            if ($_GET['type'] == 'price') {
                $del = [ 
                    'id' => '',
                    'code' => '',
                    'article' => '',
                    'name' => '',
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
            } else if ($_GET['type'] == 'brands') {
                $del = [ 
                    'id' => '',
                    'code' => '',
                    'article' => '',
                    'name' => '',
                    'description' => '',
                    'group_numb' => '',
                    'category_link' => '',
                    'in_stock' => '',
                    'img' => '',
                    'id_subcategory' => '',
                    'price' => '',
                    'country' => '',
                    'price_per' => '',
                    'marker' => '',
                    'sales' => '',
                    'sales_date_for' => '',
                    'sales_date_to' => '',
                    'props' => '',
                ];
            } else if ($_GET['type'] == 'country') {
                $del = [ 
                    'id' => '',
                    'code' => '',
                    'article' => '',
                    'name' => '',
                    'description' => '',
                    'group_numb' => '',
                    'category_link' => '',
                    'in_stock' => '',
                    'img' => '',
                    'id_subcategory' => '',
                    'price' => '',
                    'manufacture' => '',
                    'price_per' => '',
                    'marker' => '',
                    'sales' => '',
                    'sales_date_for' => '',
                    'sales_date_to' => '',
                    'props' => '',
                ];
            } else if ($_GET['type'] == 'colors') {
                $del = [ 
                    'id' => '',
                    'code' => '',
                    'article' => '',
                    'name' => '',
                    'description' => '',
                    'group_numb' => '',
                    'category_link' => '',
                    'in_stock' => '',
                    'img' => '',
                    'id_subcategory' => '',
                    'price' => '',
                    'manufacture' => '',
                    'price_per' => '',
                    'marker' => '',
                    'sales' => '',
                    'sales_date_for' => '',
                    'sales_date_to' => '',
                    'country' => '',
                ];
            } else {
                $del = [ 
                ];
            }
            foreach ($item as $key => $i) {
                $i = array_diff_key($i, $del);
                array_push($data, $i);
            }
        }
    }
}
if ($_GET['type'] == 'price') {
    $price = array_column($data, 'price');
    array_multisort($price, SORT_ASC, $data);
    $min = $price[0];
    $max = $price[count($price) - 1];
    $data = [
        "min" => $min,
        "max" => $max,
    ];
}
if ($_GET['type'] == 'brands') {
    $new_arr = [];
    foreach ($data as $key => $el) {
        if ($el['manufacture'] != null) {
            array_push($new_arr, trim($el['manufacture']));
        }
    }
    $claer = [];
    $unique = array_unique($new_arr);
    foreach ($unique as $key => $el) {
        array_push($claer, $el);
    }
    $data = $claer;
}
if ($_GET['type'] == 'country') {
    $new_arr = [];
    foreach ($data as $key => $el) {
        if ($el['country'] != null) {
            array_push($new_arr, trim($el['country']));
        }
    }
    $claer = [];
    $unique = array_unique($new_arr);
    foreach ($unique as $key => $el) {
        array_push($claer, $el);
    }
    $data = $claer;
}
if ($_GET['type'] == 'colors') {
    $new_arr = [];
    foreach ($data as $key => $el) {
        foreach ($el['props'] as $key => $prop) {
            if ($prop['name'] == "Цвет") {
                array_push($new_arr, trim($prop['value']));
            }
        }
    }
    $claer = [];
    $unique = array_unique($new_arr);
    foreach ($unique as $key => $el) {
        array_push($claer, $el);
    }
    $data = $claer;
}
if ($_GET['type'] == 'areas') {
    $new_arr = [];
    foreach ($data as $key => $el) {
        foreach ($el['props'] as $key => $prop) {
            if ($prop['name'] == "Область применения массажера" || $prop['name'] == 'Область массажа') {
                if (is_array($prop['value'])){
                    $explode = explode(',', $prop['value'][0]);
                    foreach ($explode as $key => $ex) {
                        array_push($new_arr, trim($ex));
                    }
                } else {
                    array_push($new_arr, trim($prop['value']));
                }
            }
        }
    }
    $claer = [];
    $unique = array_unique($new_arr);
    foreach ($unique as $key => $el) {
        if ($el != ' ') {
            array_push($claer, $el);
        }
    }
    $data = $claer;
}
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
echo json_encode($data);