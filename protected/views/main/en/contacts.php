<?php
$cs = Yii::app()->clientScript;
$cs->registerCssFile(Yii::app()->request->baseUrl.'/css/contacts.css');

?>
<main class="main">
<section class="header-section">
    <h1><span>CONTACTS</span></h1>
</section>

<section class="content">
    <div class="contacts-info">
        <div class="field">
            Contact phone
        </div>
        <div class="value">
            +470 000 00000
        </div>    
        <div class="field">
            Helpline (for platinum and business customers)
        </div>
        <div class="value">
            +470 000 00000
        </div> 
        <div class="field">
            24/7 Helpline (3LS / min)
        </div>
        <div class="value">
            +470 000 00000
        </div> 
        <div class="field">
            Complaints
        </div>
        <div class="value">
            +470 000 00000
        </div> 
        <div class="field">
            Online Help Center
        </div>
        <div class="value">
        <a href="mailto:sg-help@server.com">sg-help@server.com</a>
        </div> 
        <div class="field">
            Email for agents
        </div>
        <div class="value">
            <a href="mailto:sg-spam@server.com">sg-spam@server.com</a>
        </div> 
        <div class="cls"></div>
    </div>

    <h2>
        CONTACT US
    </h2>
    <?php if ($send == true) {
        echo '<br/>Message sent succesfully.<br/>';
    }
    ?>
    <?php echo CHtml::beginForm();?>
    <div class="content-col left">
        <input name="name" type="text" placeholder="Name" data-error="<?php echo $error['name']; ?>" value="<?php echo $data['name']; ?>">
        <input name="email" type="text" placeholder="Email" data-error="<?php echo $error['email']; ?>" value="<?php echo $data['email']; ?>">
    </div>

    <div class="content-col right">
        <input name="country" type="text" placeholder="Country" data-error="<?php echo $error['country']; ?>" value="<?php echo $data['country']; ?>">
        <input name="phone" type="text" placeholder="Phone" data-error="<?php echo $error['phone']; ?>" value="<?php echo $data['phone']; ?>">
    </div>
    <div class="cls"></div>
    <textarea name="text" data-error="<?php echo $error['text']; ?>"><?php echo !empty($data['text']) ? $data['text']:'Your request, inquiry, etc.'; ?></textarea>
    <div class="buttons">
        <button>Send</button>
    </div>
    <?php echo CHtml::beginForm();?>
</section>
</main>
