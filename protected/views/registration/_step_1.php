<section class="form-area">
    <?php echo CHtml::beginForm();?>
         <fieldset class="reg-1">
            <a href="#" class="question"></a>
            
            <input class="promo <?php echo $errors['promotion_number']? 'error' : '' ?>"
             placeholder="Номер промоутера" type="text" name="promotion_number" value="<?php echo $sessData['promotion_number']?>">
           
            <input placeholder="Имя" class="<?php echo $errors['user_name']? 'error' : '' ?>"
             type="text" name="user_name" value="<?php echo $sessData['user_name']?>">
           
            <input placeholder="Фамилия"  class="<?php echo $errors['last_name']? 'error' : '' ?>"
             type="text" name="last_name" value="<?php echo $sessData['last_name']?>">
        </fieldset>
        <fieldset class="reg-2">
            <input placeholder="Электронная почта"  class="<?php echo $errors['email']? 'error' : '' ?>"
             type="text" name="email" value="<?php echo $sessData['email']?>">
             
            <input placeholder="Пароль"  class="<?php echo $errors['password']? 'error' : '' ?>"
             type="password" name="password" value="">
             
            <input placeholder="Повторите пароль"  class="<?php echo $errors['next_pass']? 'error' : '' ?>"
             type="password" name="next_pass" value="">
            
            <input type="submit" value="Далее">
        </fieldset>
    <?php echo CHtml::endForm();?>
</section>