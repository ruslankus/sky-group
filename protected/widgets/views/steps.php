<nav class="path-nav">
<?php for($i=1; $i <= 7; $i++):?>
    <?php if($i == $current): ?>
    <a class="active" href="<?php echo "/registration/step/{$i}"?>"><?php echo $i; ?></a>
    <?php else:?>
     <a href="<?php echo "/registration/step/{$i}"?>"><?php echo $i; ?></a>
    <?php endif?>
<?php endfor; ?>    
   
    <div style="clear: both;"></div>
</nav>