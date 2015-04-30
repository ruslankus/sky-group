<section class="form-area">

    <form method="post">

        <fieldset class="reg-3 small-height bordered-bottom">
            <span class="question-span small block bold">Система присваивает уникальный номер абонента</span>
            <span class="question-span small block bold"><?php echo $_SESSION['step_1']['user_name']." ".$_SESSION['step_1']['last_name'] ?></span>
            <span class="question-span small block">Пакет обслуживания<span class="right bold"><?php echo $objProds->name?></span></span>
            <span class="question-span small block">
                Сумма (без скидки)<span class="right bold"><?php echo number_format($objProds->price / 100 ,2)?> ILS</span>
            </span>
            <span class="question-span small block">
                Скидка (в случае действия промокода)<span class="right bold"><?php echo number_format($objProds->price / 100 ,2)?> ILS</span>
            </span>
            <span class="question-span small block">Сумма (со скидкой)<span class="right bold"><?php echo number_format($objProds->price / 100 ,2)?> ILS</span></span>
            <div style="clear: both;"></div>
        </fieldset>
        <div style="clear: both;"></div>

        <label class="block">Оплата</label>
        <div style="clear: both;"></div>
        <span class="question-span">Является ли владелец карты оплаты другим лицом нежели заказчик?</span>

        <label data-name="other-person" class="radio" for="other-person-yes">Да</label>
        <label data-name="other-person" class="radio active" for="other-person-no">Нет</label>
        <input id="other-person-yes" type="radio" name="other-person" value="yes">
        <input id="other-person-no" type="radio" checked name="other-person" value="no">
        <div style="clear: both;"></div>

        <section class="offset hidden-block if-other-person">
            <fieldset class="right reg-3">
                <label>Данные владельца карты</label>
                <input placeholder="Имя владельца карты" type="text" name="" value="">
                <input placeholder="Фамилия владельца карты" type="text" name="" value="">
                <input placeholder="Улица" type="text" name="" value="">
                <input class="half" placeholder="Дом" type="text" name="" value="">
                <input class="half separate" placeholder="Квартира" type="text" name="" value="">
                <input placeholder="Город" type="text" name="" value="">
                <input placeholder="Страна" type="text" name="" value="">
                <input placeholder="Контактный номер телефона" type="text" name="" value="">
                <div style="clear: both;"></div>
            </fieldset>
            <div style="clear: both;"></div>
        </section>

        <fieldset class="buttons">
            <a class="reversed left button" href="/registration/step/6">Назад</a>
            <input class="right pay" type="submit" value="Оплатить">
            <a class="right cancel-link" href="/">Отменить</a>
        </fieldset>

        <div style="clear: both;"></div>
    </form>

</section>