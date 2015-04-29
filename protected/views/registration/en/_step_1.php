<?php $cs = Yii::app()->clientScript; ?>
<?php $cs->registerScriptFile(Yii::app()->request->baseUrl."/js/jquery.mask.min.js", CClientScript::POS_END); ?>
<?php $cs->registerScript("promomask", "$('.promo').mask('AA 000', {
    translation: {
      A: {pattern: /[A-Za-z]/}
    }
  });", CClientScript::POS_END, array(CClientScript::POS_READY)); ?>
<section class="form-area">
    <?php echo CHtml::beginForm();?>
         <fieldset class="reg-1">
            <a href="#" class="question" data-questionmark="укажите номер агента для дальнейшей регистрации"></a>
            
            <input data-error="<?php echo $errors['promotion_number']; ?>" class="promo <?php echo $errors['promotion_number']? 'error' : '' ?>"
             placeholder="Номер промоутера" type="text" name="promotion_number" value="<?php echo $sessData['promotion_number']?>">
           
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