<?php $step_1 = $got->get('step_1'); ?>
<section class="form-area">

    <?php echo CHtml::beginForm();?>

        <span class="question-span">Состоите ли Вы в браке?</span>

        <label data-name="married" class="radio <?php echo ($sessData['married'] == 'yes')? 'active' : ''; ?>" for="married-yes">Да</label>
        <label data-name="married" class="radio <?php echo ($sessData['married'] != 'yes')? 'active' : ''; ?>" for="married-no">Нет</label>
        <input id="married-yes" type="radio" name="married" value="yes" <?php echo ($sessData['married'] == 'yes')? 'checked="checked"' : ''; ?>>
        <input id="married-no" type="radio"  name="married" value="no" <?php echo ($sessData['married'] != 'yes')? 'checked="checked"' : ''; ?>>

        <div style="clear: both;"></div>
        <section class="offset <?php echo ($sessData['married'] == 'yes')? '' : 'hidden-block'; ?> if-married">
            <fieldset class="reg-3">
               <span class="promo">Номер удостоверения личности</span>
                <span style="display: block; width:95%;" data-error="<?php echo $errors['id_number']; ?>">
                    <input maxlength="1" style="width: 9%;margin-right:2.3%;text-align:center;" class="promo <?php echo $errors['id_number_1']? 'error' : '' ?>" type="text" name="id_number_1" value="<?php echo $sessData['id_number_1']; ?>">
                    <input maxlength="1" style="width: 9%;margin-right:2.3%;text-align:center;" class="promo <?php echo $errors['id_number_2']? 'error' : '' ?>" type="text" name="id_number_2" value="<?php echo $sessData['id_number_2']?>">
                    <input maxlength="1" style="width: 9%;margin-right:2.3%;text-align:center;" class="promo <?php echo $errors['id_number_3']? 'error' : '' ?>" type="text" name="id_number_3" value="<?php echo $sessData['id_number_3']?>">
                    <input maxlength="1" style="width: 9%;margin-right:2.3%;text-align:center;" class="promo <?php echo $errors['id_number_4']? 'error' : '' ?>" type="text" name="id_number_4" value="<?php echo $sessData['id_number_4']?>">
                    <input maxlength="1" style="width: 9%;margin-right:2.3%;text-align:center;" class="promo <?php echo $errors['id_number_5']? 'error' : '' ?>" type="text" name="id_number_5" value="<?php echo $sessData['id_number_5']?>">
                    <input maxlength="1" style="width: 9%;margin-right:2.3%;text-align:center;" class="promo <?php echo $errors['id_number_6']? 'error' : '' ?>" type="text" name="id_number_6" value="<?php echo $sessData['id_number_6']?>">
                    <input maxlength="1" style="width: 9%;margin-right:2.3%;text-align:center;" class="promo <?php echo $errors['id_number_7']? 'error' : '' ?>" type="text" name="id_number_7" value="<?php echo $sessData['id_number_7']?>">
                    <input maxlength="1" style="width: 9%;margin-right:2.3%;text-align:center;" class="promo <?php echo $errors['id_number_8']? 'error' : '' ?>" type="text" name="id_number_8" value="<?php echo $sessData['id_number_8']?>">
                    <input maxlength="1" style="width: 9%;text-align:center;" class="promo <?php echo $errors['id_number_9']? 'error' : '' ?>" type="text" name="id_number_9" value="<?php echo $sessData['id_number_9']?>">
                </span>
                
                <input class="<?php echo $errors['p_fname']? 'error' : '' ?>" data-error="<?php echo $errors['p_fname']; ?>" placeholder="Имя" type="text" name="p_fname" value="<?php echo $sessData['p_fname']?>">
                <input class="<?php echo $errors['p_lname']? 'error' : '' ?>" data-error="<?php echo $errors['p_lname']; ?>" placeholder="Фамилия" type="text" name="p_lname" value="<?php echo ($sessData['p_lname'] ? $sessData['p_lname'] : $step_1['last_name']); ?>">
                
                <label>Дата Рождения</label>
                <div style="clear: both;"></div>
                <select class="selector-1 <?php echo $errors['bday']? 'error' : '' ?>" name="bday">
                    <option value="">Число</option>
<?php
    for ($i=1; $i<32; $i++) {
        echo '<option value="'.$i.'"'.($sessData['bday'] == $i ? ' selected="selected"':'').'>'.$i.'</option>';
    }
?>    
                </select>
                <select class="selector-2 <?php echo $errors['bmonth']? 'error' : '' ?>" name="bmonth">
                    <option value="">Месяц</option>
<?php
    for ($i=1; $i<13; $i++) {
        echo '<option value="'.$i.'"'.($sessData['bmonth'] == $i ? ' selected="selected"':'').'>'.$i.'</option>';
    }
?>   
                </select>
                <select class="selector-3 <?php echo $errors['byear']? 'error' : '' ?>" name="byear">
                    <option value="">Год</option>
<?php
    for ($i=date('Y')-14; $i>date('Y')-100; $i--) {
        echo '<option value="'.$i.'"'.($sessData['byear'] == $i ? ' selected="selected"':'').'>'.$i.'</option>';
    }
?> 
                </select>
            </fieldset>

            <div style="clear: both;"></div>

            <fieldset class="reg-3 small-height">
                <input class="<?php echo $errors['profession']? 'error' : '' ?>" data-error="<?php echo $errors['profession']; ?>" placeholder="Профессия" type="text" name="profession" value="<?php echo $sessData['profession']; ?>">
                <input class="<?php echo $errors['employment']? 'error' : '' ?>" data-error="<?php echo $errors['employment']; ?>" placeholder="Место работы" type="text" name="employment" value="<?php echo $sessData['employment']; ?>">
            </fieldset>

            <div style="clear: both;"></div>
            <span class="question-span">Тот же адрес, как у вас?</span>

            <label data-name="same-address" class="radio <?php echo ($sessData['same_address'] != 'no')? 'active' : ''; ?>" for="same-yes">Да</label>
            <label data-name="same-address" class="radio <?php echo ($sessData['same_address'] == 'no')? 'active' : ''; ?>" for="same-no">Нет</label>
            <input id="same-yes" type="radio" name="same_address" value="yes" <?php echo ($sessData['same_address'] != 'no')? 'checked="checked"' : ''; ?>>
            <input id="same-no" type="radio"  name="same_address" value="no" <?php echo ($sessData['same_address'] == 'no')? 'checked="checked"' : ''; ?>>

            <div style="clear: both;"></div>
            
                <section class="offset <?php echo ($sessData['same_address'] != 'no')? 'hidden-block' : ''; ?>  if-same">
                    <fieldset class="reg-3">
                        <input class="<?php echo $errors['street']? 'error' : '' ?>" data-error="<?php echo $errors['street']; ?>" placeholder="Улица" type="text" name="street" value="<?php echo $sessData['street']?>">
                            <span style="width:95%;display:block;">
                                <input class="<?php echo $errors['house']? 'error' : '' ?>" data-error="<?php echo $errors['house']; ?>" placeholder="Дом" type="text" name="house" value="<?php echo $sessData['house']?>" style="width:47%;margin-right:6%;">
                                <input class="<?php echo $errors['flat']? 'error' : '' ?>" data-error="<?php echo $errors['flat']; ?>" placeholder="Квартира" type="text" name="flat" value="<?php echo $sessData['flat']?>" style="width:47%;">
                            </span>
                            <input class="<?php echo $errors['city']? 'error' : '' ?>" data-error="<?php echo $errors['city']; ?>" placeholder="Город" type="text" name="city" value="<?php echo $sessData['city']; ?>">
                            <span style="width:95%;display:block;">
                                <input class="<?php echo $errors['country']? 'error' : '' ?>" data-error="<?php echo $errors['country']; ?>" placeholder="Страна" type="text" name="country" value="<?php echo $sessData['country']; ?>" style="width:47%;margin-right:6%;">
                                <input class="<?php echo $errors['post_code']? 'error' : '' ?>" data-error="<?php echo $errors['post_code']; ?>" placeholder="Почтовый Индекс (Россия)" type="text" name="post_code" value="<?php echo $sessData['post_code']; ?>" style="width:47%;">
                            </span>
                    </fieldset>

                    <div style="clear: both;"></div>
                </section>
        </section>

        <fieldset class="buttons">
            <a href="<?php echo Yii::app()->createUrl( $lng .'/registration/step/2'); ?>" class="reversed left button">Назад</a>
            <input class="right" type="submit" value="Далее">
        </fieldset>

        <div style="clear: both;"></div>
     <?php echo CHtml::beginForm();?>

</section>
