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

                <fieldset class="reg-3" id="children_0">
                    <label class="bold-label">1st child</label>
                    <input data-error="<?php echo $errors['has_children']; ?>" placeholder="Name" type="text" name="children[0][name]" value="">
                    <input placeholder="Surname" type="text" name="children[0][surname]" value="">
                    <label>Date of birth</label>
                    <div style="clear: both;"></div>
                    <select name="children[0][day]" class="selector-1">
                        <option>Day</option>
                    </select>
                    <select name="children[0][month]" class="selector-2">
                        <option>Month</option>
                    </select>
                    <select name="children[0][year]" class="selector-3">
                        <option>Year</option>
                    </select>
                </fieldset>
                <div style="clear: both;"></div>

                <fieldset class="reg-3" id="children_1">
                    <label class="bold-label">2nd child</label>
                    <input data-error="<?php echo $errors['children']; ?>" placeholder="Name" type="text" name="children[1][name]" value="">
                    <input placeholder="Surname" type="text" name="children[1][surname]" value="">
                    <label>Date of birth</label>
                    <div style="clear: both;"></div>
                    <select name="children[1][day]" class="selector-1">
                        <option>Day</option>
                    </select>
                    <select name="children[1][month]" class="selector-2">
                        <option>Month</option>
                    </select>
                    <select name="children[1][year]" class="selector-3">
                        <option>Year</option>
                    </select>
                </fieldset>
                <div style="clear: both;"></div>

                <fieldset class="reg-3" id="children_2">
                    <label class="bold-label">3rd child</label>
                    <input data-error="<?php echo $errors['children']; ?>" placeholder="Name" type="text" name="children[2][name]" value="">
                    <input placeholder="Surname" type="text" name="children[2][surname]" value="">
                    <label>Date of birth</label>
                    <div style="clear: both;"></div>
                    <select name="children[2][day]" class="selector-1">
                        <option>Day</option>
                    </select>
                    <select name="children[2][month]" class="selector-2">
                        <option>Month</option>
                    </select>
                    <select name="children[2][year]" class="selector-3">
                        <option>Year</option>
                    </select>
                </fieldset>
                <div style="clear: both;"></div>

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