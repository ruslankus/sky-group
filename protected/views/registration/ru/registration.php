<?php /* @var $step int */ ?>
<?php /* @var $sessData array */ ?>
<?php /* @var $errors array */ ?>
<?php /* @var $objProds array */ ?>

<main class="main">
    <section class="header-section">
        <h1>Регистрация</h1>
    </section>

    <?php $this->widget('application.widgets.StepWidget',array('currentStep' => $this->currentStep));?>

    <?php $lng = Yii::app()->language; ?>
    <?php echo $this->renderPartial("{$lng}/_step_{$step}", array('sessData' => $sessData, 'got'=>$got, 'errors' => $errors,
        'objProds' => $objProds,'lng' => $lng))?>
</main>