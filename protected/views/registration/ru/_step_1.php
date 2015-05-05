<section class="form-area">
    <?php echo CHtml::beginForm();?>
         <fieldset class="reg-1">
            <a href="#" style="top: 32px;" class="question" data-questionmark="при отсутствии номера промоутера исключается возможность дальнейшего заполнения анкетных данных"></a>
           <span class="promo underline">Номер Промоутера</span>
            <span style="display: block; width:95%;" data-error="<?php echo !empty($errors['promotion_number'])? $errors['promotion_number']:''; ?>">
                <input maxlength="1" style="width: 15%;margin-right:2%;text-align:center;"
                       class="promo <?php echo !empty($errors['promotion_number'])? 'error' : '' ?>"
                       type="text" name="promotion_number_1" value="<?php echo !empty($sessData['promotion_number_1'])? $sessData['promotion_number_1']: '' ?>">


                <input maxlength="1" style="width: 15%;margin-right:10%;text-align:center;"
                       class="promo <?php echo !empty($errors['promotion_number'])? 'error' : '' ?>" type="text" name="promotion_number_2"
                       value="<?php echo !empty($sessData['promotion_number_2'])? $sessData['promotion_number_2']: ''?>">


                <input maxlength="1" style="width: 18%;margin-right:2%;text-align:center;"
                       class="promo <?php echo !empty($errors['promotion_number'])? 'error' : '' ?>"
                       type="text" name="promotion_number_3" value="<?php echo !empty($sessData['promotion_number_3'])? $sessData['promotion_number_3']: '' ?>">


                <input maxlength="1" style="width: 18%;margin-right:2%;text-align:center;" class="promo <?php echo !empty($errors['promotion_number'])? 'error' : '' ?>"
                       type="text" name="promotion_number_4" value="<?php echo !empty($sessData['promotion_number_4'])? $sessData['promotion_number_4']: ''?>">


                <input maxlength="1" style="width: 18%;text-align:center;" class="promo <?php echo !empty($errors['promotion_number'])? 'error' : '' ?>"
                       type="text" name="promotion_number_5" value="<?php echo !empty($sessData['promotion_number_5'])? $sessData['promotion_number_5'] : ''?>">
            </span>
             
            <input data-error="<?php echo !empty($errors['first_name'])? $errors['first_name']: ''; ?>"
                   placeholder="Имя" class="<?php echo !empty($errors['first_name'])? 'error' : '' ?>"
             type="text" name="first_name" value="<?php echo !empty($sessData['first_name'])? $sessData['first_name']: '' ?>">
           
            <input data-error="<?php echo $errors['last_name']; ?>" placeholder="Фамилия"  class="<?php echo $errors['last_name']? 'error' : '' ?>"
             type="text" name="last_name" value="<?php echo $sessData['last_name']?>">
        </fieldset>
        <fieldset class="reg-2">
            <input data-error="<?php echo $errors['email']; ?>" placeholder="Электронная почта"  class="<?php echo $errors['email']? 'error' : '' ?>"
             type="text" name="email" value="<?php echo $sessData['email']?>">
             
            <input data-error="<?php echo $errors['password']; ?>" placeholder="Пароль"  class="<?php echo $errors['password']? 'error' : '' ?>"
             type="password" name="password" value="">
             
            <input data-error="<?php echo $errors['next_pass']; ?>" placeholder="Пароль"  class="<?php echo $errors['next_pass']? 'error' : '' ?>"
             type="password" name="next_pass" value="">
            
            <input type="submit" value="Далее">
        </fieldset>
    <?php echo CHtml::endForm();?>
</section>