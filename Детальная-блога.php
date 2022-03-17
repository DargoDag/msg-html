<?php 
    $api_url = 'http://'.$_SERVER['HTTP_HOST'];
    define("API", $api_url);
    $breadcrumbs = [
        [
            "name"=>"Блог",
            "link"=> null,
        ],
    ];
	$meta__title = "Блог";
	$meta__desc  = "";
	$meta__key   = "";
	$modifier   = "--blog-detail";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
<div class="content__main-wrap pt-48">
	<div class="center-wrap">
		<div class="content__head">
			<div class="content__head-wrap flex --align-center">
    <div class="article-item__date p --m mr-16">25.01.2022</div>
    <div class="article-item__tags flex">
        <div class="article-item__tag p --m">#обзор</div>
    </div>
</div>
            <div class="content__title-wrap flex --align-end --just-space col --8 mt-16">
				<h1 class="content__title-2 h1 <?= $modifier ?> col --7"><b>Название статьи в несколько строк для коло-во символов</b></h1>
				<div class="content__share-wrap flex --align-center">
					<a onclick="this.href='https://vk.com/share.php?url='+window.location.href+window.location.hash+'&amp;title='+document.title" target="_blank" class="article-item__share-link --svg__vk"></a>
					<a onclick="this.href='http://www.facebook.com/share.php?u='+window.location.href+window.location.hash" target="_blank" class="article-item__share-link --svg__fb"></a>
				</div>
			</div>
	    </div>
		<div class="content__wrap">
			<div class="content__blog-wrap col --12 mt-40">
                <?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/blog-detail/__blog-detail.php'); ?>
			</div>
		</div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>