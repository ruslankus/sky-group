<section class="form-area">
    <?php echo CHtml::beginForm();?>
         <fieldset class="reg-1">
            <a href="#" class="question" style="top: 32px;" data-questionmark="without filling the agent's number in, it is not possible to proceed"></a>
            <span class="promo">Promoter's number</span>
            <span style="display: block; width:95%;" data-error="<?php echo $errors['promotion_number']; ?>">
                <input maxlength="1" style="width: 15%;margin-right:2%;text-align:center;" class="promo <?php echo $errors['promotion_number']? 'error' : '' ?>" type="text" name="promotion_number_1" value="<?php echo $sessData['promotion_number_1']?>">
                <input maxlength="1" style="width: 15%;margin-right:10%;text-align:center;" class="promo <?php echo $errors['promotion_number']? 'error' : '' ?>" type="text" name="promotion_number_2" value="<?php echo $sessData['promotion_number_2']?>">
                <input maxlength="1" style="width: 18%;margin-right:2%;text-align:center;" class="promo <?php echo $errors['promotion_number']? 'error' : '' ?>" type="text" name="promotion_number_3" value="<?php echo $sessData['promotion_number_3']?>">
                <input maxlength="1" style="width: 18%;margin-right:2%;text-align:center;" class="promo <?php echo $errors['promotion_number']? 'error' : '' ?>" type="text" name="promotion_number_4" value="<?php echo $sessData['promotion_number_4']?>">
                <input maxlength="1" style="width: 18%;text-align:center;" class="promo <?php echo $errors['promotion_number']? 'error' : '' ?>" type="text" name="promotion_number_5" value="<?php echo $sessData['promotion_number_5']?>">
            </span>
           
            <input data-error="<?php echo $errors['user_name']; ?>" placeholder="Name" class="<?php echo $errors['user_name']? 'error' : '' ?>"
             type="text" name="user_name" value="<?php echo $sessData['user_name']?>">
           
            <input data-error="<?php echo $errors['last_name']; ?>" placeholder="Surname"  class="<?php echo $errors['last_name']? 'error' : '' ?>"
             type="text" name="last_name" value="<?php echo $sessData['last_name']?>">
        </fieldset>
        <fieldset class="reg-2">
            <input data-error="<?php echo $errors['email']; ?>" placeholder="Email"  class="<?php echo $errors['email']? 'error' : '' ?>"
             type="text" name="email" value="<?php echo $sessData['email']?>">
             
            <input data-error="<?php echo $errors['password']; ?>" placeholder="Password"  class="<?php echo $errors['password']? 'error' : '' ?>"
             type="password" name="password" value="">
             
            <input data-error="<?php echo $errors['next_pass']; ?>" placeholder="Repeat password"  class="<?php echo $errors['next_pass']? 'error' : '' ?>"
             type="password" name="next_pass" value="">
            
            <input type="submit" value="Next step">
        </fieldset>
    <?php echo CHtml::endForm();?>
</section>