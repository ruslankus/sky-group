<section class="form-area">

     <?php echo CHtml::beginForm();?>

        <span class="question-span">Do you have children ?</span>

        <label data-name="children" class="radio <?php echo ($sessData['has_children'] == 'yes')? 'active' : ''; ?>" for="children-yes">Yes</label>
        <label data-name="children" class="radio <?php echo ($sessData['has_children'] != 'yes')? 'active' : ''; ?>" for="children-no">No</label>
        <input id="children-yes" type="radio" name="has_children" value="yes" <?php echo ($sessData['has_children'] == 'yes')? 'checked="checked"' : ''; ?>>
        <input id="children-no" type="radio" name="has_children" value="no" <?php echo ($sessData['has_children'] != 'yes')? 'checked="checked"' : ''; ?>>
        <div style="clear: both;"></div>

        <section class="offset <?php echo ($sessData['has_children'] == 'yes')? '' : 'hidden-block'; ?> if-children">
            <div class="children-list">
            <?php
print_r($errors);
                if ($errors) {
                    foreach ($sessData['children'] as $id=>$child) {
                ?>
                <fieldset class="reg-3" id="children_<?php echo $id; ?>">
                    <label class="bold-label"><?php echo $id+1; ?>st child</label>
                    <input class="<?php echo $errors["children[$id][name]"] ? 'error' : '' ?>" data-error="<?php echo ($errors["children[$id][name]"] ? $errors["children[$id][name]"]:''); ?>" placeholder="Name" type="text" name="children[<?php echo $id; ?>][name]" value="<?php echo $sessData['children'][$id]['name']; ?>">
                    <input class="<?php echo $errors["children[$id][surname]"] ? 'error' : '' ?>" data-error="<?php echo ($errors["children[{$id}][surname]"] ? $errors["children[{$id}][surname]"]:''); ?>" placeholder="Surname" type="text" name="children[<?php echo $id; ?>}][surname]" value="<?php echo $sessData['children'][$id]['surname']; ?>">
                    <label>Date of birth</label>
                    <div style="clear: both;"></div>
                    <select class="selector-1 <?php echo $errors["children[$id][day]"] ? 'error' : '' ?>" name="children[0][day]">
                        <option value="">Day</option>
                        <?php
                    for ($i=1; $i<32; $i++) {
                        echo '<option value="'.$i.'"'.($sessData['children'][$id]['day'] == $i ? ' selected="selected"':'').'>'.$i.'</option>';
                    }
                    ?>
                    </select>
                    <select class="selector-2 <?php echo $errors["children[$id][month]"] ? 'error' : '' ?>" name="children[0][month]">
                        <option value="">Month</option>
                        <?php
                    for ($i=1; $i<13; $i++) {
                        echo '<option value="'.$i.'"'.($sessData['children'][$id]['month'] == $i ? ' selected="selected"':'').'>'.$i.'</option>';
                    }
                    ?>
                    </select>
                    <select class="selector-3 <?php echo $errors["children[$id][year]"] ? 'error' : '' ?>" name="children[0][year]">
                        <option value="">Year</option>
                        <?php
                    for ($i=date('Y')-14; $i>date('Y')-100; $i--) {
                        echo '<option value="'.$i.'"'.($sessData['children'][$id]['year'] == $i ? ' selected="selected"':'').'>'.$i.'</option>';
                    }
                    ?>
                    </select>
                </fieldset>
                <div style="clear: both;"></div>
                <?php
                    }
                } else {
                    ?>
                <fieldset class="reg-3" id="children_0">
                    <label class="bold-label">1st child</label>
                    <input placeholder="Name" type="text" name="children[0][name]" value="">
                    <input placeholder="Surname" type="text" name="children[0][surname]" value="">
                    <label>Date of birth</label>
                    <div style="clear: both;"></div>
                    <select name="children[0][day]" class="selector-1">
                        <option value="">Day</option>
                        <?php
                    for ($i=1; $i<32; $i++) {
                        echo '<option value="'.$i.'">'.$i.'</option>';
                    }
                    ?>
                    </select>
                    <select name="children[0][month]" class="selector-2">
                        <option value="">Month</option>
                        <?php
                    for ($i=1; $i<13; $i++) {
                        echo '<option value="'.$i.'">'.$i.'</option>';
                    }
                    ?>
                    </select>
                    <select name="children[0][year]" class="selector-3">
                        <option value="">Year</option>
                        <?php
                    for ($i=date('Y')-14; $i>date('Y')-100; $i--) {
                        echo '<option value="'.$i.'">'.$i.'</option>';
                    }
                    ?>
                    </select>
                </fieldset>
                <div style="clear: both;"></div>
                <?
                }
            ?>

            </div>
            <a class="add-child-info" href="#">Add information about one more child</a>
        </section>

        <fieldset class="buttons">
            <a href="<?php echo Yii::app()->createUrl(Yii::app()->language.'/registration/step/3'); ?>" class="reversed left button">back</a>
            <input class="right" type="submit" value="Next step">
        </fieldset>

        <div style="clear: both;"></div>
   <?php echo CHtml::endForm();?>

</section>