<main class="main">
<section class="header-section">
    <h1>Регистрация</h1>
</section>

 <?php $this->widget('application.widgets.StepWidget',array('currentStep' => $this->currentStep));?>
 
<?echo $this->renderPartial("_step_{$step}", array('sessData' => $sessData,'errors' => $errors))?>
</main>