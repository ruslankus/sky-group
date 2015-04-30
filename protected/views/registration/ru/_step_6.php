<section class="form-area">

     <?php echo CHtml::beginForm();?>

        <fieldset class="reg-3 small-height">
            <span class="question-span small block bold">Выберите пакет обслуживания:</span>
            
            
            <?php $i=0; foreach($objProds as $prod):?>
            
                <input id="prod_<?php echo $prod->id?>" type="radio" name="packet" <?php echo ($i==0)? 'checked' : ""; ?> value="<?php echo $prod->id?>">
                <label data-name="packet" class="radio <?php echo ($i==0)? 'active' : ""; ?> modified-small packet" for="prod_<?php echo $prod->id; ?>">
                    <span><?php echo $prod->name?></span> – price <span class="old"><?php echo number_format($prod->old_price/100 ,2) ?> ILS</span> <span><?php echo number_format($prod->price/100 ,2) ?> ILS</span>
                </label>
                <div style="clear: both;"></div>
                <?php echo $prod->description_text?>
            <?php $i++; endforeach; ?>
            
        </fieldset>

        <fieldset class="buttons">
            <a class="reversed left button" href="/registration/step/5">Назад</a>
            <input class="right" type="submit" value="Далее">
        </fieldset>

        <div style="clear: both;"></div>
     <?php echo CHtml::endForm();?>

</section>
