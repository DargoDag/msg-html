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
            if ($_GET['props'] == true) {
                $del = [ 
                    'description' => '',
                ];
            } else {
                $del = [ 
                    'props' => '',
                    'description' => '',
                ];
            }
            foreach ($item as $key => $i) {
                $i = array_diff_key($i, $del);
                array_push($data, $i);
            }
        }
    }
}
if ($_GET['manufacture']) {
    function filter_brand ($item) {
        if ($item['manufacture'] === $_GET['manufacture'] ){
            return true;
        } else {
            return false;
        }
	}
	$data = array_filter($data, 'filter_brand');
}
if ($_GET['code']) {
    function filter_code ($item) {
        if ($item['code'] === $_GET['code'] ){
            return true;
        } else {
            return false;
        }
	}
	$data = array_filter($data, 'filter_code');
}
if ($_GET['page'] && $_GET['count']) {
    if ( $_GET['page'] == 1) {
        $start = 0;
    } else {
        $start = ($_GET['page'] - 1) * $_GET['count'];
    }
    $end = $_GET['count'];
} else {
    $start = 0;
    $end = 12;
}
if ($_GET['random'] == true) {
    if (count($data) >= 12) {
        $keys = array_rand($data, 12);
    } else {
        $keys = array_rand($data, count($data));
    }
    $new_data = [];
    foreach ($keys as $key => $item) {
        array_push($new_data, $data[$item]);
    }

    $data = $new_data;
} else if ($_GET['ids']){
    $ids = json_decode($_GET['ids']);
    $new_data = [];
    foreach ($data as $key => $item) {
        foreach ($ids as $key => $id) {
            if ($item['id'] == $id) {
                array_push($new_data, $item);
            }
        }
    }
    $data = $new_data;
} else if ($_GET['search']){
    $words = $_GET['search'];
    $new_arr = [];
    foreach ($data as $key => $el) {
        // if (strpos(strtolower($el['name']), strtolower($_GET['search'])) !== false){
        if (stripos($el['name'], $words) !== false){
            array_push($new_arr, $el);
        }
    }
    $data = $new_arr;
} else {
    if ($_GET['filter']) {
        $filter_data = [];
        $filter_arr = json_decode($_GET['filter']);
        if (count($filter_arr) > 0) {
            $price_min = null;
            $price_max = null;
            $countries = null;
            $brands = null;
            $areas = null;
            $scopes = null;
            $colors = null;

            foreach ($filter_arr as $key => $filter_item) {
                if ($filter_item->type == 'price') {
                    $price_min = $filter_item->values->min;
                    $price_max = $filter_item->values->max;
                }
                if ($filter_item->type == 'brands') {
                    $brands = $filter_item->values;
                }
                if ($filter_item->type == 'colors') {
                    $colors = $filter_item->values;
                }
                if ($filter_item->type == 'areas') {
                    $areas = $filter_item->values;
                }
                if ($filter_item->type == 'scopes') {
                    $scope = $filter_item->values;
                }
                if ($filter_item->type == 'countries') {
                    $countries = $filter_item->values;
                }
            }

            $filter_data = array_filter($data, function ($el) use ($price_min, $price_max, $countries, $brands, $areas, $colors, $scope){
                if ($price_max == 0){
                    $price = true;
                } else {
                    $price = $el["price"] >= $price_min && $el['price'] <= $price_max;
                }

                if ($countries == null) {
                    $country = true;
                } else {
                    $country = in_array($el['country'], $countries);
                }

                if ($brands == null) {
                    $brand = true;
                } else {
                    $brand = in_array($el['manufacture'], $brands);
                }

                if ($areas == null) {
                    $area = true;
                } else {
                    foreach ($el['props'] as $key => $prop) {
                        if ($prop['name'] == 'Область применения массажера' || $prop['name'] == 'Область массажа') {
                            $this_key = $key;
                        }
                    }
                    $area = strpos(strtolower($el['props'][$this_key]['value'][0]), strtolower($areas[0])) !== false;
                }

                if ($colors == null) {
                    $color = true;
                } else {
                    foreach ($el['props'] as $key => $prop) {
                        if ($prop['name'] == 'Цвет' || $prop['name'] == 'Цвет корпуса') {
                            $this_key = $key;
                        }
                    }
                    $color = in_array($el['props'][$this_key]['value'], $colors);
                }

                if ($scopes == null) {
                    $scope = true;
                } else {
                    foreach ($el['props'] as $key => $prop) {
                        if ($prop['name'] == 'Область применения') {
                            $this_key = $key;
                        }
                    }
                    $scope = in_array($el['props'][$this_key]['value'], $scopes);
                }

                return ($price && $country && $brand && $area && $color && $scope);
            });
        }
        $data = $filter_data;
    } else {
        if (isset($_GET['all']) && $_GET['all'] == true) {
            $data = $data;
        } else {
            $data = array_slice($data, $start, $end);
        }
    }
}
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
echo json_encode($data);    