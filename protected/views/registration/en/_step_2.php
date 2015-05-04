<?php $step_1 = $got->get('step_1'); ?>
<section class="form-area">
   <?php echo CHtml::beginForm();?>
        <fieldset class="reg-1">
           <span class="promo">Identification number</span>
            <span style="display: block; width:95%;" data-error="<?php echo isset($errors['id_number'])?$errors['id_number']:''; ?>">
                <input maxlength="1" style="width: 9%;margin-right:2.3%;text-align:center;" class="promo <?php echo isset($errors['id_number_1'])? 'error' : '' ?>" type="text" name="id_number_1" value="<?php echo isset($sessData['id_number_1']) ? $sessData['id_number_1']:''; ?>">
                <input maxlength="1" style="width: 9%;margin-right:2.3%;text-align:center;" class="promo <?php echo isset($errors['id_number_2'])? 'error' : '' ?>" type="text" name="id_number_2" value="<?php echo isset($sessData['id_number_2']) ? $sessData['id_number_2']:''; ?>">
                <input maxlength="1" style="width: 9%;margin-right:2.3%;text-align:center;" class="promo <?php echo isset($errors['id_number_3'])? 'error' : '' ?>" type="text" name="id_number_3" value="<?php echo isset($sessData['id_number_3']) ? $sessData['id_number_3']:''; ?>">
                <input maxlength="1" style="width: 9%;margin-right:2.3%;text-align:center;" class="promo <?php echo isset($errors['id_number_4'])? 'error' : '' ?>" type="text" name="id_number_4" value="<?php echo isset($sessData['id_number_4']) ? $sessData['id_number_4']:''; ?>">
                <input maxlength="1" style="width: 9%;margin-right:2.3%;text-align:center;" class="promo <?php echo isset($errors['id_number_5'])? 'error' : '' ?>" type="text" name="id_number_5" value="<?php echo isset($sessData['id_number_5']) ? $sessData['id_number_5']:''; ?>">
                <input maxlength="1" style="width: 9%;margin-right:2.3%;text-align:center;" class="promo <?php echo isset($errors['id_number_6'])? 'error' : '' ?>" type="text" name="id_number_6" value="<?php echo isset($sessData['id_number_6']) ? $sessData['id_number_6']:''; ?>">
                <input maxlength="1" style="width: 9%;margin-right:2.3%;text-align:center;" class="promo <?php echo isset($errors['id_number_7'])? 'error' : '' ?>" type="text" name="id_number_7" value="<?php echo isset($sessData['id_number_7']) ? $sessData['id_number_7']:''; ?>">
                <input maxlength="1" style="width: 9%;margin-right:2.3%;text-align:center;" class="promo <?php echo isset($errors['id_number_8'])? 'error' : '' ?>" type="text" name="id_number_8" value="<?php echo isset($sessData['id_number_8']) ? $sessData['id_number_8']:''; ?>">
                <input maxlength="1" style="width: 9%;text-align:center;" class="promo <?php echo isset($errors['id_number_8'])? 'error' : '' ?>" type="text" name="id_number_9" value="<?php echo isset($sessData['id_number_9']) ? $sessData['id_number_9']:''; ?>">
            </span>

            <input placeholder="Name (saved and transferred from the first page)" type="text" value="<?php echo $step_1['user_name']; ?>" readonly="readonly" />
            <input placeholder="Surname (saved and transferred from the first page)" type="text" value="<?php echo $step_1['last_name']; ?>" readonly="readonly" />
            
             <label>Date Of Birth</label>

            <div style="clear: both;"></div>

            <select class="<?php echo isset($errors['day'])? 'error' : '' ?>" name="day" class="selector-1" style="width: 30%;margin-right: 5%;">
                <option value="">Day</option>
                <?php
                for ($i=1; $i<32; $i++) {
                    echo '<option value="'.$i.'"'.(isset($sessData['day'])? $sessData['day']:''== $i ? ' selected="selected"':'').'>'.$i.'</option>';
                }
                ?>
            </select>

            <select class="<?php echo isset($errors['month'])? 'error' : '' ?>" name="month" class="selector-2" style="width: 30%;margin-right: 5%;">
                <option value="">Month</option>
                <?php
                for ($i=1; $i<13; $i++) {
                    echo '<option value="'.$i.'"'.(isset($sessData['month'])?$sessData['month']:'' == $i ? ' selected="selected"':'').'>'.$i.'</option>';
                }
                ?>
            </select>

            <select class="<?php echo isset($errors['year'])? 'error' : '' ?>" name="year" class="selector-3" style="width: 30%;">
                <option value="">Year</option>
                <?php
                for ($i=date('Y')-14; $i>date('Y')-100; $i--) {
                    echo '<option value="'.$i.'"'.(isset($sessData['year'])?$sessData['year']:'' == $i ? ' selected="selected"':'').'>'.$i.'</option>';
                }
                ?>
            </select>
            
        </fieldset>
        <fieldset class="reg-2">
            <input class="<?php echo $errors['street']? 'error' : '' ?>" data-error="<?php echo $errors['street']; ?>" placeholder="Street" type="text" name="street" value="<?php echo $sessData['street']?>">
            <span style="width:95%;display:block;float:right;">
                <input class="<?php echo $errors['flat']? 'error' : '' ?>" data-error="<?php echo $errors['flat']; ?>" placeholder="Apartment" type="text" name="flat" value="<?php echo $sessData['flat']?>" style="width: 47%;margin-left: 6%;">
                <input class="<?php echo $errors['house']? 'error' : '' ?>" data-error="<?php echo $errors['house']; ?>" placeholder="House" type="text" name="house" value="<?php echo $sessData['house']?>" style="width: 47%;">
            </span>
            <input class="<?php echo $errors['city']? 'error' : '' ?>" data-error="<?php echo $errors['city']; ?>" placeholder="City" type="text" name="city" value="<?php echo $sessData['city']; ?>">
            <input class="<?php echo $errors['country']? 'error' : '' ?>" data-error="<?php echo $errors['country']; ?>" placeholder="Country" type="text" name="country" value="<?php echo $sessData['country']; ?>">
            <input class="<?php echo $errors['phone']? 'error' : '' ?>" data-error="<?php echo $errors['phone']; ?>" placeholder="Home Phone" type="text" name="phone" value="<?php echo $sessData['phone']; ?>">
            <input class="<?php echo $errors['mobile_phone']? 'error' : '' ?>" data-error="<?php echo $errors['mobile_phone']; ?>" placeholder="Mobile" type="text" name="mobile_phone" value="<?php echo $sessData['mobile_phone']; ?>">

        </fieldset>
        
        <fieldset class="reg-3 small-height">
            <input class="<?php echo $errors['profession']? 'error' : '' ?>" data-error="<?php echo $errors['profession']; ?>" placeholder="Occupation" type="text" name="profession" value="<?php echo $sessData['profession']; ?>">
            <input class="<?php echo $errors['employment']? 'error' : '' ?>" data-error="<?php echo $errors['employment']; ?>" placeholder="Place of employment" type="text" name="employment" value="<?php echo $sessData['employment']; ?>">
        </fieldset>

        
        <fieldset class="buttons">
            <a href="<?php echo Yii::app()->createUrl( $lng .'/registration/step/1'); ?>" class="reversed left button">Back</a>
            <input class="right" type="submit" value="Next step">
        </fieldset>
        
        <div style="clear: both;"></div>
    <?php echo CHtml::endForm();?>
</section>
