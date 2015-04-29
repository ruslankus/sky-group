<section class="form-area">

    <?php echo CHtml::beginForm();?>

        <span class="question-span small">Do you have a mortgage loan ?</span>

        <label data-name="ssudy" class="radio" for="ssudy-yes">Yes</label>
        <label data-name="ssudy" class="radio active" for="ssudy-no">No</label>
        <input id="ssudy-yes" type="radio" name="ssudy" value="yes">
        <input id="ssudy-no" type="radio" checked name="ssudy" value="no">
        <div style="clear: both;"></div>

        <section class="offset hidden-block if-ssudy">
            <fieldset class="reg-1 not-tall">
                <input placeholder="In which bank" type="text" value="">
                <input placeholder="For what sum" type="text" value="">
                <input placeholder="When did you sign for it?" type="text" value="">

                <span class="question-span small block">Mortgage insurer :</span>

                <label data-name="strah" class="radio active" for="strah-bank">Bank</label>
                <label data-name="strah" class="radio" for="strah-company">Insurance company </label>
                <input id="strah-bank" type="radio" checked name="strh" value="bank">
                <input id="strah-company" type="radio" name="strh" value="company">
                <div style="clear: both;"></div>

                <div class="offset-in hidden-block company-name">
                    <input class="not-tall" placeholder="Name of mortgage insurer" type="text" value="">
                    <div style="clear: both;"></div>
                </div>

            </fieldset>
            <div style="clear: both;"></div>
        </section>


        <span class="question-span small">Do you receive allowance from the National Insurance Institute ?</span>
        <label data-name="posobie" class="radio" for="posobie-yes">Yes</label>
        <label data-name="posobie" class="radio active" for="posobie-no">No</label>
        <input id="posobie-yes" type="radio" name="posobie" value="yes">
        <input id="posobie-no" type="radio" checked name="posobie" value="no">
        <div style="clear: both;"></div>

        <section class="offset hidden-block if-posobie">
            <fieldset class="reg-3 small-height">
                <span class="question-span small block">Choose type:</span>
                <input type="checkbox" id="pensionnoye" name="posobie[pensionnoye]"><label class="check-box-label" for="pensionnoye">Retirement benefits</label>
                <input type="checkbox" id="invalidnost" name="posobie[invalidnost]"><label class="check-box-label" for="invalidnost">Disabilities</label>
                <input type="checkbox" id="bezrabotica" name="posobie[bezrabotica]"><label class="check-box-label" for="bezrabotica">Unemployment benefit</label>
                <input type="checkbox" id="prozhitochniy" name="posobie[prozhitochniy]"><label class="check-box-label" for="prozhitochniy">Benefit to provide a living wage</label>
            </fieldset>
            <div style="clear: both;"></div>
        </section>


        <span class="question-span small">Are you a member of the Health Insurance Fund ?</span>
        <label data-name="kasa" class="radio" for="kasa-yes">Yes</label>
        <label data-name="kasa" class="radio active" for="kasa-no">No</label>
        <input id="kasa-yes" type="radio" name="kasa" value="yes">
        <input id="kasa-no" type="radio" checked name="kasa" value="no">
        <div style="clear: both;"></div>

        <section class="offset hidden-block if-kasa">
            <fieldset class="reg-3 small-height">
                <span class="question-span small block">Specify your health insurance company:</span>
                <input id="leumit" checked type="radio" name="kasa-type" value="leumit"><label data-name="kasa-type" class="radio modified-small active" for="leumit">LEUMIT</label>
                <input id="macabi" type="radio" name="kasa-type" value="macabi"><label data-name="kasa-type" class="radio modified-small" for="macabi">MACABI</label>
                <input id="meucheded" type="radio" name="kasa-type" value="macabi"><label data-name="kasa-type" class="radio modified-small" for="meucheded">MEUCHEDET</label>
                <input id="calit" type="radio" name="kasa-type" value="macabi"><label data-name="kasa-type" class="radio modified-small" for="calit">CLALIT</label>
            </fieldset>
            <div style="clear: both;"></div>
        </section>

        <span class="question-span small">Do you have supplementary insurance in your health insurance scheme ?</span>
        <label data-name="kasa-add" class="radio" for="kasa-additional-yes">Yes</label>
        <label data-name="kasa-add" class="radio active" for="kasa-additional-no">No</label>
        <input id="kasa-additional-yes" type="radio" name="kasa-additional" value="yes">
        <input id="kasa-additional-no" type="radio" checked name="kasa-additional" value="no">
        <div style="clear: both;"></div>

        <fieldset class="reg-3 small-height">
            <span class="question-span small block">Specify your family's monthly income:</span>
            <input id="do5000" type="radio" checked name="dohod" value="1"><label data-name="dohod" class="radio active modified-small" for="do5000">Up to 5,000 shekels</label>
            <input id="ot5000do9000" type="radio" name="dohod" value="2"><label data-name="dohod" class="radio modified-small" for="ot5000do9000">From 5000 to 9000 shekels</label>
            <input id="ot9000do16000" type="radio" name="dohod" value="3"><label data-name="dohod" class="radio modified-small" for="ot9000do16000">From 9,000 to 16,000 shekels</label>
            <input id="bolshe1600" type="radio" name="dohod" value="4"><label data-name="dohod" class="radio modified-small" for="bolshe1600">Above 16,000 shekels</label>
        </fieldset>
        <div style="clear: both;"></div>

        <span class="question-span small">Do you own a car ?</span>
        <label data-name="automobile" class="radio" for="automobile-yes">Yes</label>
        <label data-name="automobile" class="radio active" for="automobile-no">No</label>
        <input id="automobile-yes" type="radio" name="automobile" value="yes">
        <input id="automobile-no" type="radio" checked name="automobile" value="no">
        <div style="clear: both;"></div>

        <span class="question-span small">Do you have private insurance ?</span>
        <label data-name="chasnaya-strahovka" class="radio" for="chasnaya-strahovka-yes">Yes</label>
        <label data-name="chasnaya-strahovka" class="radio active" for="chasnaya-strahovka-no">No</label>
        <input id="chasnaya-strahovka-yes" type="radio" name="chasnaya-strahovka" value="yes">
        <input id="chasnaya-strahovka-no" type="radio" checked name="chasnaya-strahovka" value="no">
        <div style="clear: both;"></div>

        <section class="offset hidden-block if-chasnaya-strahovka">
            <fieldset class="reg-3 small-height">

                <input id="medicinskoye" type="radio" name="chasnaya-strahovka-type" value="1"><label data-name="chasnaya-strahovka-type" class="radio modified-small lots-of" for="medicinskoye">Medical</label>
                <div style="clear: both;"></div>
                <div class="offset-in hidden-block small-modified medicinskoye strah-block">
                    <input placeholder="Name of the company" type="text" value="">
                    <input placeholder="Monthly payment" type="text" value="">
                    <input placeholder="Coverage" type="text" value=""><a href="#" class="question bottom" data-questionmark="укажите сумму страхового покрытия, определённую условиями договора"></a>
                    <div style="clear: both;"></div>
                </div>

                <input id="neschistny_sluchay" type="radio" name="chasnaya-strahovka-type" value="2"><label data-name="chasnaya-strahovka-type" class="radio modified-small lots-of" for="neschistny_sluchay">Accident</label>
                <div style="clear: both;"></div>
                <div class="offset-in hidden-block small-modified neschistny_sluchay strah-block">
                    <input placeholder="Name of the company" type="text" value="">
                    <input placeholder="Monthly payment" type="text" value="">
                    <input placeholder="Coverage" type="text" value=""><a href="#" class="question bottom" data-questionmark="укажите сумму страхового покрытия, определённую условиями договора"></a>
                    <div style="clear: both;"></div>
                </div>

                <input id="strahovka_zhizni" type="radio" name="chasnaya-strahovka-type" value="3"><label data-name="chasnaya-strahovka-type" class="radio modified-small lots-of" for="strahovka_zhizni">Life insurance</label>
                <div style="clear: both;"></div>
                <div class="offset-in hidden-block small-modified strahovka_zhizni strah-block">
                    <input placeholder="Name of the company" type="text" value="">
                    <input placeholder="Monthly payment" type="text" value="">
                    <input placeholder="Coverage" type="text" value=""><a href="#" class="question bottom" data-questionmark="укажите сумму страхового покрытия, определённую условиями договора"></a>
                    <div style="clear: both;"></div>
                </div>

                <input id="nakopitelnaya_programa" type="radio" name="chasnaya-strahovka-type" value="4"><label data-name="chasnaya-strahovka-type" class="radio modified-small lots-of" for="nakopitelnaya_programa">Savings program</label>
                <div style="clear: both;"></div>
                <div class="offset-in hidden-block small-modified nakopitelnaya_programa strah-block">
                    <input placeholder="Name of the company" type="text" value="">
                    <input placeholder="Monthly payment" type="text" value="">
                    <input placeholder="Coverage" type="text" value=""><a href="#" class="question bottom" data-questionmark="укажите сумму страхового покрытия, указанную в договоре"></a>
                    <div style="clear: both;"></div>
                </div>

                <input id="poteria_deesposobnosti" type="radio" name="chasnaya-strahovka-type" value="5"><label data-name="chasnaya-strahovka-type" class="radio modified-small lots-of" for="poteria_deesposobnosti">The loss of capacity</label>
                <div style="clear: both;"></div>
                <div class="offset-in hidden-block small-modified poteria_deesposobnosti strah-block">
                    <input placeholder="Name of the company" type="text" value="">
                    <input placeholder="Monthly payment" type="text" value="">
                    <input placeholder="Coverage" type="text" value=""><a href="#" class="question bottom" data-questionmark="укажите сумму страхового покрытия, определённую условиями договора"></a>
                    <div style="clear: both;"></div>
                </div>

            </fieldset>
            <div style="clear: both;"></div>
        </section>

        <fieldset class="buttons">
            <a href="<?php echo Yii::app()->createUrl(Yii::app()->language.'/registration/step/4'); ?>" class="reversed left button">back</a>
            <input class="right" type="submit" value="Next step">
        </fieldset>


        <div style="clear: both;"></div>
     <?php echo CHtml::endForm();?>


</section>
