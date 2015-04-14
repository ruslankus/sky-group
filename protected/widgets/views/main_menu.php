<?php /* @var objMenus obj */ ?>
<?php /* @var $current int */ ?>

    <ul>
    <?php foreach($objMenus as $obj):?>
        <li><a href="/main/<?php echo $obj->label ?>"><?php echo $obj->value?></a></li>
    <?php endforeach;?>    
        
    </ul>