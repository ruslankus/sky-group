<section class="form-area">
   <?php echo CHtml::beginForm();?>
        <fieldset class="reg-1">
            <a href="#" class="question"></a>

            <input class="promo" placeholder="Номер ID" type="text" name="id_number" value="<?php echo $sessData['id_number']?>">

            <input placeholder="Имя (вписываются с первой страницы)" type="text" name="fname" value="<?php echo $sessData['fname']?>">
            <input placeholder="Фамилия (вписываются с первой страницы)" type="text" name="lname" value="<?php echo $sessData['lname']?>">
            
             <label>Дата Рождения</label>

            <div style="clear: both;"></div>

            <select class="selector-1">
                <option>Число</option>
            </select>

            <select class="selector-2">
                <option>Месяц</option>
            </select>

            <select class="selector-3">
                <option>Год</option>
            </select>
            
        </fieldset>
        <fieldset class="reg-2">
            <input placeholder="Улица" type="text" name="street" value="<?php echo $sessData['street']?>">
            <input placeholder="Дом" type="text" name="house" value="<?php echo $sessData['house']?>">
            <input placeholder="Квартира" type="text" name="flat" value="<?php echo $sessData['flat']?>">
            <input placeholder="Город" type="text" name="city" value="<?php echo $sessData['city']; ?>">
            <input placeholder="Страна" type="text" name="country" value="<?php echo $sessData['country']; ?>">
            <input placeholder="Почтовый Индекс (Россия)" type="text" name="post_code" value="">
            <input placeholder="Домашний Телефон" type="text" name="phone" value="<?php echo $sessData['phone']; ?>">
            <input placeholder="Мобильный телефон" type="text" name="mphone" value="<?php echo $sessData['mphone']; ?>">

        </fieldset>
        
        <fieldset class="reg-3 small-height">
            <input placeholder="Профессия" type="text" name="profession" value="<?php echo $sessData['profession']; ?>">
            <input placeholder="Место работы" type="text" name="employment" value="<?php echo $sessData['employment']; ?>">
        </fieldset>

        
        <fieldset class="buttons">
            <a href="/registration/step/1" class="reversed left button">Назад</a>
            <input class="right" type="submit" value="Далее">
        </fieldset>
        
        <div style="clear: both;"></div>
    <?php echo CHtml::endForm();?>
</section>
