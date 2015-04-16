<main class="main">
<section class="header-section">
    <h1>Оплата</h1>
</section>

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
		
		
		<input type="hidden" name="IDENTIFICATION.TRANSACTIONID" value="MyAssignedId" />
		
		
         <fieldset class="reg-1">
		 <!--name-->
            <input placeholder="Имя" type="text" name="NAME.GIVEN" value="<?php echo $sessData['fname']?>">
            <input placeholder="Фамилия" type="text" name="NAME.FAMILY" value="<?php echo $sessData['lname']?>">
			
		<!--address-->	
            <input placeholder="street" type="text" name="ADDRESS.STREET" value="<?php echo $sessData['street']?>">
            <input placeholder="zip" type="text" name="ADDRESS.ZIP" value="IPS808">
            <input placeholder="city" type="text" name="ADDRESS.CITY" value="<?php echo $sessData['city']; ?>">
            <input placeholder="country" type="text" name="ADDRESS.COUNTRY" value="<?php echo $sessData['country']; ?>">
        </fieldset>
        <fieldset class="reg-2">
		<!--contacts-->	
            <input placeholder="Электронная почта" type="text" name="CONTACT.EMAIL" value="<?php echo $sessData['email']?>">
            <input placeholder="phone (optional)" type="text" name="CONTACT.PHONE" value="<?php echo $sessData['phone']; ?>">
            <input placeholder="mobile (optional)" type="text" name="CONTACT.MOBILE" value="<?php echo $sessData['mphone']; ?>">	
		</fieldset>
		<fieldset class="reg-3 small-height">
		<!--account-->
			<input placeholder="Account holder" type="text" name="ACCOUNT.HOLDER" value="<?php echo $sessData['fname']." ".$sessData['lname']; ?>" />
			
			<input placeholder="number" type="text" name="ACCOUNT.NUMBER" value="4929453812312008" />
			<input placeholder="CVC" type="text" name="ACCOUNT.VERIFICATION" value="391" />
			<select  name="ACCOUNT.BRAND">
					<option>VISA</option>
					<option>MASTERCARD</option>
				</select>
			<select  name="ACCOUNT.EXPIRY_MONTH">
					<option>01</option>
					<option>02</option>
					<option>03</option>
					<option>04</option>
					<option>05</option>
					<option>06</option>
					<option>07</option>
					<option>08</option>
					<option selected="selected">09</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
				</select>
				<select  name="ACCOUNT.EXPIRY_YEAR">
					<option>2015</option>
					<option>2016</option>
					<option>2017</option>
					<option>2018</option>
				</select>
				
				<input type="submit" value="Далее">
		</fieldset>
		<div style="clear: both;"></div>
    <?php echo CHtml::endForm();?>
</section>
</main>