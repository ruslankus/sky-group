<main class="main">
    <section class="header-section">
        <h1>Личный кабинет</h1>
    </section>
    <section class="form-area">
        <form method="post">
            <fieldset class="reg-3 small-height">
                <label class="bigger block">В доступе отказано</label>
                <div style="clear: both;"></div>
                <span class="message-special">У вас не достаточно прав для просмотра данной страницы. <br>В случае вопросов свяжитесь с нами.</span>
            </fieldset>
            <div style="clear: both;"></div>

            <fieldset class="buttons">
                <a class="left button" href="<?php echo Yii::app()->createUrl('main/index'); ?>">На главную</a>
            </fieldset>
            <div style="clear: both;"></div>
        </form>
    </section>
</main>