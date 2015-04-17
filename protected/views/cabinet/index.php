<?php /* @var $products Products[] */ ?>
<?php /* @var $current_client Clients */ ?>

<main class="main">
    <section class="header-section">
        <h1>Личный кабинет</h1>
    </section>
    <section class="form-area">

        <form method="post" action="<?php echo Yii::app()->createUrl('cabinet/change'); ?>">

            <fieldset class="reg-3 small-height">
                <span class="question-span small block bold marginal">Ваш текущий пакет обслуживания:</span>
                <?php foreach($products as $product): ?>
                    <input id="prod_<?php echo $product->id; ?>" type="radio" name="packet" <?php if($current_client->current_packet_id == $product->id): ?> checked <?php endif; ?> value="<?php echo $product->id; ?>">
                    <label data-name="packet" class="radio <?php if($current_client->current_packet_id == $product->id): ?> active selected <?php endif; ?> modified-small packet" for="prod_<?php echo $product->id; ?>"><span><?php echo $product->name; ?></span> – price <span class="old"><?php echo $product->oldPriceFmt(); ?> ILS</span> <span><?php echo $product->priceFmt(); ?> ILS</span></label>
                    <div style="clear: both;"></div>
                    <?php echo $product->description_text; ?>
                <?php endforeach; ?>
            </fieldset>

            <fieldset class="buttons">
                <input class="left" type="submit" value="Сменить пакет">
            </fieldset>

            <div style="clear: both;"></div>
        </form>
        <div style="clear: both;"></div>
        <form method="post">
            <fieldset class="reg-1">
                <input placeholder="Name" type="text" name="" value="">
                <input placeholder="Email" type="text" name="" value="">
            </fieldset>
            <fieldset class="reg-2">
                <input placeholder="Country" type="text" name="" value="">
                <input placeholder="Phone number" type="text" name="" value="">
            </fieldset>
            <fieldset class="reg-3">
                <textarea placeholder="Your request, coment, etc ..."></textarea>
            </fieldset>
            <fieldset class="buttons">
                <input class="right inactive" type="submit" value="Далее">
            </fieldset>
        </form>
        <div style="clear: both;"></div>
    </section>
</main>