<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="en">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/home.css">
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
</body>

</html>
