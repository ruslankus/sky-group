<?php
$cs = Yii::app()->clientScript;
$cs->registerCssFile(Yii::app()->request->baseUrl.'/css/products.css');

?>

<main class="main">
<section class="header-section">
    <h1><span>Продукты</span></h1>
</section>

<section class="content">
    
    <div class="content-col">
        <h2>Серебряный клиент </h2>
        <img src="<?php echo Yii::app()->request->baseUrl ?>/img/about1.jpg">
        <p>Возврат налогов. Страховые заявления. Оптимизация коммуникационных затрат
        </p>
    </div><!--/product-->
    <div class="content-col">
        <h2>Золотой клиент </h2>
        <img src="<?php echo Yii::app()->request->baseUrl ?>/img/about_2.jpg">
        <p>Возврат налогов. Страховые заявления. Заявки на национальную страховку. Оптимизация коммуникационных затрат.
            Повторное финансирование ипотеки. Заполнение документов для государственных учреждений
        </p>
    </div><!--/product-->
    <div class="content-col">
        <h2>Платиновый клиент  </h2>
        <img src="<?php echo Yii::app()->request->baseUrl ?>/img/about1.jpg">
        <p>Возврат налогов. Страховые заявления. Заявки на национальную страховку. Оптимизация коммуникационных затрат.
            Повторное финансирование ипотеки. Заполнение документов для государственных учреждений.
            Медицинский осмотр ортопеда (не для суда). Оптимизация услуг для HMO. Услуга обратной связи.
        </p>
    </div><!--/product-->
    <div class="content-col">
        <h2>Бизнес клиент </h2>
        <img src="<?php echo Yii::app()->request->baseUrl ?>/img/about_2.jpg">
        <p>Возврат налогов. Страховые заявления. Заявки на национальную страховку. Оптимизация коммуникационных затрат.
            Повторное финансирование ипотеки. Заполнение документов для государственных учреждений.
            Медицинский осмотр ортопеда (не для суда). Оптимизация услуг для HMO. Услуга обратной связи.
            Услуги секретаря – календарные. Услуги факса на почту. Базовый интернет сайт
        </p>
    </div><!--/product-->
    <div class="content-col">
        <h2>Лояльный клиент </h2>
        <img src="<?php echo Yii::app()->request->baseUrl ?>/img/about1.jpg">
        <p>Все услуги клиента со статусом платиновый + возврат наличных денег.</p>
    </div><!--/product-->

    <div class="cls"></div>
</section>
</main>
