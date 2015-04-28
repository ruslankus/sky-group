<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="en">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/home.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/login.css">
    <title>Главная</title>
</head>

<body>
    <section class="header-slider">
        <div class="abs">
            <div class="container">
                <a href="/" class="logo"></a>
                <a href="#" class="right-box login-button"></a>
                <a href="#" class="right-box menu-button"></a>
                <div class="nav"><?php $this->widget('application.widgets.MainMenu');?></div>
            </div>
        </div><!--/abs-->
        
        <div class="abs bottom">
            <div class="home-form">
                <div class="container">
                    <?php $this->renderPartial('_register_form')?>
                </div><!--/container-->
            </div><!--/home-form-->
        </div><!--/abs bottom-->
        
        <div class="slider-block">
            <div class="slider-wrapper">
                <div class="slide slide-1"></div>
                <div class="slide slide-2"></div>
                <div class="slide slide-3"></div>
            </div>
            <a href="#" class="slider-move"><span></span></a>
            <div class="slider-nav">
                <ul>
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </section>
    
    <main class="main">
    
        <?php echo $content; ?>
        
        <section class="footer">
            <div class="footer-top"></div>
            <div class="footer-content"><span><a href="<?php echo Yii::app()->createUrl('main/contacts'); ?>">СВЯЗАТЬСЯ С НАМИ</a><span></div>
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
