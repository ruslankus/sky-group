<fieldset class="reg-3" id="children_<?php echo $child; ?>" data-children="<?php echo $child; ?>">
    <label class="bold-label"><?php echo Yii::t('yii.skygroup','n==1#1st child|n==2#2nd child|n==3#3th child|n>3#{n}th child', ($child+1), null, $lng); ?></label>
    <input placeholder="<?php echo ($lng =='en'?'Name':'Имя'); ?>" type="text" name="children[<?php echo $child; ?>][name]" value="">
    <input placeholder="<?php echo ($lng =='en'?'Surname':'Имя'); ?>" type="text" name="children[<?php echo $child; ?>][surname]" value="">
    <label><?php echo ($lng =='en'?'Date of birth':'Дата Рождения'); ?></label>
    <div style="clear: both;"></div>
    <select name="children[<?php echo $child; ?>][day]" class="selector-1">
        <option value=""><?php echo ($lng =='en'?'Day':'Число'); ?></option>
        <?php
    for ($i=1; $i<32; $i++) {
        echo '<option value="'.$i.'">'.$i.'</option>';
    }
    ?>
    </select>
    <select name="children[<?php echo $child; ?>][month]" class="selector-2">
        <option value=""><?php echo ($lng =='en'?'Month':'Месяц'); ?></option>
        <?php
    for ($i=1; $i<13; $i++) {
        echo '<option value="'.$i.'">'.$i.'</option>';
    }
    ?>
    </select>
    <select name="children[<?php echo $child; ?>][year]" class="selector-3">
        <option value=""><?php echo ($lng =='en'?'Year':'Год'); ?></option>
        <?php
    for ($i=date('Y')-14; $i>date('Y')-100; $i--) {
        echo '<option value="'.$i.'">'.$i.'</option>';
    }
    ?>
    </select>
</fieldset>
<div style="clear: both;"></div>