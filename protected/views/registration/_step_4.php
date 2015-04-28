<section class="form-area">

     <?php echo CHtml::beginForm();?>

        <span class="question-span">Есть ли у вас дети ?</span>

        <label data-name="children" class="radio" for="children-yes">Да</label>
        <label data-name="children" class="radio active" for="children-no">Нет</label>
        <input id="children-yes" type="radio" name="children" value="yes">
        <input id="children-no" type="radio" checked name="children" value="no">

        <div style="clear: both;"></div>

        <section class="offset hidden-block if-children">

            <div class="children-list">

                <fieldset class="reg-3" id="children_0">
                    <label class="bold-label">1й ребёнок</label>
                    <input placeholder="Имя" type="text" name="children[0][name]" value="">
                    <input placeholder="Фамилия" type="text" name="children[0][surname]" value="">
                    <label>Дата Рождения</label>
                    <div style="clear: both;"></div>
                    <select name="children[0][day]" class="selector-1">
                        <option>Число</option>
                    </select>
                    <select name="children[0][month]" class="selector-2">
                        <option>Месяц</option>
                    </select>
                    <select name="children[0][year]" class="selector-3">
                        <option>Год</option>
                    </select>
                </fieldset>
                <div style="clear: both;"></div>

                <fieldset class="reg-3" id="children_1">
                    <label class="bold-label">2й ребёнок</label>
                    <input placeholder="Имя" type="text" name="children[1][name]" value="">
                    <input placeholder="Фамилия" type="text" name="children[1][surname]" value="">
                    <label>Дата Рождения</label>
                    <div style="clear: both;"></div>
                    <select name="children[1][day]" class="selector-1">
                        <option>Число</option>
                    </select>
                    <select name="children[1][month]" class="selector-2">
                        <option>Месяц</option>
                    </select>
                    <select name="children[1][year]" class="selector-3">
                        <option>Год</option>
                    </select>
                </fieldset>
                <div style="clear: both;"></div>

                <fieldset class="reg-3" id="children_2">
                    <label class="bold-label">3й ребёнок</label>
                    <input placeholder="Имя" type="text" name="children[2][name]" value="">
                    <input placeholder="Фамилия" type="text" name="children[2][surname]" value="">
                    <label>Дата Рождения</label>
                    <div style="clear: both;"></div>
                    <select name="children[2][day]" class="selector-1">
                        <option>Число</option>
                    </select>
                    <select name="children[2][month]" class="selector-2">
                        <option>Месяц</option>
                    </select>
                    <select name="children[2][year]" class="selector-3">
                        <option>Год</option>
                    </select>
                </fieldset>
                <div style="clear: both;"></div>

            </div>
            <a class="add-child-info" href="#">Добавить информацию о еще одном ребенке</a>
        </section>

        <fieldset class="buttons">
            <a class="reversed left button" href="#">Назад</a>
            <input class="right" type="submit" value="Далее">
        </fieldset>

        <div style="clear: both;"></div>
   <?php echo CHtml::endForm();?>

</section>