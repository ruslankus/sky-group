<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="en">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/home.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/login.css">
    <title>Главная</title>
</head>

<body>
    <section class="body-height">
        <header class="header">
            <a href="#" class="logo"></a>
            <a href="#" class="right-box menu-button"></a>
            <a href="#" class="right-box login-button"></a>
            <nav class="nav">
                <?php $this->widget('application.widgets.MainMenu');?>
            </nav>
        </header>
    </section>
    <main class="main">
    
        <?php echo $content; ?>
        
        <section class="footer">
            <div class="footer-top"></div>
            <div class="footer-content"><span>ContactUs<span></div>
        </section>
    </main>

    <div class="login-box">
        <h2>Вход</h2>
        <span class="close"></span>
        <form class="form-area" action="<?php echo Yii::app()->createUrl('cabinet/login') ?>" method="post">
            <input placeholder="Электронная почта" type="text" name="login" value="">
            <input placeholder="Пароль" type="password" name="password" value="">
            <div style="clear: both;"></div>

            <fieldset class="buttons">
                <a href="#" class="left cancel-link">Регистрация</a>
                <input class="pay right" type="submit" value="Войти">
            </fieldset>
        </form>
    </div>

</body>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.11.2.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/forms.js"></script>

</html>
