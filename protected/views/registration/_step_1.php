<section class="form-area">
    <?php echo CHtml::beginForm();?>
         <fieldset class="reg-1">
            <a href="#" class="question"></a>
            <input class="promo" placeholder="Номер промоутера" type="text" name="promotion_number" value="<?php echo $sessData['promotion_number']?>">
            <input placeholder="Имя" type="text" name="user_name" value="<?php echo $sessData['user_name']?>">
            <input placeholder="Фамилия" type="text" name="last_name" value="<?php echo $sessData['last_name']?>">
        </fieldset>
        <fieldset class="reg-2">
            <input placeholder="Электронная почта" type="text" name="email" value="<?php echo $sessData['email']?>">
            <input placeholder="Пароль" type="password" name="password" value="">
            <input placeholder="Повторите пароль" type="password" name="next_pass" value="">
            <input type="submit" value="Далее">
        </fieldset>
    <?php echo CHtml::endForm();?>
</section>