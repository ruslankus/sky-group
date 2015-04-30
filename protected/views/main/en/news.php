<?php
$cs = Yii::app()->clientScript;
$cs->registerCssFile(Yii::app()->request->baseUrl.'/css/news.css');
?>
<main class="main">
<section class="header-section">
    <h1><span>News</span></h1>
</section>

<section class="content">
    <div class="content-col">
        <img src="<?php echo Yii::app()->request->baseUrl ?>/img/about1.jpg">
        <h2>NEW SITE LAUNCH</h2>
        <p>We are happy to announce that our new site has just launched. We welcome you to explore the diversity of our services and if you are still not part of our community - please join us to experience the many privileged offerings and services that will make your life much easier!</p>
    </div>
    <div class="content-col">
        <h2>WELCOME</h2>
        <p>Welcome to our closed membership club. Feel free to contact us via our contacts page with any questions and enjoy all the privileges of our club.</p>
        <img src="<?php echo Yii::app()->request->baseUrl ?>/img/about_2.jpg">
    </div>
    <div class="content-col">
        <img src="<?php echo Yii::app()->request->baseUrl ?>/img/about1.jpg">
        <h2>GOING INTERNATIONAL</h2>
        <p>We are expanding our services to Russia! Now that Israel and Russia members are united in our private club we can offer much more beneficial services to all members.</p>
    </div>
    <div class="cls"></div>
</section>
</main>