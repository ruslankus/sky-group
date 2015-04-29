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
    <title><?php echo $this->title; ?></title>
</head>
<?php $lng = Yii::app()->language; ?>
<body>
    <section class="header-slider">
        <div class="abs">
            <div class="container">
                <a href="/" class="logo"></a>
                <a href="#" class="right-box login-button"></a>
                <a href="#" class="right-box menu-button"></a>
                <div class="nav"><?php $this->widget('application.widgets.MainMenu');?></div>
                <?php if($lng == 'en'): ?>
                    <a href="<?php echo Yii::app()->createUrl('/ru/main/index') ?>" class="right-box language-switcher">RU</a>
                <?php else: ?>
                    <a href="<?php echo Yii::app()->createUrl('/en/main/index') ?>" class="right-box language-switcher">EN</a>
                <?php endif; ?>
            </div>
        </div><!--/abs-->
        
        <div class="abs bottom">
            <div class="home-form">
                <div class="container">
                    <?php $this->renderPartial("//main/{$lng}/_register_form")?>
                </div><!--/container-->
            </div><!--/home-form-->
        </div><!--/abs bottom-->
        
        <div class="slider-block">
            <div class="slider-wrapper">
                <div class="slide active" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/img/home-banner.jpg);"></div>
                <div class="slide" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/img/home-banner_2.png);"></div>
                <div class="slide" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/img/home-banner_3.png);"></div>
            </div>
            <a href="#" class="slider-move"><span></span></a>
            <div class="slider-nav">
                <ul></ul>
            </div>
        </div>
    </section>
    
    <main class="main">
    
        <?php echo $content; ?>
        
        <section class="footer">
            <div class="footer-top"></div>
            <a href="<?php echo Yii::app()->createUrl('main/contacts'); ?>"><span class="footer-content"><span><?php echo $lng == 'en' ? 'CONNECT US' : 'СВЯЗАТЬСЯ С НАМИ'; ?></span></span></a>
        </section>
    </main>

    <div class="login-box">
        <h2><?php echo $lng == 'en' ? 'Login' : 'Вход'; ?></h2>
        <span class="close"></span>
        <form class="form-area" action="<?php echo Yii::app()->createUrl($lng.'/cabinet/login') ?>" method="post">
            <input placeholder="<?php echo $lng == 'en' ? 'Email' : 'Электронная почта'; ?>" type="text" name="login" value="">
            <input placeholder="<?php echo $lng == 'en' ? 'Password' : 'Пароль'; ?>" type="password" name="password" value="">
            <div style="clear: both;"></div>

            <fieldset class="buttons">
                <a href="#" class="left cancel-link"><?php echo $lng == 'en' ? 'Registration' : 'Регистрация'; ?></a>
                <input class="pay right" type="submit" value="<?php echo $lng == 'en' ? 'Enter' : 'Войти'; ?>">
            </fieldset>
        </form>
    </div>

</body>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.11.2.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/forms.js"></script>

</html>
