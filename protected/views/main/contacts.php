<?php
$cs = Yii::app()->clientScript;
$cs->registerCssFile(Yii::app()->request->baseUrl.'/css/contacts.css');

?>
<main class="main">
<section class="header-section">
    <h1><span>Контакты</span></h1>
</section>

<section class="content">
    <div class="contacts-info">
        <div class="field">
            Contact number
        </div>
        <div class="value">
            +470 000 00000
        </div>    
        <div class="field">
            Help line (for Platinum and Diamond clients)
        </div>
        <div class="value">
            +470 000 00000
        </div> 
        <div class="field">
            24/7 help line (3 LS/min)
        </div>
        <div class="value">
            +470 000 00000
        </div> 
        <div class="field">
            Complaint line
        </div>
        <div class="value">
            +470 000 00000
        </div> 
        <div class="field">
            Help center online
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
        Get in touch with us
    </h2>


    <div class="content-col left">
        <input type="text" placeholder="Name">
        <input type="text" placeholder="Email">
    </div>

    <div class="content-col right">
        <input type="text" placeholder="Country">
        <input type="text" placeholder="Phone number">
    </div>
    <div class="cls"></div>
    <textarea>Your request, content, ect</textarea>
    <div class="buttons">
        <a href="#">Cancel</a><button>SEND</button>
    </div>
</section>
</main>
