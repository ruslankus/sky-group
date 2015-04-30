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


    <div class="content-col left">
        <input type="text" placeholder="Name">
        <input type="text" placeholder="Email">
    </div>

    <div class="content-col right">
        <input type="text" placeholder="Country">
        <input type="text" placeholder="Phone">
    </div>
    <div class="cls"></div>
    <textarea>Your request, inquiry, etc.</textarea>
    <div class="buttons">
        <a href="#">Cancel</a><button>Send</button>
    </div>
</section>
</main>
