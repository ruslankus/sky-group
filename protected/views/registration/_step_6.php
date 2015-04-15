<section class="form-area">

     <?php echo CHtml::beginForm();?>

        <fieldset class="reg-3 small-height">
            <span class="question-span small block bold">Выберите пакет обслуживания:</span>

            <input id="silver" type="radio" name="packet" checked value="1">
            <label data-name="packet" class="radio active modified-small packet" for="silver"><span>Silver</span> – price <span class="old">250.50 ILS</span> <span>200.10 ILS</span></label>
            <div style="clear: both;"></div>
            <ul>
                <li>Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</li>
                <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</li>
            </ul>

            <input id="gold" type="radio" name="packet" value="2">
            <label data-name="packet" class="radio modified-small packet" for="gold"><span>Gold</span> – price <span class="old">250.50 ILS</span> <span>200.10 ILS</span></label>
            <div style="clear: both;"></div>
            <ul>
                <li>Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</li>
                <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</li>
            </ul>

            <input id="platinum" type="radio" name="packet" value="3">
            <label data-name="packet" class="radio modified-small packet" for="platinum"><span>Platinum</span> – price <span class="old">250.50 ILS</span> <span>200.10 ILS</span></label>
            <div style="clear: both;"></div>
            <ul>
                <li>Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</li>
                <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</li>
            </ul>

            <input id="diamond" type="radio" name="packet" value="4">
            <label data-name="packet" class="radio modified-small packet" for="diamond"><span>Diamond</span> – price <span class="old">250.50 ILS</span> <span>200.10 ILS</span></label>
            <div style="clear: both;"></div>
            <ul>
                <li>Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</li>
                <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</li>
            </ul>

        </fieldset>

        <fieldset class="buttons">
            <a class="reversed left button" href="#">Назад</a>
            <input class="right" type="submit" value="Далее">
        </fieldset>

        <div style="clear: both;"></div>
     <?php echo CHtml::endForm();?>

</section>
