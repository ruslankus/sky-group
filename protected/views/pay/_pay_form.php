<? /* $order_id = $objOrders->id */ ?>
<?php $cs = Yii::app()->clientScript; ?>
<?php $cs->registerCssFile(Yii::app()->request->baseUrl."/css/payment-form.css"); ?>
<?php $cs->registerScriptFile(Yii::app()->request->baseUrl."/js/payment-form.js", CClientScript::POS_END); ?>
<main class="main">
<section class="header-section">
    <h1>Оплата</h1>
</section>
<?php print_r($sessData); ?>
<section class="form-area">
    <?php echo CHtml::beginForm("https://test.ctpe.net/frontend/payment.prc", "post");?>
	<!--hidden inputs-->
		<input type="hidden" name="REQUEST.VERSION" value="1.0" />
		
		<input type="hidden" name="FRONTEND.MODE" value="ASYNC" />
		<input type="hidden" name="FRONTEND.RESPONSE_URL" value="http://inlusion.eu/pay/callback/" />
		
		<input type="hidden" name="USER.LOGIN" value="8a8294174406c1f2014416ccece406dd" />
		<input type="hidden" name="USER.PWD" value="9prrhkqb" />
		
		<input type="hidden" name="TRANSACTION.MODE" value="INTEGRATOR_TEST" />
		<input type="hidden" name="TRANSACTION.CHANNEL" value="8a8294174406c1f2014416cd1ed006df" />
		<input type="hidden" name="TRANSACTION.RESPONSE" value="SYNC" />
		
		<input type="hidden" name="SECURITY.SENDER" value="8a8294174406c1f2014416ccece306d9" />
		<input type="hidden" name="SECURITY.TOKEN" value="c5dWcFsFkWca3MQF" />
		
		<input type="hidden" name="PAYMENT.CODE" value="DC.DB" />
		<input type="hidden" name="PRESENTATION.AMOUNT" value="1.5" />
		<input type="hidden" name="PRESENTATION.CURRENCY" value="EUR" />
		
		
		<input type="hidden" name="IDENTIFICATION.TRANSACTIONID" value="<?php echo $order_id; ?>" />
		
		
         <fieldset class="reg-3">
		 <h2>Payer information</h2>
		 <!--name-->
            <input placeholder="Имя" type="text" name="NAME.GIVEN" value="">
            <input placeholder="Фамилия" type="text" name="NAME.FAMILY" value="">
			
		<!--address-->	
            <input placeholder="street" type="text" name="ADDRESS.STREET" value="<?php echo $sessData['street']?>">
            <input placeholder="city" type="text" name="ADDRESS.CITY" value="<?php echo $sessData['city']; ?>">
			
            
            <input placeholder="Zip Code" type="text" name="ADDRESS.ZIP" class="zip">
            <select name="ADDRESS.COUNTRY" class="country">
				<option value="RU">Россия</option>
			</select>
			
		<!--contacts-->	
			<input placeholder="Электронная почта" type="text" name="CONTACT.EMAIL" value="<?php echo $sessData['email']?>">
            <input placeholder="phone (optional)" type="text" name="CONTACT.PHONE" value="<?php echo $sessData['phone']; ?>">
            <input placeholder="mobile (optional)" type="text" name="CONTACT.MOBILE" value="<?php echo $sessData['mphone']; ?>">	
        </fieldset>
		<fieldset class="reg-3 card-info">
		<h2>Card Information</h2>
		<div class="card">
			<input placeholder="Name on Card" type="text" name="ACCOUNT.HOLDER" value="" />
			
			
			<div class="sur">
			<input class="card-number" placeholder="Credit Card Number" type="text" name="ACCOUNT.NUMBER" value="" />
			
			<input class="card-cvc" placeholder="CVC" type="text" name="ACCOUNT.VERIFICATION" value="" />
			
			<a href="#" class="question" data-questionmark="укажите номер карточки удостоверения личности"></a>
			</div>
			<span class="clearfix"></span>
			<select name="ACCOUNT.BRAND" class="card-brand">
				<option>VISA</option>
				<option>MASTERCARD</option>
			</select>
			<select class="exp-year" name="ACCOUNT.EXPIRY_YEAR">
				<option value="-">Exp. Year</option>
				<?php
					for($i=date("Y"); $i<date("Y")+25; $i++):
						echo "<option>{$i}</option>";
					endfor;
				?>
			</select>
			<select class="exp-month" name="ACCOUNT.EXPIRY_MONTH">
				<option value="-">EXp. Month</option>
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