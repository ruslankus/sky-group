<main class="main">
    <section class="header-section">
        <h1>Личный кабинет</h1>
    </section>
    <section class="form-area">
        <form method="post">
            <fieldset class="reg-3 small-height">
                <label class="bigger block">Операция завершена</label>
                <div style="clear: both;"></div>
                <span class="message-special">Вы только что изменили ваш пакет услуг. Через время на почту вам придет оповещение об успешнйо операции. Можете вернуться в свой личный кабинет.<br>В случае вопросов свяжитесь с нами.</span>
            </fieldset>
            <div style="clear: both;"></div>

            <fieldset class="buttons">
                <a class="left button" href="<?php echo Yii::app()->createUrl('cabinet/index'); ?>">В кабинет</a>
            </fieldset>
            <div style="clear: both;"></div>
        </form>
    </section>
</main>