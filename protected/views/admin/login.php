<?php /* @var $this AdminController */ ?>
<?php /* @var $form CActiveForm */ ?>
<?php /* @var $form_mdl AdminLoginForm */ ?>

<div class="login-box">
    <span>Welcome to</span>
    <h1>Sky Group Panel</h1>
    <?php $form=$this->beginWidget('CActiveForm', array('id' =>'login-form','enableAjaxValidation'=>false,'htmlOptions'=>array())); ?>

    <div class="input">
        <?php echo $form->textField($form_mdl,'username',array('placeholder' => 'Login'));?>
        <?php echo $form->error($form_mdl,'username')?>
    </div>
    <div class="input">
        <?php echo $form->passwordField($form_mdl, 'password', array('placeholder' => 'Password')); ?>
        <?php echo $form->error($form_mdl,'password')?>
    </div>
    <input type="submit" value="Enter" />
    <?php $this->endWidget(); ?>
</div><!--/login-box-->
