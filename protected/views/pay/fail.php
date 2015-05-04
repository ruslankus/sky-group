<main class="main">
    <section class="header-section">
        <h1><?php echo Yii::t('skygroup','An error has occurred'); ?></h1>
    </section>
    <section class="form-area">
        <form method="post">
            <fieldset class="reg-3" style="min-height: 25px!important;">
                <label><?php echo Yii::t('skygroup','Unfortunately, today is not your day. Registration failed. Payment failed.'); ?></label>
            </fieldset>
            <fieldset class="reg-3">
                <label><?php echo $response->message; ?></label>
            </fieldset>
            <div style="clear: both;"></div>

            <fieldset class="buttons">
                <a class="right button" href="/<?php echo Yii::app()->language; ?>/registration/step/7"><?php echo Yii::t('skygroup','Next'); ?></a>
            </fieldset>
            <div style="clear: both;"></div>
        </form>
    </section>
</main>