<section class="form-area">

    <?php echo CHtml::beginForm();?>

        <span class="question-span">Состоите ли Вы в браке?</span>

        <label data-name="married" class="radio" for="married-yes">Да</label>
        <label data-name="married" class="radio active" for="married-no">Нет</label>
        <input id="married-yes" type="radio" name="married" value="yes">
        <input id="married-no" type="radio"  name="married" value="no">

        <div style="clear: both;"></div>

        <section class="offset <?php echo ($sessData['married'] == 'Yes')? '' : 'hidden-block'; ?> if-married">
            <fieldset class="reg-3">
                <a href="#" class="question"></a>
                <input class="promo" placeholder="Номер ID" type="text" name="partner_Id" value="<?php echo $sessData['partner_Id']?>">
                <input placeholder="Имя (вписываются с первой страницы)" type="text" name="p_fname" value="<?php echo $sessData['p_fname']?>">
                <input placeholder="Фамилия (вписываются с первой страницы)" type="text" name="p_lname" value="<?php echo $sessData['p_lname']?>">
                <label>Дата Рождения</label>
                <div style="clear: both;"></div>
                <select class="selector-1" name="bday">
                <?php if(!empty($sessData['bday'])):?>
                     <option><?php echo $sessData['bday']; ?></option>
                <?php else:?>
                    <option>Число</option>
                <?php endif;?>    
                </select>
                <select class="selector-2" name="bmonth">
                <?php if(!empty($sessData['bmonth'])):?>
                     <option><?php echo $sessData['bmonth']; ?></option>
                <?php else:?>
                    <option>Месяц</option>
                <?php endif;?>    
                </select>
                <select class="selector-3" name="byear">
                <?php if(!empty($sessData['byear'])):?>
                     <option><?php echo $sessData['byear']; ?></option>
                <?php else:?>
                    <option>Год</option>
                <?php endif;?>    
                </select>
            </fieldset>

            <div style="clear: both;"></div>

            <fieldset class="reg-3 small-height">
                <input placeholder="Профессия" type="text" name="profession" value="<?php echo $sessData['profession']; ?>">
                <input placeholder="Место работы" type="text" name="employment" value="<?php echo $sessData['employment']; ?>">
            </fieldset>

            <div style="clear: both;"></div>
        </section>

        <fieldset class="buttons">
            <a href="/registration/step/2" class="reversed left button">Назад</a>
            <input class="right" type="submit" value="Далее">
        </fieldset>

        <div style="clear: both;"></div>
     <?php echo CHtml::beginForm();?>

</section>
