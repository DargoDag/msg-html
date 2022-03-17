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
            foreach ($item as $key => $i) {
                array_push($data, $i);
            }
        }
    }
}
if ($_GET['code']) {
    function filter_brand ($item) {
        if ($item['code'] === $_GET['code'] ){
            return true;
        } else {
            return false;
        }
	}
	$data = array_filter($data, 'filter_brand');
    foreach ($data as $key => $item) {
        $data = $item;
    }
}
if ($_GET['id']) {
    function filter_brand ($item) {
        if ($item['id'] == $_GET['id'] ){
            return true;
        } else {
            return false;
        }
	}
	$data = array_filter($data, 'filter_brand');
    foreach ($data as $key => $item) {
        $data = $item;
    }
}
 
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
echo json_encode($data);