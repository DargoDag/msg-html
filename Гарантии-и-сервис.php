<?php 
	$meta__title = "Гарантии и свервис";
	$meta__desc  = "";
	$meta__key   = "";
	$modifier   = "";
	require($_SERVER['DOCUMENT_ROOT'].'/template/header.php');
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
<div class="content__main-wrap --vacancy pt-40">
	<div class="center-wrap">
        <h1 class="content__title h1"><b>Гарантии и сервис</b></h1>
		<div class="content__wrap flex --just-space mt-32">
			<div class="content__warranty-wrap col --12">
				<div class="warranty">
					<? /*
					<div class="warranty__items flex --just-space">
						<!-- warranty-item -->
						<div class="warranty-item flex --direction-column --align-center --just-center col --6">
							<div class="warranty-item__icon">
								<?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/list-2.svg'); ?>
							</div>
							<div class="warranty-item__label h4 mt-32"><b>ЗАРЕГИСТРИРОВАТЬ</b></div>
							<div class="warranty-item__desc h5">расширенную гарантию</div>
						</div>
						<!-- warranty-item -->
						<div class="warranty-item flex --direction-column --align-center --just-center col --6">
							<div class="warranty-item__icon">
								<?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/box.svg'); ?>
							</div>
							<div class="warranty-item__label h4 mt-32"><b>ЗАРЕГИСТРИРОВАТЬ</b></div>
							<div class="warranty-item__desc h5">расширенную гарантию</div>
						</div>
					</div>
					*/ ?>
					<div class="warranty__desc mt-24">
						<!-- vacancy-item -->
						<div class="vacancy-item accordion">
							<div class="accordion__title --js flex --align-center --just-space">
								<div class="accordion__title-wrap">
									<div class="accordion__title">Обслуживание массажных кресел</div>
								</div>
								<div class="accordion__title-icon"></div>
							</div>
							<div class="accordion__desc type-editor col --5 pt-32 mt-32">
								<p class="p --l">На массажные кресла предоставляется гарантия от 1 до 5 лет (в зависимости от марки массажного кресла), в течение которых:</p>
								<ul class="--check">
									<li class="--p">В течение действия гарантии необходимо сохранять гарантийный талон, который прилагается к каждой единице массажной продукции. У каждого производителя свой вид гарантийного талона на массажеры и массажные кресла.</li>
									<li class="--p">Массажные кресла проходят многоступенчатую проверку и контроль качества. Перед тем как кресла выпустить с производства, они проходят тщательное тестирование, ход которого определен несколькими этапами: тестирование комплектующих, тестирование электроники, тестирование ресурса работы, а также независимые экспертные оценки. Многие производители дополнительно производят проверку массажных кресел на складах Москвы для минимизации случаев отказа техники после долгой транспортировки!</li>
									<li class="--p">Ресурс работы наших массажных кресел в домашних условиях 10-20 лет. Особого технического ухода массажные кресла не требуют!</li>
								</ul>
								<a href="#request-call" data-popup="#request-call" data-popup-title="Оставить заявку" class="accordion__desc-btn btn --fill-1 p --l mt-40">Оставить заявку</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>