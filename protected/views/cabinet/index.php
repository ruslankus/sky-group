<?php /* @var $current_packet_id int */ ?>

<main class="main">
    <section class="header-section">
        <h1>Личный кабинет</h1>
    </section>
    <section class="form-area">

        <form method="post">

            <fieldset class="reg-3 small-height">
                <span class="question-span small block bold marginal">Ваш текущий пакет обслуживания:</span>

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

                <input id="business" type="radio" name="packet" value="4">
                <label data-name="packet" class="radio modified-small packet" for="business"><span>Business</span> – price <span class="old">250.50 ILS</span> <span>200.10 ILS</span></label>
                <div style="clear: both;"></div>
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</li>
                    <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</li>
                </ul>

                <input id="loyalty" type="radio" name="packet" value="5">
                <label data-name="packet" class="radio modified-small packet" for="loyalty"><span>Loyalty program - cash back</span> – price <span class="old">250.50 ILS</span> <span>200.10 ILS</span></label>
                <div style="clear: both;"></div>
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</li>
                    <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</li>
                </ul>

            </fieldset>

            <fieldset class="buttons">
                <a class="left button" href="#">Сменить пакет</a>
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