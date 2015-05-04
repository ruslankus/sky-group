    <div class="form">
        <form method="post" action="<?php echo Yii::app()->createUrl(Yii::app()->language.'/registration/step/1'); ?>">
            <table>
                <tr>
                    <td class="two"><input type="text" name="firt_name" placeholder="Имя" value=""></div></td>
                    <td class="two"><input type="text" name="last_name" placeholder="Фамилия" value=""></td>
                    <td class="one"><input type="text" name="Phone" placeholder="Телефон" value=""></td>
                    <td><input type="text" name="email" placeholder="Эл.почта" value=""></td>
                    <td><button>Регистрация</button></td>
                </tr>
            </table>
        </form>
    </div>