<?php $step_6 = $got->get('step_6'); ?>
<section class="form-area">

    <form method="post">

        <fieldset class="reg-3 small-height bordered-bottom">
            <span class="question-span small block bold">The system assigns a unique number</span>
            <span class="question-span small block bold"><?php echo $_SESSION['step_1']['first_name']." ".$_SESSION['step_1']['last_name'] ?></span>
            <span class="question-span small block">Package service<span class="right bold"><?php echo $objProds->name_en?></span></span>
            <?php $disc = Discounts::model()->find("code=:promo", array(":promo"=>$step_6['discount']));
            if ($disc) {
            ?>
            <span class="question-span small block">
                Amount (without discounts)<span class="right bold"><?php echo number_format($objProds->price / 100 ,2)?> EUR</span>
            </span>
            <span class="question-span small block">
               Discount<span class="right bold"><?php echo number_format($objProds->price * ($disc->value / 100) / 100 ,2)?> EUR</span>
            </span>
            <span class="question-span small block">Amount (with discounts)<span class="right bold"><?php echo number_format(($objProds->price / 100) - ($objProds->price * ($disc->value / 100) / 100),2)?> EUR</span></span>
            <?php } else { ?>
            <span class="question-span small block">Amount<span class="right bold"><?php echo number_format($objProds->price / 100 ,2)?> EUR</span></span>
            <?php } ?>
            <div style="clear: both;"></div>
        </fieldset>
        <div style="clear: both;"></div>

        <label class="block">Payment</label>
        <div style="clear: both;"></div>
        <span class="question-span">Is the owner of the payment card by another person than the customer?</span>

        <label data-name="other-person" class="radio <?php echo ($sessData['other_person'] == 'yes')? 'active' : ''; ?>" for="other-person-yes">Yes</label>
        <label data-name="other-person" class="radio <?php echo ($sessData['other_person'] != 'yes')? 'active' : ''; ?>" for="other-person-no">No</label>
        <input id="other-person-yes" type="radio" name="other_person" value="yes" <?php echo ($sessData['other_person'] == 'yes')? 'checked="checked"' : ''; ?>>
        <input id="other-person-no" type="radio" name="other_person" value="no" <?php echo ($sessData['other_person']!= 'yes')? 'checked="checked"' : ''; ?>>
        <div style="clear: both;"></div>

        <section class="offset <?php echo ($sessData['other_person'] == 'yes')? '' : 'hidden-block'; ?> if-other-person">
            <fieldset class="right reg-3">
                <label>Cardholder's data</label>
                <input placeholder="Name of cardholder" type="text" name="c_fname" value="<?php echo $sessData['c_fname']; ?>" data-error="<?php echo $errors['c_fname']; ?>">
                <input placeholder="Last name of the card holder" type="text" name="c_lname" value="<?php echo $sessData['c_lname']; ?>" data-error="<?php echo $errors['c_lname']; ?>">
                <input placeholder="Street " type="text" name="c_street" value="<?php echo $sessData['c_street']; ?>" data-error="<?php echo $errors['c_street']; ?>">
                <input class="half" placeholder="House" type="text" name="c_house" value="<?php echo $sessData['c_house']; ?>" data-error="<?php echo $errors['c_house']; ?>">
                <input class="half separate" placeholder="Flat" type="text" name="c_flat" value="<?php echo $sessData['c_flat']; ?>" data-error="<?php echo $errors['c_flat']; ?>">
                <input placeholder="City" type="text" name="c_city" value="<?php echo $sessData['c_city']; ?>" data-error="<?php echo $errors['c_city']; ?>">
                
                <span style="width: 95%;display:inline-block;">
                    <input placeholder="Zip Code" type="text" name="c_zip" value="<?php echo $sessData['c_zip']; ?>" data-error="<?php echo $errors['c_zip']; ?>" style="float: left; width: 47%;">

                    <select name="c_country" data-error="<?php echo $errors['c_country']; ?>" style="float:right;width: 47%;">
                        <option value="IL"><?php echo Yii::t('skygroup','Israel')?></option>
                        <option value="RU"><?php echo Yii::t('skygroup','Russia')?></option>
                    </select>
                </span>
                <input placeholder="Email address" type="text" name="c_email" value="<?php echo $sessData['c_email']; ?>" data-error="<?php echo $errors['c_email']; ?>">
                <input placeholder="Contact phone number" type="text" name="c_phone" value="<?php echo $sessData['c_phone']; ?>" data-error="<?php echo $errors['c_phone']; ?>">
                <input placeholder="Contact mobile number" type="text" name="c_phone_mobile" value="<?php echo $sessData['c_phone_mobile']; ?>" data-error="<?php echo $errors['c_phone_mobile']; ?>">
                <div style="clear: both;"></div>
            </fieldset>
            <div style="clear: both;"></div>
        </section>

        <fieldset class="buttons">
            <a href="<?php echo Yii::app()->createUrl($lng .'/registration/step/6'); ?>" class="reversed left button">back</a>
            <input class="right pay" type="submit" value="Pay now">
            <a class="right cancel-link" href="/">Cancel</a>
        </fieldset>

        <div style="clear: both;"></div>
    </form>

</section>