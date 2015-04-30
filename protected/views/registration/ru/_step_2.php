<?php $cs = Yii::app()->clientScript; ?>
<?php $cs->registerScriptFile(Yii::app()->request->baseUrl."/js/jquery.mask.min.js", CClientScript::POS_END); ?>
<?php $cs->registerScript("promomask", "$('.promo').mask('000000000');", CClientScript::POS_END, array(CClientScript::POS_READY)); ?>
<?php $step_1 = $got->get('step_1'); ?>
<section class="form-area">
   <?php echo CHtml::beginForm();?>
        <fieldset class="reg-1">
            <a href="#" class="question" data-questionmark="Some info"></a>

            <input data-error="<?php echo $errors['id_number']; ?>" class="promo <?php echo $errors['id_number']? 'error' : '' ?>" placeholder="Номер удостоверения личности" type="text" name="id_number" value="<?php echo $sessData['id_number']?>">

            <input class="<?php echo $errors['first_name']? 'error' : '' ?>" data-error="<?php echo $errors['first_name']; ?>" placeholder="Имя (вписываются с первой страницы)" type="text" name="first_name" value="<?php echo ($sessData['first_name'] ? $sessData['first_name'] : $step_1['first_name']); ?>">
            <input class="<?php echo $errors['last_name']? 'error' : '' ?>" data-error="<?php echo $errors['last_name']; ?>" placeholder="Фамилия (вписываются с первой страницы)" type="text" name="last_name" value="<?php echo ($sessData['last_name'] ? $sessData['last_name'] : $step_1['last_name']); ?>">
            
             <label>Дата Рождения</label>

            <div style="clear: both;"></div>

            <select class="<?php echo $errors['day']? 'error' : '' ?>" name="day" class="selector-1" style="width: 30%;margin-right: 5%;">
                <option value="">Число</option>
<?php
    for ($i=1; $i<32; $i++) {
        echo '<option value="'.$i.'"'.($sessData['day'] == $i ? ' selected="selected"':'').'>'.$i.'</option>';
    }
?>
            </select>

            <select class="<?php echo $errors['month']? 'error' : '' ?>" name="month" class="selector-2" style="width: 30%;margin-right: 5%;">
                <option value="">Месяц</option>
<?php
    for ($i=1; $i<13; $i++) {
        echo '<option value="'.$i.'"'.($sessData['month'] == $i ? ' selected="selected"':'').'>'.$i.'</option>';
    }
?>
            </select>

            <select class="<?php echo $errors['year']? 'error' : '' ?>" name="year" class="selector-3" style="width: 30%;">
                <option value="">Год</option>
<?php
    for ($i=date('Y')-14; $i>date('Y')-100; $i--) {
        echo '<option value="'.$i.'"'.($sessData['year'] == $i ? ' selected="selected"':'').'>'.$i.'</option>';
    }
?>
            </select>
            
        </fieldset>
        <fieldset class="reg-2">
            <input class="<?php echo $errors['street']? 'error' : '' ?>" data-error="<?php echo $errors['street']; ?>" placeholder="Улица" type="text" name="street" value="<?php echo $sessData['street']?>">
            <input class="<?php echo $errors['house']? 'error' : '' ?>" data-error="<?php echo $errors['house']; ?>" placeholder="Дом" type="text" name="house" value="<?php echo $sessData['house']?>">
            <input class="<?php echo $errors['flat']? 'error' : '' ?>" data-error="<?php echo $errors['flat']; ?>" placeholder="Квартира" type="text" name="flat" value="<?php echo $sessData['flat']?>">
            <input class="<?php echo $errors['city']? 'error' : '' ?>" data-error="<?php echo $errors['city']; ?>" placeholder="Город" type="text" name="city" value="<?php echo $sessData['city']; ?>">
            <input class="<?php echo $errors['country']? 'error' : '' ?>" data-error="<?php echo $errors['country']; ?>" placeholder="Страна" type="text" name="country" value="<?php echo $sessData['country']; ?>">
            <input class="<?php echo $errors['post_code']? 'error' : '' ?>" data-error="<?php echo $errors['post_code']; ?>" placeholder="Почтовый Индекс (Россия)" type="text" name="post_code" value="<?php echo $sessData['post_code']; ?>">
            <input class="<?php echo $errors['phone']? 'error' : '' ?>" data-error="<?php echo $errors['phone']; ?>" placeholder="Домашний Телефон" type="text" name="phone" value="<?php echo $sessData['phone']; ?>">
            <input class="<?php echo $errors['mobile_phone']? 'error' : '' ?>" data-error="<?php echo $errors['mobile_phone']; ?>" placeholder="Мобильный телефон" type="text" name="mobile_phone" value="<?php echo $sessData['mobile_phone']; ?>">

        </fieldset>
        
        <fieldset class="reg-3 small-height">
            <input class="<?php echo $errors['profession']? 'error' : '' ?>" data-error="<?php echo $errors['profession']; ?>" placeholder="Профессия" type="text" name="profession" value="<?php echo $sessData['profession']; ?>">
            <input class="<?php echo $errors['employment']? 'error' : '' ?>" data-error="<?php echo $errors['employment']; ?>" placeholder="Место работы" type="text" name="employment" value="<?php echo $sessData['employment']; ?>">
        </fieldset>

        
        <fieldset class="buttons">
            <a href="/registration/step/1" class="reversed left button">Назад</a>
            <input class="right" type="submit" value="Далее">
        </fieldset>
        
        <div style="clear: both;"></div>
    <?php echo CHtml::endForm();?>
</section>
