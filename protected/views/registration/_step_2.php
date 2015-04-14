<section class="form-area">
   <?php echo CHtml::beginForm();?>
        <fieldset class="reg-1">
            <a href="#" class="question"></a>
            <input class="promo" placeholder="Номер ID" type="text" name="id_number" value="<?php echo $sessData['id_number']?>">
            <input placeholder="Имя (вписываются с первой страницы)" type="text" name="fname" value="<?php echo $sessData['fname']?>">
            <input placeholder="Фамилия (вписываются с первой страницы)" type="text" name="lname" value="<?php echo $sessData['lname']?>">
        </fieldset>
        <fieldset class="reg-2">
            <input placeholder="Улица" type="text" name="street" value="<?php echo $sessData['street']?>">
            <input placeholder="Дом" type="text" name="house" value="<?php echo $sessData['house']?>">
            <input placeholder="Квартира" type="text" name="flat" value="<?php echo $sessData['flat']?>">
            <input type="submit" value="Далее">
        </fieldset>
        <div style="clear: both;"></div>
    <?php echo CHtml::endForm();?>
</section>
