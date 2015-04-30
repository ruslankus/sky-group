<?php ?>
<fieldset class="reg-3" id="children_<?php echo $child; ?>" data-children="<?php echo $child; ?>">
    <label class="bold-label"><?php echo $child+1; ?>st child</label>
    <input placeholder="Name" type="text" name="children[<?php echo $child; ?>][name]" value="">
    <input placeholder="Surname" type="text" name="children[<?php echo $child; ?>][surname]" value="">
    <label>Date of birth</label>
    <div style="clear: both;"></div>
    <select name="children[<?php echo $child; ?>][day]" class="selector-1">
        <option value="">Day</option>
        <?php
    for ($i=1; $i<32; $i++) {
        echo '<option value="'.$i.'">'.$i.'</option>';
    }
    ?>
    </select>
    <select name="children[<?php echo $child; ?>][month]" class="selector-2">
        <option value="">Month</option>
        <?php
    for ($i=1; $i<13; $i++) {
        echo '<option value="'.$i.'">'.$i.'</option>';
    }
    ?>
    </select>
    <select name="children[<?php echo $child; ?>][year]" class="selector-3">
        <option value="">Year</option>
        <?php
    for ($i=date('Y')-14; $i>date('Y')-100; $i--) {
        echo '<option value="'.$i.'">'.$i.'</option>';
    }
    ?>
    </select>
</fieldset>
<div style="clear: both;"></div>