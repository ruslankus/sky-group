<main class="main">
    <section class="header-section">
        <h1>Произошла ошибка</h1>
    </section>
    <section class="form-area">
        <form method="post">
            <fieldset class="reg-3" style="min-height: 25px!important;">
                <label>Увы, сегодня не ваш день. Регистрация провалена. Пэймент не прошел </label>
            </fieldset>
            <fieldset class="reg-3">
                <label><?php echo $response->message; ?></label>
            </fieldset>
            <div style="clear: both;"></div>

            <fieldset class="buttons">
                <a class="right button" href="/<?php echo Yii::app()->language; ?>/registration/step/7">Далее</a>
            </fieldset>
            <div style="clear: both;"></div>
        </form>
    </section>
</main>