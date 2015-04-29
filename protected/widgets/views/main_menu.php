<?php /* @var $objMenus Menu[] */ ?>
<?php /* @var $current int */ ?>

<?php $lng = Yii::app()->language; ?>

<ul>
    <?php foreach($objMenus as $obj):?>
        <li><a href="<?php echo Yii::app()->createUrl($lng.'/main/'.$obj->label);?>"><?php echo $obj->getAttribute('value_'.$lng); ?></a></li>
    <?php endforeach;?>
</ul>