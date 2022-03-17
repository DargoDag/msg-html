<?php
    $cookie_cart = null;
    if ($_COOKIE['cart']) {
        $cookie_cart = $_COOKIE['cart'];
    }
    if ($_COOKIE['fave']) {
        $cookie_fave = $_COOKIE['fave'];
    }
    $opts = array(
        'http'=>array(
            'method'=>"GET",
            'header'=>"Accept-language: ru\r\n" .
                    "Cookie: cart={$cookie_cart}; fave={$cookie_fave}; \r\n"
        )
    );
	$cart = json_decode($_COOKIE['cart'], true);
	$fave = json_decode($_COOKIE['fave'], true);
    $context = stream_context_create($opts);
    $cart_total = json_decode(file_get_contents(API.'/api/get-cart.php?view=total', false, $context), true);
    $fave_total = json_decode(file_get_contents(API.'/api/get-fave.php?view=total', false, $context), true);
?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$meta__title?></title>
	<meta charset="utf-8">
	<meta name="description" content="<?=$meta__desc?>"/>
	<meta name="keywords" content="<?=$meta__key?>"/>
	<meta name="yandex-verification" content="752bef4a6d30008f" />
	<link rel="shortcut icon" href="/favicon.svg" type="image/svg" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<?php
		// Режим разработки - подключает исходные файлы css и js
		$__dev_mode = true;
		if ( $__dev_mode == true ) {
			require($_SERVER['DOCUMENT_ROOT'].'/template/app.php');
		} else {
			$time = date("jnY");
			echo '<link rel="stylesheet" type="text/css" href="/template/dist/css/__all.min.css?'.$time.'32">';
		};
	?>
	<? if ($__dev_mode == false ) { ?>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-197773846-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-197773846-1');
		</script>
		<!-- Yandex.Metrika counter -->
		<script type="text/javascript" >
			(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
			m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
			(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

			ym(86707619, "init", {
					clickmap:true,
					trackLinks:true,
					accurateTrackBounce:true,
					webvisor:true,
					ecommerce:"dataLayer"
			});
		</script>
		<noscript><div><img src="https://mc.yandex.ru/watch/86707619" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
		<!-- /Yandex.Metrika counter -->
		<!-- Facebook Pixel Code -->  <script>    !function(f,b,e,v,n,t,s)    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?    n.callMethod.apply(n,arguments):n.queue.push(arguments)};    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';    n.queue=[];t=b.createElement(e);t.async=!0;    t.src=v;s=b.getElementsByTagName(e)[0];    s.parentNode.insertBefore(t,s)}(window, document,'script',    'https://connect.facebook.net/en_US/fbevents.js');    fbq('init', '338363684762557');    fbq('track', 'PageView');  </script>  <noscript><img height="1" width="1" style="display:none"    src="https://www.facebook.com/tr?id=338363684762557&ev=PageView&noscript=1"  /></noscript>  <!-- End Facebook Pixel Code -->
	<? } ?>
</head>
<body>
	<div>
		<main>
			<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/mob-nav/__mob-nav.php'); ?>
			<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/header/__header-top.php'); ?>
			<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/header/__header-middle.php'); ?>
			<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/header/__header-bottom.php'); ?>
			<div class="main-content pb-64">
				<?php if(isset($__hidebread) && $__hidebread) { ?>
				<?php } else { ?>
				<? } ?>