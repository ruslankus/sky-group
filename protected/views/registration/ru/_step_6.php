<section class="form-area">

     <?php echo CHtml::beginForm();?>
        <span class="question-span small">Do You have a discount code?</span>

            <label data-name="discount_is" class="radio <?php echo ($sessData['discount_is'] == 'yes')? 'active' : ''; ?>" for="discount-yes">Yes</label>
            <label data-name="discount_is" class="radio <?php echo ($sessData['discount_is'] != 'yes')? 'active' : ''; ?>" for="discount-no">No</label>
            <input id="discount-yes" type="radio" name="discount_is" value="yes" <?php echo ($sessData['discount_is'] == 'yes')? 'checked="checked"' : ''; ?>>
            <input id="discount-no" type="radio" name="discount_is" value="no" <?php echo ($sessData['discount_is'] != 'yes')? 'checked="checked"' : ''; ?>>
            <div style="clear: both;"></div>
            
            <section class="offset <?php echo ($sessData['discount_is'] == 'yes')? '' : 'hidden-block'; ?> if-discount">
                <input placeholder="Discount code" maxlength="10" class="promo <?php echo $errors['discount']? 'error' : '' ?>" data-error="<?php echo $errors['discount']? $errors['discount'] : '' ?>" type="text" name="discount" value="<?php echo $sessData['discount']; ?>">
            </section>
    
    
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
