<?php /* @var $this Controller */ ?>
<?php /* @var $content string */ ?>

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
    <span class="right-box menu-button active"></span>
    <?php $url = !Yii::app()->user->isGuest ? (Yii::app()->controller->id == 'cabinet' ? Yii::app()->createUrl('cabinet/logout') : Yii::app()->createUrl('cabinet/index')) : '#'; ?>
    <?php $class = !Yii::app()->user->isGuest ? (Yii::app()->controller->id == 'cabinet' ? 'out' : 'in') : '';  ?>

    <a href="<?php echo $url ?>" class="right-box <?php echo $class ?> login-button"></a>

    <nav class="nav">
         <?php $this->widget('application.widgets.MainMenu');?>
    </nav>
</header>

<?echo $content?>

<footer class="footer">
    <a href="#">Связаться с нами</a>
</footer>

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
