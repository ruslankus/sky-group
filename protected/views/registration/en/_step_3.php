<?php $cs = Yii::app()->clientScript; ?>
<?php $cs->registerScriptFile(Yii::app()->request->baseUrl."/js/jquery.mask.min.js", CClientScript::POS_END); ?>
<?php $cs->registerScript("promomask", "$('.promo').mask('000000000');", CClientScript::POS_END, array(CClientScript::POS_READY)); ?>
<section class="form-area">

    <?php echo CHtml::beginForm();?>

        <span class="question-span">Are you married?</span>

        <label data-name="married" class="radio <?php echo ($sessData['married'] == 'yes')? 'active' : ''; ?>" for="married-yes">Yes</label>
        <label data-name="married" class="radio <?php echo ($sessData['married'] != 'yes')? 'active' : ''; ?>" for="married-no">No</label>
        <input id="married-yes" type="radio" name="married" value="yes">
        <input id="married-no" type="radio"  name="married" value="no">

        <div style="clear: both;"></div>
        <section class="offset <?php echo ($sessData['married'] == 'yes')? '' : 'hidden-block'; ?> if-married">
            <fieldset class="reg-3">
                <a href="#" class="question" data-questionmark="укажите код удостоверения личности супруга(и)"></a>
                <input data-error="<?php echo $errors['partner_id']; ?>" class="promo <?php echo $errors['id_number']? 'error' : '' ?>" placeholder="Spouse(s) ID Number" type="text" name="partner_id" value="<?php echo $sessData['partner_id']?>">
                <input class="<?php echo $errors['p_fname']? 'error' : '' ?>" data-error="<?php echo $errors['p_fname']; ?>" placeholder="Name (saved and transferred from the first page)" type="text" name="p_fname" value="<?php echo $sessData['p_fname']?>">
                <input class="<?php echo $errors['p_lname']? 'error' : '' ?>" data-error="<?php echo $errors['p_lname']; ?>" placeholder="Surname (saved and transferred from the first page)" type="text" name="p_lname" value="<?php echo $sessData['p_lname']?>">
                <label>Date of birth</label>
                <div style="clear: both;"></div>
                <select class="selector-1 <?php echo $errors['bday']? 'error' : '' ?>" name="bday">
                    <option value="">Day</option>
                    <?php
                    for ($i=1; $i<32; $i++) {
                        echo '<option value="'.$i.'"'.($sessData['bday'] == $i ? ' selected="selected"':'').'>'.$i.'</option>';
                    }
                    ?>
                </select>
                <select class="selector-2 <?php echo $errors['bmonth']? 'error' : '' ?>" name="bmonth">
                    <option value="">Month</option>
                    <?php
                    for ($i=1; $i<13; $i++) {
                        echo '<option value="'.$i.'"'.($sessData['bmonth'] == $i ? ' selected="selected"':'').'>'.$i.'</option>';
                    }
                    ?>
                </select>
                <select class="selector-3 <?php echo $errors['byear']? 'error' : '' ?>" name="byear">
                    <option value="">Year</option>
                    <?php
                    for ($i=date('Y')-14; $i>date('Y')-100; $i--) {
                        echo '<option value="'.$i.'"'.($sessData['byear'] == $i ? ' selected="selected"':'').'>'.$i.'</option>';
                    }
                    ?>
                </select>
            </fieldset>

            <div style="clear: both;"></div>

            <fieldset class="reg-3 small-height">
                <input class="<?php echo $errors['profession']? 'error' : '' ?>" data-error="<?php echo $errors['profession']; ?>" placeholder="Occupation" type="text" name="profession" value="<?php echo $sessData['profession']; ?>">
                <input class="<?php echo $errors['employment']? 'error' : '' ?>" data-error="<?php echo $errors['employment']; ?>" placeholder="Place of employment" type="text" name="employment" value="<?php echo $sessData['employment']; ?>">
            </fieldset>

            <div style="clear: both;"></div>
            <span class="question-span">Same address ?</span>

            <label data-name="same-address" class="radio <?php echo ($sessData['same_address'] != 'no')? 'active' : ''; ?>" for="same-yes">Yes</label>
            <label data-name="same-address" class="radio <?php echo ($sessData['same_address'] == 'no')? 'active' : ''; ?>" for="same-no">No</label>
            <input id="same-yes" type="radio" name="same_address" value="yes">
            <input id="same-no" type="radio"  name="same_address" value="no">

            <div style="clear: both;"></div>
            
                <section class="offset <?php echo ($sessData['same_address'] == 'yes')? 'hidden-block' : ''; ?> if-same">
                    <fieldset class="reg-3">
                        <input class="<?php echo $errors['street']? 'error' : '' ?>" data-error="<?php echo $errors['street']; ?>" placeholder="Street" type="text" name="street" value="<?php echo $sessData['street']?>">
                <input class="<?php echo $errors['house']? 'error' : '' ?>" data-error="<?php echo $errors['house']; ?>" placeholder="House" type="text" name="house" value="<?php echo $sessData['house']?>">
                <input class="<?php echo $errors['flat']? 'error' : '' ?>" data-error="<?php echo $errors['flat']; ?>" placeholder="Apartment" type="text" name="flat" value="<?php echo $sessData['flat']?>">
                <input class="<?php echo $errors['city']? 'error' : '' ?>" data-error="<?php echo $errors['city']; ?>" placeholder="City" type="text" name="city" value="<?php echo $sessData['city']; ?>">
                <input class="<?php echo $errors['country']? 'error' : '' ?>" data-error="<?php echo $errors['country']; ?>" placeholder="Country" type="text" name="country" value="<?php echo $sessData['country']; ?>">
                <input class="<?php echo $errors['post_code']? 'error' : '' ?>" data-error="<?php echo $errors['post_code']; ?>" placeholder="Postcode (Russian)" type="text" name="post_code" value="<?php echo $sessData['post_code']; ?>">
                    </fieldset>

                    <div style="clear: both;"></div>
                </section>
        </section>

        <fieldset class="buttons">
            <a href="<?php echo Yii::app()->createUrl(Yii::app()->language.'/registration/step/2'); ?>" class="reversed left button">back</a>
            <input class="right" type="submit" value="Next step">
        </fieldset>

        <div style="clear: both;"></div>
     <?php echo CHtml::beginForm();?>

</section>
