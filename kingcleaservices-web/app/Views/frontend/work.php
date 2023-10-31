<!--Start Page Header-->
<section class="page-header">
    <div class="page-header__bg" style="
      background-image: url(<?php echo base_url();?>assets/images/backgrounds/page-header-bg.jpg);
    "></div>
    <div class="shape1 zoominout-2">
        <img src="<?php echo base_url(); ?>assets/images/shapes/page-header-shape1.png" alt="#" />
    </div>
    <div class="shape2 float-bob-y">
        <img src="<?php echo base_url(); ?>assets/images/shapes/page-header-shape2.png" alt="#" />
    </div>
    <div class="shape3 float-bob-y">
        <img src="<?php echo base_url(); ?>assets/images/shapes/page-header-shape3.png" alt="#" />
    </div>
    <div class="page-header__gradient" style="
      background-image: url(<?php echo base_url();?>assets/images/pattern/page-header-gradient.png);
    "></div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Our Works</h2>
            <ul class="thm-breadcrumb">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><span>/</span></li>
                <li>Works</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Header-->

<!--Start Projects One-->
<section class="projects-one projects-one--three style4">
    <div class="container">
        <div class="row">
            <?php $i=1; foreach ($ourwork as $ourwork) : ?>
            <!--Start Projects One Single-->
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                <div class="projects-one__single">
                    <div class="projects-one__single-img">
                        <div class="inner">
                            <img src="<?php echo base_url(); ?>assets/uploads/ourwork/<?php echo $ourwork['ourwork_img'];?>"
                                alt="#" />
                            <div class="overlay-content">
                                <div class="content-box">
                                    <p>Cleaning</p>
                                    <h2>
                                        <a href="javascript:void(0);"><?php echo $ourwork['title'];?></a>
                                    </h2>
                                </div>

                                <div class="btn-box">
                                    <a href="https://wa.me/8105285392"><span class="icon-right-arrow2"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Projects One Single-->
            <?php  $i++; endforeach; ?>

</section>

<section class="why-choose-one locationsecs">
    <div class="why-choose-one__inner losec">
        <div class="shape3">
            <img src="<?php echo base_url(); ?>assets/images/shapes/why-choose-v1-shape3.png" alt="#" />
        </div>
        <div class="shape4">
            <img src="<?php echo base_url(); ?>assets/images/shapes/why-choose-v1-shape4.png" alt="#" />
        </div>
        <div class="container">
            <div class="row">
                <!--Start Why Choose One Single-->
                <div class="col-xl-12 col-lg-12 wow animated fadeInUp animated" data-wow-delay="0.1s" style="
                  visibility: visible;
                  animation-delay: 0.1s;
                  animation-name: fadeInUp;
                ">
                    <div class="why-choose-one__single mt-lg-4 mt-0 pb-lg-4 pb-0">
                        <div class="sec-title__tagline d-flex justify-content-center py-0">
                            <p>
                                <span class="left-shape"><img
                                        src="<?php echo base_url(); ?>assets/images/shapes/sec-title-shape1.png"
                                        alt="#" /></span>
                                Areas We Save In Bangalore
                                <span class="right-shape"><img
                                        src="<?php echo base_url(); ?>assets/images/shapes/sec-title-shape1.png"
                                        alt="#" /></span>
                            </p>
                        </div>

                        <div class="why-choose-one__single-inner text-center locatsec">
                            <p>
                                Our clients are present in Bellandur, Marathahalli, Hosur
                                Road, Sarjapura Road,<br />
                                Whitefield, Koramangala, HSR Layout, Sanjaynagar,
                                Sadashivanagar, Mahadevpura,<br />
                                Bannerghatta Road, Richmond Road, Kadugodi, Indiranagar,
                                Jayanagar,<br />
                                Malleshwaram, JP Nagar, Indiranagar, Hebbal, Electronic
                                City and other parts of Bangalore.
                            </p>
                        </div>
                    </div>
                </div>
                <!--End Why Choose One Single-->
            </div>
        </div>
    </div>
</section>
</div>
</div>