<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="en">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/forms.css">
    <title><?php echo $this->title;?></title>
</head>

<body>

<header class="header">
    <a href="/" class="logo"></a>
    <a href="#" class="right-box menu-button"></a>
    <a href="#" class="right-box login-button"></a>

    <nav class="nav">
         <?php $this->widget('application.widgets.MainMenu');?>
    </nav>
</header>

    <?echo $content?>
    
    
<footer class="footer">
    <a href="#">Связаться с нами</a>
</footer>
</body>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.11.2.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/forms.js"></script>

</html>
