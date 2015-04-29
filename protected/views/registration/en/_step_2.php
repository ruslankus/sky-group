<?php $cs = Yii::app()->clientScript; ?>
<?php $cs->registerScriptFile(Yii::app()->request->baseUrl."/js/jquery.mask.min.js", CClientScript::POS_END); ?>
<?php $cs->registerScript("promomask", "$('.promo').mask('000000000');", CClientScript::POS_END, array(CClientScript::POS_READY)); ?>
<section class="form-area">
   <?php echo CHtml::beginForm();?>
        <fieldset class="reg-1">
            <a href="#" class="question" data-questionmark="укажите код удостоверения личности"></a>

            <input data-error="<?php echo $errors['id_number']; ?>" class="promo <?php echo $errors['id_number']? 'error' : '' ?>" placeholder="Number ID" type="text" name="id_number" value="<?php echo $sessData['id_number']?>">

            <input class="<?php echo $errors['first_name']? 'error' : '' ?>" data-error="<?php echo $errors['first_name']; ?>" placeholder="Name (saved and transferred from the first page)" type="text" name="first_name" value="<?php echo $sessData['first_name']?>">
            <input class="<?php echo $errors['last_name']? 'error' : '' ?>" data-error="<?php echo $errors['last_name']; ?>" placeholder="Surname (saved and transferred from the first page)" type="text" name="last_name" value="<?php echo $sessData['last_name']?>">
            
             <label>Date Of Birth</label>

            <div style="clear: both;"></div>

            <select class="<?php echo $errors['day']? 'error' : '' ?>" name="day" class="selector-1" style="width: 30%;margin-right: 5%;">
                <option value="">Day</option>
                <?php
                for ($i=1; $i<32; $i++) {
                    echo '<option value="'.$i.'"'.($sessData['day'] == $i ? ' selected="selected"':'').'>'.$i.'</option>';
                }
                ?>
            </select>

            <select class="<?php echo $errors['month']? 'error' : '' ?>" name="month" class="selector-2" style="width: 30%;margin-right: 5%;">
                <option value="">Month</option>
                <?php
                for ($i=1; $i<13; $i++) {
                    echo '<option value="'.$i.'"'.($sessData['month'] == $i ? ' selected="selected"':'').'>'.$i.'</option>';
                }
                ?>
            </select>

            <select class="<?php echo $errors['year']? 'error' : '' ?>" name="year" class="selector-3" style="width: 30%;">
                <option value="">Year</option>
                <?php
                for ($i=date('Y')-14; $i>date('Y')-100; $i--) {
                    echo '<option value="'.$i.'"'.($sessData['year'] == $i ? ' selected="selected"':'').'>'.$i.'</option>';
                }
                ?>
            </select>
            
        </fieldset>
        <fieldset class="reg-2">
            <input class="<?php echo $errors['street']? 'error' : '' ?>" data-error="<?php echo $errors['street']; ?>" placeholder="Street" type="text" name="street" value="<?php echo $sessData['street']?>">
            <input class="<?php echo $errors['house']? 'error' : '' ?>" data-error="<?php echo $errors['house']; ?>" placeholder="House" type="text" name="house" value="<?php echo $sessData['house']?>">
            <input class="<?php echo $errors['flat']? 'error' : '' ?>" data-error="<?php echo $errors['flat']; ?>" placeholder="Apartment" type="text" name="flat" value="<?php echo $sessData['flat']?>">
            <input class="<?php echo $errors['city']? 'error' : '' ?>" data-error="<?php echo $errors['city']; ?>" placeholder="City" type="text" name="city" value="<?php echo $sessData['city']; ?>">
            <input class="<?php echo $errors['country']? 'error' : '' ?>" data-error="<?php echo $errors['country']; ?>" placeholder="Country" type="text" name="country" value="<?php echo $sessData['country']; ?>">
            <input class="<?php echo $errors['post_code']? 'error' : '' ?>" data-error="<?php echo $errors['post_code']; ?>" placeholder="Postcode ( Russian )" type="text" name="post_code" value="<?php echo $sessData['post_code']; ?>">
            <input class="<?php echo $errors['phone']? 'error' : '' ?>" data-error="<?php echo $errors['phone']; ?>" placeholder="Home Phone" type="text" name="phone" value="<?php echo $sessData['phone']; ?>">
            <input class="<?php echo $errors['mobile_phone']? 'error' : '' ?>" data-error="<?php echo $errors['mobile_phone']; ?>" placeholder="Mobile" type="text" name="mobile_phone" value="<?php echo $sessData['mobile_phone']; ?>">

        </fieldset>
        
        <fieldset class="reg-3 small-height">
            <input class="<?php echo $errors['profession']? 'error' : '' ?>" data-error="<?php echo $errors['profession']; ?>" placeholder="Occupation" type="text" name="profession" value="<?php echo $sessData['profession']; ?>">
            <input class="<?php echo $errors['employment']? 'error' : '' ?>" data-error="<?php echo $errors['employment']; ?>" placeholder="Place of employment" type="text" name="employment" value="<?php echo $sessData['employment']; ?>">
        </fieldset>

        
        <fieldset class="buttons">
            <a href="<?php echo Yii::app()->createUrl(Yii::app()->language.'/registration/step/1'); ?>" class="reversed left button">Back</a>
            <input class="right" type="submit" value="Next step">
        </fieldset>
        
        <div style="clear: both;"></div>
    <?php echo CHtml::endForm();?>
</section>
