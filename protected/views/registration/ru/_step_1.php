<section class="form-area">
    <?php echo CHtml::beginForm();?>
         <fieldset class="reg-1">
            <a href="#" class="question" data-questionmark="There should be some long or not long text."></a>
           <span class="promo">Номер промоутера</span>
            <span style="display: block; width:95%;" data-error="<?php echo $errors['promotion_number']; ?>">
                <input maxlength="1" style="width: 9%;margin-left:2%;text-align:center;" class="promo <?php echo $errors['promotion_number']? 'error' : '' ?>" type="text" name="promotion_number_1" value="<?php echo $sessData['promotion_number_1']?>">
                <input maxlength="1" style="width: 9%;margin-left:2%;text-align:center;" class="promo <?php echo $errors['promotion_number']? 'error' : '' ?>" type="text" name="promotion_number_2" value="<?php echo $sessData['promotion_number_2']?>">
                <input maxlength="1" style="width: 9%;margin-left:2%;text-align:center;" class="promo <?php echo $errors['promotion_number']? 'error' : '' ?>" type="text" name="promotion_number_3" value="<?php echo $sessData['promotion_number_3']?>">
                <input maxlength="1" style="width: 9%;margin-left:2%;text-align:center;" class="promo <?php echo $errors['promotion_number']? 'error' : '' ?>" type="text" name="promotion_number_4" value="<?php echo $sessData['promotion_number_4']?>">
                <input maxlength="1" style="width: 9%;margin-left:2%;text-align:center;" class="promo <?php echo $errors['promotion_number']? 'error' : '' ?>" type="text" name="promotion_number_5" value="<?php echo $sessData['promotion_number_5']?>">
                <input maxlength="1" style="width: 9%;margin-left:2%;text-align:center;" class="promo <?php echo $errors['promotion_number']? 'error' : '' ?>" type="text" name="promotion_number_6" value="<?php echo $sessData['promotion_number_6']?>">
                <input maxlength="1" style="width: 9%;margin-left:2%;text-align:center;" class="promo <?php echo $errors['promotion_number']? 'error' : '' ?>" type="text" name="promotion_number_7" value="<?php echo $sessData['promotion_number_7']?>">
                <input maxlength="1" style="width: 9%;margin-left:2%;text-align:center;" class="promo <?php echo $errors['promotion_number']? 'error' : '' ?>" type="text" name="promotion_number_8" value="<?php echo $sessData['promotion_number_8']?>">
                <input maxlength="1" style="width: 9%;margin-left:2%;text-align:center;" class="promo <?php echo $errors['promotion_number']? 'error' : '' ?>" type="text" name="promotion_number_9" value="<?php echo $sessData['promotion_number_9']?>">
            </span>
             
            <input data-error="<?php echo $errors['user_name']; ?>" placeholder="Имя" class="<?php echo $errors['user_name']? 'error' : '' ?>"
             type="text" name="user_name" value="<?php echo $sessData['user_name']?>">
           
            <input data-error="<?php echo $errors['last_name']; ?>" placeholder="Фамилия"  class="<?php echo $errors['last_name']? 'error' : '' ?>"
             type="text" name="last_name" value="<?php echo $sessData['last_name']?>">
        </fieldset>
        <fieldset class="reg-2">
            <input data-error="<?php echo $errors['email']; ?>" placeholder="Электронная почта"  class="<?php echo $errors['email']? 'error' : '' ?>"
             type="text" name="email" value="<?php echo $sessData['email']?>">
             
            <input data-error="<?php echo $errors['password']; ?>" placeholder="Пароль"  class="<?php echo $errors['password']? 'error' : '' ?>"
             type="password" name="password" value="">
             
            <input data-error="<?php echo $errors['next_pass']; ?>" placeholder="Повторите пароль"  class="<?php echo $errors['next_pass']? 'error' : '' ?>"
             type="password" name="next_pass" value="">
            
            <input type="submit" value="Далее">
        </fieldset>
    <?php echo CHtml::endForm();?>
</section>