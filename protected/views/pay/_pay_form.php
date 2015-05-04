<? /* $order_id = $objOrders->id */ ?>
<?php $cs = Yii::app()->clientScript; ?>
<?php $cs->registerCssFile(Yii::app()->request->baseUrl."/css/payment-form.css"); ?>
<?php $cs->registerScriptFile(Yii::app()->request->baseUrl."/js/payment-form.js", CClientScript::POS_END); ?>
<main class="main">
<section class="header-section">
    <h1><?php echo Yii::t('skygroup','Payment')?></h1>
</section>
<section class="form-area">
    <?php echo CHtml::beginForm(Yii::app()->params['payUrl'], "post");?>
	<!--hidden inputs-->
		<input type="hidden" name="REQUEST.VERSION" value="1.0" />
		
		<input type="hidden" name="FRONTEND.MODE" value="ASYNC" />
		<input type="hidden" name="FRONTEND.RESPONSE_URL" value="<?php echo Yii::app()->params['payMerchantUrl']."/".Yii::app()->language; ?>/pay/callback" />
		
		<input type="hidden" name="USER.LOGIN" value="<?php echo Yii::app()->params['payLogin']; ?>" />
		<input type="hidden" name="USER.PWD" value="<?php echo Yii::app()->params['payPwd']; ?>" />
		
		<input type="hidden" name="TRANSACTION.MODE" value="INTEGRATOR_TEST" />
		<input type="hidden" name="TRANSACTION.CHANNEL" value="<?php echo Yii::app()->params['payChannel']; ?>" />
		<input type="hidden" name="TRANSACTION.RESPONSE" value="SYNC" />
		
		<input type="hidden" name="SECURITY.SENDER" value="<?php echo Yii::app()->params['paySender']; ?>" />
		<input type="hidden" name="SECURITY.TOKEN" value="<?php echo Yii::app()->params['payToken']; ?>" />
		
		<input type="hidden" name="PAYMENT.CODE" value="DC.DB" />
		<input type="hidden" name="PRESENTATION.AMOUNT" value="<?php echo round($order->price/100,2); ?>" />
		<input type="hidden" name="PRESENTATION.CURRENCY" value="<?php echo Yii::app()->params['payCurrency']; ?>" />
		
		
		<input type="hidden" name="IDENTIFICATION.TRANSACTIONID" value="<?php echo $order->id; ?>" />

		 
		 <!--name-->
            <input type="hidden" name="NAME.GIVEN" value="<?php echo !empty($steps['step_7']['c_fname'])? $steps['step_7']['c_fname']:$steps['step_1']['first_name'];?>">
            <input type="hidden" name="NAME.FAMILY" value="<?php echo !empty($steps['step_7']['c_lname'])? $steps['step_7']['c_lname']:$steps['step_1']['last_name'];?>">
			
		<!--address-->	
            <input type="hidden" name="ADDRESS.STREET" value="<?php echo !empty($steps['step_7']['c_street'])? $steps['step_7']['c_street']:$steps['step_2']['street'];?>">
            <input type="hidden" type="text" name="ADDRESS.CITY" value="<?php echo !empty($steps['step_7']['c_city'])? $steps['step_7']['c_city']:$steps['step_2']['city'];?>">
			
            
            <input type="hidden" name="ADDRESS.ZIP" value="<?php echo !empty($steps['step_7']['c_zip'])? $steps['step_7']['c_zip']:$steps['step_2']['post_code'];?>">
            <input type="hidden" name="ADDRESS.COUNTRY" value="<?php echo !empty($steps['step_7']['c_country'])? $steps['step_7']['c_country']:$steps['step_2']['country'];?>">
			
		<!--contacts-->	
			<input type="hidden" name="CONTACT.EMAIL" value="<?php echo !empty($steps['step_7']['c_email'])? $steps['step_7']['c_email']:$steps['step_1']['email'];?>">
            <input type="hidden" name="CONTACT.PHONE" value="<?php echo !empty($steps['step_7']['c_phone'])? $steps['step_7']['c_phone']:$steps['step_2']['phone'];?>">
            <input type="hidden" name="CONTACT.MOBILE" value="<?php echo !empty($steps['step_7']['phone_mobile'])? $steps['step_7']['phone_mobile']:$steps['step_2']['mobile_phone'];?>">

		<?php /*
         <fieldset class="reg-3">
		 <h2><?php echo Yii::t('skygroup','Payer information')?></h2>
		 <!--name-->
             <?php print_r($steps['step_7']); ?>
             <?php print_r($steps['step_2']); ?>
            <input placeholder="<?php echo (Yii::t('skygroup','Name'))?>" type="text" name="NAME.GIVEN" value="<?php echo !empty($steps['step_7']['c_fname'])? $steps['step_7']['c_fname']:$steps['step_1']['first_name'];?>">
            <input placeholder="<?php echo (Yii::t('skygroup','Last Name'))?>" type="text" name="NAME.FAMILY" value="<?php echo !empty($steps['step_7']['c_lname'])? $steps['step_7']['c_lname']:$steps['step_1']['last_name'];?>">
			
		<!--address-->	
            <input placeholder="<?php echo (Yii::t('skygroup','street'))?>" type="text" name="ADDRESS.STREET" value="<?php echo !empty($steps['step_7']['c_street'])? $steps['step_7']['c_street']:$steps['step_2']['street'];?>">
            <input placeholder="<?php echo (Yii::t('skygroup','city'))?>" type="text" name="ADDRESS.CITY" value="<?php echo !empty($steps['step_7']['c_city'])? $steps['step_7']['c_city']:$steps['step_2']['city'];?>">
			
            
            <input placeholder="<?php echo Yii::t('skygroup','Zip Code')?>" type="text" name="ADDRESS.ZIP" class="zip" value="<?php echo !empty($steps['step_7']['c_zip'])? $steps['step_7']['c_zip']:$steps['step_2']['post_code'];?>">
            <select name="ADDRESS.COUNTRY" class="country">
                <option value="IL"><?php echo Yii::t('skygroup','Israel')?></option>
				<option value="RU"><?php echo Yii::t('skygroup','Russia')?></option>
			</select>
			
		<!--contacts-->	
			<input placeholder="<?php echo (Yii::t('skygroup','Email'))?>" type="text" name="CONTACT.EMAIL" value="<?php echo !empty($steps['step_7']['c_email'])? $steps['step_7']['c_email']:$steps['step_1']['email'];?>">
            <input placeholder="<?php echo (Yii::t('skygroup','phone (optional)'))?>" type="text" name="CONTACT.PHONE" value="<?php echo !empty($steps['step_7']['c_phone'])? $steps['step_7']['c_phone']:$steps['step_2']['phone'];?>">
            <input placeholder="<?php echo (Yii::t('skygroup','mobile (optional)'))?>" type="text" name="CONTACT.MOBILE" value="<?php echo !empty($steps['step_7']['phone_mobile'])? $steps['step_7']['phone_mobile']:$steps['step_2']['mobile_phone'];?>">
        </fieldset>
        */ ?>
        <h2><?php echo Yii::t('skygroup','Terms and Conditions')?></h2>
        <fieldset class="reg-3">
                <div class="terms"><?php echo $terms; ?></iframe>
        </fieldset>
		<fieldset class="reg-3 card-info">
		<h2><?php echo Yii::t('skygroup','Card Information')?></h2>
		<div class="card">
			<input placeholder="<?php echo Yii::t('skygroup','Cardholder Name')?>" type="text" name="ACCOUNT.HOLDER" value="" />
			
			
			<div class="sur">
			<input class="card-number" placeholder="<?php echo (Yii::t('skygroup','Credit Card Number'))?>"
                   type="text" name="ACCOUNT.NUMBER" value="" />
			
			<input class="card-cvc" placeholder="CVC" type="text" name="ACCOUNT.VERIFICATION" value="" />
			
			<a href="#" class="question" data-questionmark="<?php echo Yii::t('skygroup','Enter your identification number')?>"></a>
			</div>
			<span class="clearfix"></span>
			<select name="ACCOUNT.BRAND" class="card-brand">
				<option value="VISA">VISA</option>
				<option VALUE="MASTER">MASTERCARD</option>
			</select>
			<select class="exp-year" name="ACCOUNT.EXPIRY_YEAR">
				<option value="-"><?php echo (Yii::t('skygroup','Exp. Year'))?></option>
				<?php
					for($i=date("Y"); $i<date("Y")+25; $i++):
						echo "<option>{$i}</option>";
					endfor;
				?>
			</select>
			<select class="exp-month" name="ACCOUNT.EXPIRY_MONTH">
				<option value="-"><?php echo (Yii::t('skygroup','EXp. Month'))?></option>
				<option>01</option>
				<option>02</option>
				<option>03</option>
				<option>04</option>
				<option>05</option>
				<option>06</option>
				<option>07</option>
				<option>08</option>
				<option>09</option>
				<option>10</option>
				<option>11</option>
				<option>12</option>
			</select>
			<span class="clearfix"></span>	
			
		</div><!--/card-->
				<input type="submit" value="Далее">
		</fieldset>
		
		<div style="clear: both;"></div>
    <?php echo CHtml::endForm();?>
</section>
</main>