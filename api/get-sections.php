<?php
$data = [];
foreach(glob($_SERVER['DOCUMENT_ROOT'].'/json/catalog/sections.json') as $file ){
    $item = [];
    if ($file_content = file_get_contents($file)) {
        if ($item = json_decode($file_content, true)) {
            $data = $item;
        }
    }
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
    foreach ($data as $key => $item) {
        $data = $item;
    }
}
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
echo json_encode($data);