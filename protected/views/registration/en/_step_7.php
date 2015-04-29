<section class="form-area">

    <form method="post">

        <fieldset class="reg-3 small-height bordered-bottom">
            <span class="question-span small block bold">The system assigns a unique number</span>
            <span class="question-span small block bold"><?php echo $_SESSION['step_1']['user_name']." ".$_SESSION['step_1']['last_name'] ?></span>
            <span class="question-span small block">Package service<span class="right bold"><?php echo $objProds->name?></span></span>
            <span class="question-span small block">
                Amount (without discounts)<span class="right bold"><?php echo number_format($objProds->price / 100 ,2)?> ILS</span>
            </span>
            <span class="question-span small block">
               Discount (in case of promotional code)<span class="right bold"><?php echo number_format($objProds->price / 100 ,2)?> ILS</span>
            </span>
            <span class="question-span small block">Amount (with discounts))<span class="right bold"><?php echo number_format($objProds->price / 100 ,2)?> ILS</span></span>
            <div style="clear: both;"></div>
        </fieldset>
        <div style="clear: both;"></div>

        <label class="block">Оплата</label>
        <div style="clear: both;"></div>
        <span class="question-span">Является ли владелец карты оплаты другим лицом нежели заказчик?</span>

        <label data-name="other-person" class="radio" for="other-person-yes">Yes</label>
        <label data-name="other-person" class="radio active" for="other-person-no">No</label>
        <input id="other-person-yes" type="radio" name="other-person" value="yes">
        <input id="other-person-no" type="radio" checked name="other-person" value="no">
        <div style="clear: both;"></div>

        <section class="offset hidden-block if-other-person">
            <fieldset class="right reg-3">
                <label>Cardholder's data</label>
                <input placeholder="Name of cardholder" type="text" name="" value="">
                <input placeholder="Last name of the card holder" type="text" name="" value="">
                <input placeholder="Street " type="text" name="" value="">
                <input class="half separate" placeholder="Flat" type="text" name="" value="">
                <input class="half" placeholder="House" type="text" name="" value="">
                <input placeholder="City" type="text" name="" value="">
                <input placeholder="Country" type="text" name="" value="">
                <input placeholder="Contact phone number" type="text" name="" value="">
                <div style="clear: both;"></div>
            </fieldset>
            <div style="clear: both;"></div>
        </section>

        <fieldset class="buttons">
            <a class="reversed left button" href="/registration/step/6">Back</a>
            <input class="right pay" type="submit" value="Pay now">
            <a class="right cancel-link" href="/">Cancel</a>
        </fieldset>

        <div style="clear: both;"></div>
    </form>

</section>