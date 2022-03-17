<?php   
    $search = str_replace(" ", "%20", $_GET['search']);
    $search_result = json_decode(file_get_contents(API.'/api/get-items.php?search='.$search.'&group_numb='.$_GET['group_numb']), true);
    if (count($search_result) > 0) {
        require($_SERVER['DOCUMENT_ROOT'].'/Результат-поиска.php');
    } else {
        require($_SERVER['DOCUMENT_ROOT'].'/Пустой-результат-поиска.php');
    }
?>
