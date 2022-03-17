<?php
$api_url = 'http://'.$_SERVER['HTTP_HOST'];
define("API", $api_url);


require($_SERVER['DOCUMENT_ROOT'].'/Route.php');
use Steampixel\Route;


// Статика
Route::add('/', function() {
    require($_SERVER['DOCUMENT_ROOT'].'/Главная.php');
});
Route::add('/shops', function() {
    $breadcrumbs = [
        [
            "name"=>"Магазины",
            "link"=> null,
        ],
    ];
    require($_SERVER['DOCUMENT_ROOT'].'/Магазины.php');
});
Route::add('/thanks', function() {
    require($_SERVER['DOCUMENT_ROOT'].'/Спасибо-за-заказ.php');
});
Route::add('/delivery', function() {
    $breadcrumbs = [
        [
            "name"=>"Доставка и оплата",
            "link"=> null,
        ],
    ];
    require($_SERVER['DOCUMENT_ROOT'].'/Доставка-и-оплата.php');
});
Route::add('/service', function() {
    $breadcrumbs = [
        [
            "name"=>"Гарантии и сервис",
            "link"=> null,
        ],
    ];
    require($_SERVER['DOCUMENT_ROOT'].'/Гарантии-и-сервис.php');
});
Route::add('/contacts', function() {
    $breadcrumbs = [
        [
            "name"=>"Контакты",
            "link"=> null,
        ],
    ];
    require($_SERVER['DOCUMENT_ROOT'].'/Контакты.php');
});
Route::add('/login', function() {
    $breadcrumbs = [
        [
            "name"=>"Авторизация",
            "link"=> null,
        ],
    ];
    require($_SERVER['DOCUMENT_ROOT'].'/Авторизация.php');
});
Route::add('/trade-in', function() {
    $breadcrumbs = [
        [
            "name"=>"Трейд-ин",
            "link"=> null,
        ],
    ];
    require($_SERVER['DOCUMENT_ROOT'].'/Трейд-ин.php');
});
Route::add('/test-drive', function() {
    $breadcrumbs = [
        [
            "name"=>"Тест драйв",
            "link"=> null,
        ],
    ];
    require($_SERVER['DOCUMENT_ROOT'].'/Тест-драйв.php');
});
Route::add('/about', function() {
    $breadcrumbs = [
        [
            "name"=>"О магазине",
            "link"=> null,
        ],
    ];
    require($_SERVER['DOCUMENT_ROOT'].'/О-магазине.php');
});
Route::add('/jobs', function() {
    $breadcrumbs = [
        [
            "name"=>"Вакансии",
            "link"=> null,
        ],
    ];
    require($_SERVER['DOCUMENT_ROOT'].'/Вакансии.php');
});
// Route::add('/blog', function() {
//     $breadcrumbs = [
//         [
//             "name"=>"Блог",
//             "link"=> null,
//         ],
//     ];
//     require($_SERVER['DOCUMENT_ROOT'].'/Блог.php');
// });
Route::add('/faq', function() {
    $breadcrumbs = [
        [
            "name"=>"Ответы на вопросы",
            "link"=> null,
        ],
    ];
    require($_SERVER['DOCUMENT_ROOT'].'/Ответы-на-вопросы.php');
});
Route::add('/sales', function() {
    $breadcrumbs = [
        [
            "name"=>"Акции",
            "link"=> null,
        ],
    ];
    require($_SERVER['DOCUMENT_ROOT'].'/Акции.php');
});
Route::add('/installment', function() {
    $breadcrumbs = [
        [
            "name"=>"Рассрочка",
            "link"=> null,
        ],
    ];
    require($_SERVER['DOCUMENT_ROOT'].'/Рассрочка.php');
});
Route::add('/catalog', function() {
    $breadcrumbs = [
        [
            "name"=>"Каталог",
            "link"=> null,
        ],
    ];
    $counts = file_get_contents(API.'/api/get-items-counts.php');
    require($_SERVER['DOCUMENT_ROOT'].'/Каталог.php');
});
Route::add('/cart', function() {
    $breadcrumbs = [
        [
            "name"=>"Корзина",
            "link"=> null,
        ],
    ];
    require($_SERVER['DOCUMENT_ROOT'].'/cart.php');
});
Route::add('/fave', function() {
    $breadcrumbs = [
        [
            "name"=>"Избранное",
            "link"=> null,
        ],
    ];
    require($_SERVER['DOCUMENT_ROOT'].'/Избранное.php');
});
Route::add('/search', function() {
    $breadcrumbs = [
        [
            "name"=>"Поиск",
            "link"=> null,
        ],
    ];
    require($_SERVER['DOCUMENT_ROOT'].'/Поиск.php');
});

// Бренды
Route::add('/brands', function() {
    $breadcrumbs = [
        [
            "name"=>"Бренды",
            "link"=> null,
        ],
    ];
    $counts = file_get_contents(API.'/api/get-items-counts.php');
    require($_SERVER['DOCUMENT_ROOT'].'/Бренды.php');
});
Route::add('/brands/([a-z-0-9-]*)', function($code) {
    $brand = json_decode(file_get_contents(API.'/api/get-items.php?manufacture='.$code.'&all=true'), true);
    $brand_length = count($brand);
    if ($brand_length > 0) {
        $breadcrumbs = [
            [
                "name"=>"Бренды",
                "link"=> '/brands/',
            ],
            [
                "name"=> $code,
                "link"=> null,
            ],
        ];
        require($_SERVER['DOCUMENT_ROOT'].'/Бренд.php');
    } else {
        header('HTTP/1.0 404 Not Found');
        require($_SERVER['DOCUMENT_ROOT'].'/404.php');
    }
}, 'get');

// Каталог
Route::add('/catalog/([a-z-0-9-]*)', function($code) {
    $section = json_decode(file_get_contents(API.'/api/get-sections.php?code='.$code), true);
    if (isset($section['group_numb'])){
        $breadcrumbs = [
            [
                "name"=>"Каталог",
                "link"=> '/catalog/',
            ],
            [
                "name"=> $section['name'],
                "link"=> null,
            ],
        ];
        $filter_prices = json_decode(file_get_contents(API.'/api/get-props.php?type=price&group_numb='.$section['group_numb']), true);
        $filter_brands = json_decode(file_get_contents(API.'/api/get-props.php?type=brands&group_numb='.$section['group_numb']), true);
        $filter_country = json_decode(file_get_contents(API.'/api/get-props.php?type=country&group_numb='.$section['group_numb']), true);
        $filter_colors = json_decode(file_get_contents(API.'/api/get-props.php?type=colors&group_numb='.$section['group_numb']), true);
        $filter_areas = json_decode(file_get_contents(API.'/api/get-props.php?type=areas&group_numb='.$section['group_numb']), true);
        $filter_scopes = json_decode(file_get_contents(API.'/api/get-props.php?type=scope&group_numb='.$section['group_numb']), true);
        require($_SERVER['DOCUMENT_ROOT'].'/Категория.php');
    } else {
        header('HTTP/1.0 404 Not Found');
        require($_SERVER['DOCUMENT_ROOT'].'/404.php');
    }
}, 'get');
Route::add('/catalog/([a-z-0-9-]*)/([a-z-0-9-]*)', function($code, $product_code) {
    $section = json_decode(file_get_contents(API.'/api/get-sections.php?code='.$code), true);
    $product = json_decode(file_get_contents(API.'/api/get-item.php?group_numb='.$section['group_numb'].'&code='.$product_code), true);
    if (count($product) > 0){
        $breadcrumbs = [
            [
                "name"=>"Каталог",
                "link"=> '/catalog/',
            ],
            [
                "name"=> $section['name'],
                "link"=> '/catalog/'.$code.'/',
            ],
            [
                "name"=> $product['name'],
                "link"=> null,
            ],
        ];
        require($_SERVER['DOCUMENT_ROOT'].'/Карточка-товара.php');
    } else {
        header('HTTP/1.0 404 Not Found');
        require($_SERVER['DOCUMENT_ROOT'].'/404.php');
    }
}, 'get');

// // Блог
// Route::add('/blog/([a-z-0-9-]*)', function($category) {
//     echo 'Edit user with id '.$category.'<br>';
// }, 'get');
// Route::add('/blog/([a-z-0-9-]*)/([a-z-0-9-]*)', function($category, $c) {
//     echo 'Edit user with id '.$category.'<br>';
//     echo 'Edit user with id '.$c.'<br>';
// }, 'get');

// 404
Route::pathNotFound(function($path) {
    header('HTTP/1.0 404 Not Found');
    require($_SERVER['DOCUMENT_ROOT'].'/404.php');
});

Route::add('/coockie', function() {
    $breadcrumbs = [
        [
            "name"=>"Использование cookie",
            "link"=> null,
        ],
    ];
    require($_SERVER['DOCUMENT_ROOT'].'/cookie.php');
});

Route::add('/policy', function() {
    $breadcrumbs = [
        [
            "name"=>"Политика конфиденциальности",
            "link"=> null,
        ],
    ];
    require($_SERVER['DOCUMENT_ROOT'].'/policy.php');
});


// Run the router
Route::run('/');