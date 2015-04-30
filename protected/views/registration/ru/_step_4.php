<section class="form-area">

     <?php echo CHtml::beginForm();?>

        <span class="question-span">Есть ли у вас дети ?</span>

        <label data-name="children" class="radio <?php echo ($sessData['has_children'] == 'yes')? 'active' : ''; ?>" for="children-yes">Да</label>
        <label data-name="children" class="radio <?php echo ($sessData['has_children'] != 'yes')? 'active' : ''; ?>" for="children-no">Нет</label>
        <input id="children-yes" type="radio" name="has_children" value="yes" <?php echo ($sessData['has_children'] == 'yes')? 'checked="checked"' : ''; ?>>
        <input id="children-no" type="radio" name="has_children" value="no" <?php echo ($sessData['has_children'] != 'yes')? 'checked="checked"' : ''; ?>>
        <div style="clear: both;"></div>

        <section class="offset <?php echo ($sessData['has_children'] == 'yes')? '' : 'hidden-block'; ?> if-children">
            <div class="children-list">
            <?php
                $this->clear_empty_array_values( $sessData['children']);
                if ($errors || $sessData['children']) {
                    $o=-1;
                    foreach ($sessData['children'] as $id=>$child) {
                        $o++;
                ?>
                <fieldset class="reg-3" id="children_<?php echo $o; ?>" data-children="<?php echo $o; ?>">
                    <label class="bold-label"><?php echo Yii::t('yii.skygroup','n==1#1st child|n==2#2nd child|n==3#3th child|n>3#{n}th child', ($o+1)); ?></label>
                    <input class="<?php echo $errors["children[$id][name]"] ? 'error' : '' ?>" data-error="<?php echo ($errors["children[$id][name]"] ? $errors["children[$id][name]"]:''); ?>" placeholder="Имя" type="text" name="children[<?php echo $o; ?>][name]" value="<?php echo $sessData['children'][$id]['name']; ?>">
                    <input class="<?php echo $errors["children[$id][surname]"] ? 'error' : '' ?>" data-error="<?php echo ($errors["children[$id][surname]"] ? $errors["children[{$id}][surname]"]:''); ?>" placeholder="Фамилия" type="text" name="children[<?php echo $o; ?>][surname]" value="<?php echo $sessData['children'][$id]['surname']; ?>">
                    <label>Дата Рождения</label>
                    <div style="clear: both;"></div>
                    <select class="selector-1 <?php echo $errors["children[$id][day]"] ? 'error' : '' ?>" name="children[<?php echo $o; ?>][day]">
                        <option value="">Число</option>
                        <?php
                    for ($i=1; $i<32; $i++) {
                        echo '<option value="'.$i.'"'.($sessData['children'][$id]['day'] == $i ? ' selected="selected"':'').'>'.$i.'</option>';
                    }
                    ?>
                    </select>
                    <select class="selector-2 <?php echo $errors["children[$id][month]"] ? 'error' : '' ?>" name="children[<?php echo $o; ?>][month]">
                        <option value="">Месяц</option>
                        <?php
                    for ($i=1; $i<13; $i++) {
                        echo '<option value="'.$i.'"'.($sessData['children'][$id]['month'] == $i ? ' selected="selected"':'').'>'.$i.'</option>';
                    }
                    ?>
                    </select>
                    <select class="selector-3 <?php echo $errors["children[$id][year]"] ? 'error' : '' ?>" name="children[<?php echo $o; ?>][year]">
                        <option value="">Год</option>
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
                <fieldset class="reg-3" id="children_0" data-children="0">
                    <label class="bold-label">1ый ребенок</label>
                    <input placeholder="Имя" type="text" name="children[0][name]" value="">
                    <input placeholder="Фамилия" type="text" name="children[0][surname]" value="">
                    <label>Дата Рождения</label>
                    <div style="clear: both;"></div>
                    <select name="children[0][day]" class="selector-1">
                        <option value="">Число</option>
                        <?php
                    for ($i=1; $i<32; $i++) {
                        echo '<option value="'.$i.'">'.$i.'</option>';
                    }
                    ?>
                    </select>
                    <select name="children[0][month]" class="selector-2">
                        <option value="">Месяц</option>
                        <?php
                    for ($i=1; $i<13; $i++) {
                        echo '<option value="'.$i.'">'.$i.'</option>';
                    }
                    ?>
                    </select>
                    <select name="children[0][year]" class="selector-3">
                        <option value="">Год</option>
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
            <a class="add-child-info" href="#" data-lang="<?php echo Yii::app()->language; ?>">Добавить информацию о еще одном ребенке</a>
        </section>

        <fieldset class="buttons">
            <a href="<?php echo Yii::app()->createUrl(Yii::app()->language.'/registration/step/3'); ?>" class="reversed left button">Назад</a>
            <input class="right" type="submit" value="Далее">
        </fieldset>

        <div style="clear: both;"></div>
   <?php echo CHtml::endForm();?>

</section>