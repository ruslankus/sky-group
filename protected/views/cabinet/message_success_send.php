<main class="main">
    <section class="header-section">
        <h1>Личный кабинет</h1>
    </section>
    <section class="form-area">
        <form method="post">
            <fieldset class="reg-3 small-height">
                <label class="bigger block">Письмо отправлено</label>
                <div style="clear: both;"></div>
                <span class="message-special">Ваше писмо было отправлено.<br>Мы ответим нанего как только появится возможность.</span>
            </fieldset>
            <div style="clear: both;"></div>

            <fieldset class="buttons">
                <a class="left button" href="<?php echo Yii::app()->createUrl('cabinet/index'); ?>">В кабинет</a>
            </fieldset>
            <div style="clear: both;"></div>
        </form>
    </section>
</main>