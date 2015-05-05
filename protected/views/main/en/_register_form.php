<div class="form">
    <form method="post" action="<?php echo Yii::app()->createUrl(Yii::app()->language.'/registration/step/1'); ?>">
    <table>
        <tr>
            <td class="two"><input type="text" name="first_name" placeholder="Name" value=""></td>
            <td class="one"><input type="text" name="last_name" placeholder="Surname" value=""></td>
            <td class="one"><input type="text" name="Phone" placeholder="Phone" value=""></td>
            <td><input type="text" name="email" placeholder="Email" value=""></td>
            <td><button>Registration</button></td>
            <input type="hidden" name="from_index" value="yes" />
        </tr>
    </table>
    </form>
</div>