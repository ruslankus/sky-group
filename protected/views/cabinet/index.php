<?php /* @var $products Products[] */ ?>
<?php /* @var $current_client Clients */ ?>
<?php /* @var $feedback_form FeedbackForm */ ?>
<?php /* @var $form CActiveForm */ ?>

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
        <?php $form=$this->beginWidget('CActiveForm'); ?>
            <fieldset class="reg-1">
                <?php echo $form->textField($feedback_form,'name',array('placeholder' => $feedback_form->getAttributeLabel('name'))); ?>
                <?php echo $form->textField($feedback_form,'email',array('placeholder' => $feedback_form->getAttributeLabel('email'))); ?>
            </fieldset>
            <fieldset class="reg-2">
                <?php echo $form->textField($feedback_form,'country',array('placeholder' => $feedback_form->getAttributeLabel('country'))); ?>
                <?php echo $form->textField($feedback_form,'phone_number',array('placeholder' => $feedback_form->getAttributeLabel('phone_number'))); ?>
            </fieldset>
            <fieldset class="reg-3">
                <?php echo $form->textArea($feedback_form,'message',array('placeholder' => $feedback_form->getAttributeLabel('message'))); ?>
            </fieldset>
            <fieldset class="buttons">
                <?php echo CHtml::submitButton('Далее',array('class' => 'right inactive')); ?>
            </fieldset>
        <?php $this->endWidget(); ?>
        <div style="clear: both;"></div>
    </section>
</main>