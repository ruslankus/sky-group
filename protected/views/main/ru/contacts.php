<?php
$cs = Yii::app()->clientScript;
$cs->registerCssFile(Yii::app()->request->baseUrl.'/css/contacts.css');

?>
<main class="main">
<section class="header-section">
    <h1><span>Контакты</span></h1>
</section>

<section class="content">
    <div class="contacts-info">
        <div class="field">
            Контактный телефон
        </div>
        <div class="value">
            +470 000 00000
        </div>    
        <div class="field">
            Линия помощи (для платиновых и бизнес клиентов)
        </div>
        <div class="value">
            +470 000 00000
        </div> 
        <div class="field">
            24/7 линия помощи (3LS/мин)
        </div>
        <div class="value">
            +470 000 00000
        </div> 
        <div class="field">
            Линия жалоб
        </div>
        <div class="value">
            +470 000 00000
        </div> 
        <div class="field">
            Центр помощи онлайн
        </div>
        <div class="value">
        <a href="mailto:sg-help@server.com">sg-help@server.com</a>
        </div> 
        <div class="field">
            Эл.почта для агентов
        </div>
        <div class="value">
            <a href="mailto:sg-spam@server.com">sg-spam@server.com</a>
        </div> 
        <div class="cls"></div>
    </div>

    <h2>
        Свяжись с нами
    </h2>


    <div class="content-col left">
        <input type="text" placeholder="Имя">
        <input type="text" placeholder="Эл. почта">
    </div>

    <div class="content-col right">
        <input type="text" placeholder="Страна">
        <input type="text" placeholder="номер">
    </div>
    <div class="cls"></div>
    <textarea>Ваша заявка, содержание, т.д.</textarea>
    <div class="buttons">
        <a href="#">Отменить </a><button>Отправить</button>
    </div>
</section>
</main>
