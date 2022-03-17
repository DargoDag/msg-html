<?php   
    $cart = json_decode($_COOKIE['cart'], true);
    if (count($cart) > 0) {
        require($_SERVER['DOCUMENT_ROOT'].'/Корзина.php');
    } else {
        require($_SERVER['DOCUMENT_ROOT'].'/Результат-поиска-пустой__корзина.php');
    }
?>