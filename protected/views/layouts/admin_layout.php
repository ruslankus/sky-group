<?php /* @var $content string */ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/vendor.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/vendor.main-menu.css">
    <title>Sky Group</title>
</head>
<body>
<div class="fluid">
    <header>
        <div class="wrapper">
            <div class="menu">
                <span class="bar a"></span>
                <span class="bar b"></span>
                <span class="bar c"></span>
                <span class="bar d"></span><!--triangle-->
            </div><!--/menu-->
            <span class="logo">Sky Group Panel</span><!--/logo-->
        </div><!--/wrapper-->
    </header>

    <div class="content-fluid">
        <aside>
            <ul class="root">
                <li><span class="icon products"></span><a href="<?php echo Yii::app()->createUrl('admin/products'); ?>"><span>Продукты</span></a></li>
                <li><span class="icon pages"></span><a href="<?php echo Yii::app()->createUrl('admin/clients'); ?>"><span>Клиенты</span></a></li>
                <li><span class="icon edit-menu"></span><a href="<?php echo Yii::app()->createUrl('admin/orders'); ?>"><span>Заказы</span></a></li>
            </ul>
        </aside>
        <?php echo $content; ?>
    </div><!--/content-fluid-->
</div><!--fluid-->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.11.2.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/vendor.js"></script>
</body>
</html>