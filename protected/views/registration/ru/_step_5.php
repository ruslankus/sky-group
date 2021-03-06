<section class="form-area">

    <?php echo CHtml::beginForm();?>

        <span class="question-span small">Имеете ли Вы задолженности по ипотечным ссудам ?</span>

        <label data-name="ssudy" class="radio" for="ssudy-yes">Да</label>
        <label data-name="ssudy" class="radio active" for="ssudy-no">Нет</label>
        <input id="ssudy-yes" type="radio" name="ssudy" value="yes">
        <input id="ssudy-no" type="radio" checked name="ssudy" value="no">
        <div style="clear: both;"></div>

        <section class="offset hidden-block if-ssudy">
            <fieldset class="reg-1 not-tall">
                <input placeholder="Наименование Банка" type="text" value="">
                <input placeholder="Сумма ссуды" type="text" value="">
                <input placeholder="Дата получения ссуды" type="text" value="">

                <span class="question-span small block">Наименование страховщика ипотечной ссуды:</span>

                <label data-name="strah" class="radio active" for="strah-bank">Банк</label>
                <label data-name="strah" class="radio" for="strah-company">Страховая компания</label>
                <input id="strah-bank" type="radio" checked name="strh" value="bank">
                <input id="strah-company" type="radio" name="strh" value="company">
                <div style="clear: both;"></div>

                <div class="offset-in hidden-block company-name">
                    <input class="not-tall" placeholder="Наименование страховой компании" type="text" value="">
                    <div style="clear: both;"></div>
                </div>

            </fieldset>
            <div style="clear: both;"></div>
        </section>


        <span class="question-span small">Получаете ли вы пособие от Института национального страхования ?</span>
        <label data-name="posobie" class="radio" for="posobie-yes">Да</label>
        <label data-name="posobie" class="radio active" for="posobie-no">Нет</label>
        <input id="posobie-yes" type="radio" name="posobie" value="yes">
        <input id="posobie-no" type="radio" checked name="posobie" value="no">
        <div style="clear: both;"></div>

        <section class="offset hidden-block if-posobie">
            <fieldset class="reg-3 small-height">
                <span class="question-span small block">Укажите вид пособия:</span>
                <input type="checkbox" id="pensionnoye" name="posobie[pensionnoye]"><label class="check-box-label" for="pensionnoye">Пенсионное пособие</label>
                <input type="checkbox" id="invalidnost" name="posobie[invalidnost]"><label class="check-box-label" for="invalidnost">Пособие по инвалидности</label>
                <input type="checkbox" id="bezrabotica" name="posobie[bezrabotica]"><label class="check-box-label" for="bezrabotica">Пособие по безработице</label>
                <input type="checkbox" id="prozhitochniy" name="posobie[prozhitochniy]"><label class="check-box-label" for="prozhitochniy">Пособие по обеспечению прожиточного минимума</label>
            </fieldset>
            <div style="clear: both;"></div>
        </section>


        <span class="question-span small">Состоите ли Вы в больничной кассе ?</span>
        <label data-name="kasa" class="radio" for="kasa-yes">Да</label>
        <label data-name="kasa" class="radio active" for="kasa-no">Нет</label>
        <input id="kasa-yes" type="radio" name="kasa" value="yes">
        <input id="kasa-no" type="radio" checked name="kasa" value="no">
        <div style="clear: both;"></div>

        <section class="offset hidden-block if-kasa">
            <fieldset class="reg-3 small-height">
                <span class="question-span small block">Укажите вашу больничную кассу :</span>
                <input id="leumit" checked type="radio" name="kasa-type" value="leumit"><label data-name="kasa-type" class="radio modified-small active" for="leumit">ЛЕУМИТ</label>
                <input id="macabi" type="radio" name="kasa-type" value="macabi"><label data-name="kasa-type" class="radio modified-small" for="macabi">МАКАБИ</label>
                <input id="meucheded" type="radio" name="kasa-type" value="macabi"><label data-name="kasa-type" class="radio modified-small" for="meucheded">МЕУХЕДЕТ</label>
                <input id="calit" type="radio" name="kasa-type" value="macabi"><label data-name="kasa-type" class="radio modified-small" for="calit">КЛАЛИТ</label>
            </fieldset>
            <div style="clear: both;"></div>
        </section>

        <span class="question-span small">Имеете ли Вы дополнительную страховку в больничной кассе ?</span>
        <label data-name="kasa-add" class="radio" for="kasa-additional-yes">Да</label>
        <label data-name="kasa-add" class="radio active" for="kasa-additional-no">Нет</label>
        <input id="kasa-additional-yes" type="radio" name="kasa-additional" value="yes">
        <input id="kasa-additional-no" type="radio" checked name="kasa-additional" value="no">
        <div style="clear: both;"></div>

        <fieldset class="reg-3 small-height">
            <span class="question-span small block">Укажите ежемесячный доход семьи:</span>
            <input id="do5000" type="radio" checked name="dohod" value="1"><label data-name="dohod" class="radio active modified-small" for="do5000">До 5000 шекелей</label>
            <input id="ot5000do9000" type="radio" name="dohod" value="2"><label data-name="dohod" class="radio modified-small" for="ot5000do9000">От 5000 до 9000 шекелей</label>
            <input id="ot9000do16000" type="radio" name="dohod" value="3"><label data-name="dohod" class="radio modified-small" for="ot9000do16000">От 9000 до 16000 шекелей</label>
            <input id="bolshe1600" type="radio" name="dohod" value="4"><label data-name="dohod" class="radio modified-small" for="bolshe1600">Выше 16000 шекелей</label>
        </fieldset>
        <div style="clear: both;"></div>

        <span class="question-span small">Есть ли в Вашей семье Автомобиль? </span>
        <label data-name="automobile" class="radio" for="automobile-yes">Да</label>
        <label data-name="automobile" class="radio active" for="automobile-no">Нет</label>
        <input id="automobile-yes" type="radio" name="automobile" value="yes">
        <input id="automobile-no" type="radio" checked name="automobile" value="no">
        <div style="clear: both;"></div>

        <span class="question-span small">Участвуете ли Вы в системах частного страхования?</span>
        <label data-name="chasnaya-strahovka" class="radio" for="chasnaya-strahovka-yes">Да</label>
        <label data-name="chasnaya-strahovka" class="radio active" for="chasnaya-strahovka-no">Нет</label>
        <input id="chasnaya-strahovka-yes" type="radio" name="chasnaya-strahovka" value="yes">
        <input id="chasnaya-strahovka-no" type="radio" checked name="chasnaya-strahovka" value="no">
        <div style="clear: both;"></div>

        <section class="offset hidden-block if-chasnaya-strahovka">
            <fieldset class="reg-3 small-height">

                <input id="medicinskoye" type="radio" name="chasnaya-strahovka-type" value="1"><label data-name="chasnaya-strahovka-type" class="radio modified-small lots-of" for="medicinskoye">Медицинское страхование</label>
                <div style="clear: both;"></div>
                <div class="offset-in hidden-block small-modified medicinskoye strah-block">
                    <input placeholder="Наименование компании" type="text" value="">
                    <input placeholder="Сумма ежемесячного платежа" type="text" value="">
                    <input placeholder="Сумма страхового покрытия" type="text" value=""><a href="#" class="question bottom"></a>
                    <div style="clear: both;"></div>
                </div>

                <input id="neschistny_sluchay" type="radio" name="chasnaya-strahovka-type" value="2"><label data-name="chasnaya-strahovka-type" class="radio modified-small lots-of" for="neschistny_sluchay">Страхование от несчастного случая</label>
                <div style="clear: both;"></div>
                <div class="offset-in hidden-block small-modified neschistny_sluchay strah-block">
                    <input placeholder="Наименование компании" type="text" value="">
                    <input placeholder="Сумма ежемесячного платежа" type="text" value="">
                    <input placeholder="Сумма страхового покрытия" type="text" value=""><a href="#" class="question bottom"></a>
                    <div style="clear: both;"></div>
                </div>

                <input id="strahovka_zhizni" type="radio" name="chasnaya-strahovka-type" value="3"><label data-name="chasnaya-strahovka-type" class="radio modified-small lots-of" for="strahovka_zhizni">Страхование жизни</label>
                <div style="clear: both;"></div>
                <div class="offset-in hidden-block small-modified strahovka_zhizni strah-block">
                    <input placeholder="Наименование компании" type="text" value="">
                    <input placeholder="Сумма ежемесячного платежа" type="text" value="">
                    <input placeholder="Сумма страхового покрытия" type="text" value=""><a href="#" class="question bottom"></a>
                    <div style="clear: both;"></div>
                </div>

                <input id="nakopitelnaya_programa" type="radio" name="chasnaya-strahovka-type" value="4"><label data-name="chasnaya-strahovka-type" class="radio modified-small lots-of" for="nakopitelnaya_programa">Накопительная программа</label>
                <div style="clear: both;"></div>
                <div class="offset-in hidden-block small-modified nakopitelnaya_programa strah-block">
                    <input placeholder="Наименование компании" type="text" value="">
                    <input placeholder="Сумма ежемесячного платежа" type="text" value="">
                    <input placeholder="Сумма страхового покрытия" type="text" value=""><a href="#" class="question bottom"></a>
                    <div style="clear: both;"></div>
                </div>

                <input id="poteria_deesposobnosti" type="radio" name="chasnaya-strahovka-type" value="5"><label data-name="chasnaya-strahovka-type" class="radio modified-small lots-of" for="poteria_deesposobnosti">Страхование на случай потери дееспособности</label>
                <div style="clear: both;"></div>
                <div class="offset-in hidden-block small-modified poteria_deesposobnosti strah-block">
                    <input placeholder="Наименование компании" type="text" value="">
                    <input placeholder="Сумма ежемесячного платежа" type="text" value="">
                    <input placeholder="Сумма страхового покрытия" type="text" value=""><a href="#" class="question bottom"></a>
                    <div style="clear: both;"></div>
                </div>

            </fieldset>
            <div style="clear: both;"></div>
        </section>

        <fieldset class="buttons">
            <a class="reversed left button"href="<?php echo Yii::app()->createUrl( $lng .'/registration/step/4'); ?>">Назад</a>
            <input class="right" type="submit" value="Далее">
        </fieldset>


        <div style="clear: both;"></div>
     <?php echo CHtml::endForm();?>


</section>
