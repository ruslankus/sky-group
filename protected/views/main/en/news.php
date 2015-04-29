<?php
$cs = Yii::app()->clientScript;
$cs->registerCssFile(Yii::app()->request->baseUrl.'/css/news.css');
?>
<main class="main">
<section class="header-section">
    <h1><span>Новости</span></h1>
</section>

<section class="content">
    <div class="content-col">
        <img src="<?php echo Yii::app()->request->baseUrl ?>/img/about1.jpg">
        <p>Текстовая информация, которой хотите поделиться с клиентами</p>
        <h2>НОВОСТИ (заголовок)</h2>
        <p>Текстовая информация, которой хотите поделиться с клиентами</p>
    </div>
    <div class="content-col">
        <h2>НОВОСТИ (заголовок)</h2>
        <p>Текстовая информация, которой хотите поделиться с клиентами</p>
        <img src="<?php echo Yii::app()->request->baseUrl ?>/img/about_2.jpg">
        <h2>НОВОСТИ (заголовок)</h2>
        <p>Текстовая информация, которой хотите поделиться с клиентами</p>
    </div>
    <div class="content-col">
        <img src="<?php echo Yii::app()->request->baseUrl ?>/img/about1.jpg">
        <p>Текстовая информация, которой хотите поделиться с клиентами</p>
        <h2>НОВОСТИ (заголовок)</h2>
        <p>Текстовая информация, которой хотите поделиться с клиентами</p>
    </div>
    <div class="cls"></div>
</section>
</main>