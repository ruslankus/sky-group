<main class="main">
    <section class="header-section">
        <h1><?php echo Yii::t('skygroup','Registration is completed'); ?></h1>
    </section>
    <section class="form-area">
        <form method="post">
            <fieldset class="reg-3">
                <label><?php echo Yii::t('skygroup','Unfortunately, today is not your day. Registration failed. Payment failed.'); ?></label>
            </fieldset>
            <div style="clear: both;"></div>

            <fieldset class="buttons">
                <a class="right button" href="/"><?php echo Yii::t('skygroup','Next'); ?></a>
            </fieldset>
            <div style="clear: both;"></div>
        </form>
    </section>
</main>