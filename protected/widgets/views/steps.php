<nav class="path-nav">
<?php foreach($steps as $key => $value):?>
<?php if($value):?>
    <?php if($key == $current): ?>
    <a class="active" href="<?php echo "/registration/step/{$key}"?>"><?php echo $key; ?></a>
    <?php else:?>
     <a href="<?php echo "/registration/step/{$key}"?>"><?php echo $key; ?></a>
    <?php endif?>
<?php else: ?>
        <?php if($key == $current): ?>
        <a class="active" href="<?php echo "/registration/step/{$key}"?>"><?php echo $key; ?></a>
        <?php else:?>
        <span><?php echo $key; ?></span>
        <?php endif?>
<?php endif;?>    
<?php endforeach; ?>    
   
    <div style="clear: both;"></div>
</nav>