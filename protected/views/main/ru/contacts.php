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
<?php if ($send == true) {
        echo '<br/>Сообщение успешно отправлено<br/>';
    }
    ?>
    <?php echo CHtml::beginForm();?>
    <div class="content-col left">
        <input name="name" type="text" placeholder="Имя" data-error="<?php echo $error['name']; ?>" value="<?php echo $data['name']; ?>">
        <input name="email" type="text" placeholder="Эл. почта" data-error="<?php echo $error['email']; ?>" value="<?php echo $data['email']; ?>">
    </div>

    <div class="content-col right">
        <input name="country" type="text" placeholder="Страна" data-error="<?php echo $error['country']; ?>" value="<?php echo $data['country']; ?>">
        <input name="phone" type="text" placeholder="номер" data-error="<?php echo $error['phone']; ?>" value="<?php echo $data['phone']; ?>">
    </div>
    <div class="cls"></div>
    <textarea name="text" data-error="<?php echo $error['text']; ?>"><?php echo !empty($data['text']) ? $data['text']:'Ваша заявка, содержание, т.д.'; ?></textarea>
    <div class="buttons">
        <button>Отправить</button>
    </div>
    <?php echo CHtml::endForm();?>
</section>
</main>
