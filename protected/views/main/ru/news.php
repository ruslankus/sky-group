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
        <p>Мы рады сообщить Вам, что запустили наш новый сайт. Предлагаем Вам ознакомиться с полным перечнем предлагаемых услуг.
            Если Вы ещё не член нашего общества - приглашаем Вас вступить в наш  клуб и
            получить все льготные предложения, которые упростят Вашу жизнь. </p>
    </div>
    <div class="content-col">
        <h2>ДОБРО ПОЖАЛОВАТЬ</h2>
        <p>Наш закрытый членский клуб официально запустился.
            По интересующим Вас вопросам можете связаться с нами, посетив нашу интернет-страницу.
            Вступайте в наш клуб и получите уникальные привилегии!</p>
        <img src="<?php echo Yii::app()->request->baseUrl ?>/img/about_2.jpg">

    </div>
    <div class="content-col">
        <img src="<?php echo Yii::app()->request->baseUrl ?>/img/about1.jpg">

        <h2>SKYGROUP ТЕПЕРЬ В РОССИИ</h2>
        <p>Теперь закрытый членский клуб предоставляет свои услуги не только в Израиле, но и в России!
            Присоединение новых участников позволит нам предлагать ещё более выгодные услуги!</p>
    </div>
    <div class="cls"></div>
</section>
</main>