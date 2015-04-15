<?php
$cs = Yii::app()->clientScript;
$cs->registerCssFile(Yii::app()->request->baseUrl.'/css/home.css');

?>

     <section class="home-form">
     <?php $this->renderPartial('_register_form')?>       
     </section>
        <section class="info">
            <div class="info-box">
                <div class="info-col">
                    <div class="col-ico about"></div>
                    <div class="info-col-content">
                        <h1>About us</h1>
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/home1.jpg">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ullamcorper sem in luctus accumsan. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus id pretium ligula, sed fringilla arcu. In et laoreet velit, quis accumsan turpis. Suspendisse potenti. Aliquam iaculis porttitor odio. Praesent vehicula tortor vel fermentum semper. 
                        </p>
                    </div> <!-- / info -col-content -->
                </div>
                <div class="info-col">
                    <div class="col-ico clients"></div>
                    <div class="info-col-content">
                        <h1>Client status</h1>
                        <div  class="client-box silver">
                            <h2>Silver Client</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ullamcorper sem in luctus accumsan.
                            </p>
                        </div>
                        <div  class="client-box gold">
                            <h2>Gold Client</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ullamcorper sem in luctus accumsan.
                            </p>
                        </div>
                        <div  class="client-box diamond">
                            <h2>Diamond Client</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ullamcorper sem in luctus accumsan.
                            </p>
                        </div>
                    </div> <!-- / info -col-content -->
                </div>
                <div class="info-col">
                    <div class="col-ico vision"></div>
                    <div class="info-col-content">
                       <h1>Our Vision</h1>
                       <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                       </p>
                       <p>
                            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                       </p>
                    </div> <!-- / info -col-content -->
                </div>
                <div class="cls"></div>
            </div>

        </section>