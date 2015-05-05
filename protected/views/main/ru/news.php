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

        <h2>ЗАПУСТИЛСЯ НОВЫЙ САЙТ!</h2>
        <p>Мы рады сообщить Вам о запуске нашего нового сайта, где Вы можете ознакомиться с полным перечнем оказываемых услуг. Если Вы ещё не являетесь нашим клиентом - приглашаем Вас вступить в клуб и получить все льготные предложения, упрощающие Вашу жизнь. </p>
    </div>
    <div class="content-col">
        <h2>ДОБРО ПОЖАЛОВАТЬ</h2>
        <p>Официально заработал наш закрытый клуб. Для получения более подробной информации Вы можете посетить нашу интернет-страницу. Присоединяйтесь к нам и получите всевозможные привилегии!</p>
        <img src="<?php echo Yii::app()->request->baseUrl ?>/img/about_2.jpg">

    </div>
    <div class="content-col">
        <img src="<?php echo Yii::app()->request->baseUrl ?>/img/about1.jpg">

        <h2>SKYGROUP ТЕПЕРЬ В РОССИИ</h2>
        <p>Рады Вам сообщить, что теперь наш закрытый членский клуб предоставляет свои услуги не только в Израиле, но и в России. Увеличение количества участников даст нам возможность радовать Вас более выгодными предложениями!</p>
    </div>
    <div class="cls"></div>
</section>
</main>