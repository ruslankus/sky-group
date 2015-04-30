<?php
$cs = Yii::app()->clientScript;
$cs->registerCssFile(Yii::app()->request->baseUrl.'/css/products.css');

?>

<main class="main">
<section class="header-section">
    <h1><span>Продукты</span></h1>
</section>

<section class="content">
    
    <div class="content-col">
        <h2>Silver Membership</h2>
        <img src="<?php echo Yii::app()->request->baseUrl ?>/img/about1.jpg">
        <p>Tax refund. Insurance claims. Communication costs optimisation.</p>
    </div><!--/product-->
    <div class="content-col">
        <h2>Gold Membership</h2>
        <img src="<?php echo Yii::app()->request->baseUrl ?>/img/about_2.jpg">
        <p>Tax refund. Insurance claims. National Insurance claims. Communication costs optimisation.
            Refinancing Mortgages. Filling documents for government offices
        </p>
    </div><!--/product-->
    <div class="content-col">
        <h2>Platinum Membership</h2>
        <img src="<?php echo Yii::app()->request->baseUrl ?>/img/about1.jpg">
        <p>Tax refund.Insurance claims. National Insurance claims. Communication costs optimisation.
            Refinancing Mortgages. Filling documents for government offices. Medical examination By orthopaedist Not for court.
            Optimisation of services from HMO. Call back services
        </p>
    </div><!--/product-->
    <div class="content-col">
        <h2>Business Membership </h2>
        <img src="<?php echo Yii::app()->request->baseUrl ?>/img/about_2.jpg">
        <p>Tax refund. Insurance claims. National Insurance claims. Communication costs optimisation. Refinancing Mortgages.
            Filling documents for government offices. Medical examination By orthopaedist Not for court. Optimisation of services from HMO.
            Call back services. Secretary services - calendar. Fax to mail service. Basic internet site.
        </p>
    </div><!--/product-->
    <div class="content-col">
        <h2>Loyalty Membership </h2>
        <img src="<?php echo Yii::app()->request->baseUrl ?>/img/about1.jpg">
        <p>Platinum Membership offerings + cash back .</p>
    </div><!--/product-->
    
    <div class="cls"></div>
</section>
</main>
