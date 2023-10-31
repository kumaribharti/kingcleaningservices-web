<?php 
$sub_category=$sub_category_data;
?>

<style>
    .uuu ul{
        list-style-type: disc;
    }
</style>

<!--Start Page Header-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(<?php echo base_url(); ?>assets/images/backgrounds/page-header-bg.jpg)">
    </div>
    <div class="shape1 zoominout-2"><img src="<?php echo base_url(); ?>assets/images/shapes/page-header-shape1.png" alt="#"></div>
    <div class="shape2 float-bob-y"><img src="<?php echo base_url(); ?>assets/images/shapes/page-header-shape2.png" alt="#"></div>
    <div class="shape3 float-bob-y"><img src="<?php echo base_url(); ?>assets/images/shapes/page-header-shape3.png" alt="#"></div>
    <div class="page-header__gradient" style="background-image: url(<?php echo base_url(); ?>assets/images/pattern/page-header-gradient.png);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2><?php echo $category['category_name'];?> Prices</h2>
            <ul class="thm-breadcrumb">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><span>/</span></li>
                <li><?php echo $category['category_name'];?> Prices</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Header-->


<!-- pricing start  -->
<section class="pricing-section">
    <div class="pricing-sections">
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
            <?php $i=1; foreach ($sub_category as $key) : ?>
                <li class="nav-item" role="presentation">
                    <button class="nav-link <?php if($i==1) echo "active";?> " id="home-tab<?php echo $i;?>" data-bs-toggle="tab" data-bs-target="#home<?php echo $i;?>"
                        type="button" role="tab" aria-controls="home<?php echo $i;?>" aria-selected="<?php if($i==1) {echo "true";}else{echo "false";};?>"><?php echo $key['sub_c_name'];?></button>
                </li>
                <?php  $i++; endforeach; ?>
                <!-- <li class="nav-item" role="presentation">
                    <button class="nav-link " id="home-tab1" data-bs-toggle="tab" data-bs-target="#home1" type="button"
                        role="tab" aria-controls="home1" aria-selected="false">Kitchen Deep Cleaning</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link " id="home-tab2" data-bs-toggle="tab" data-bs-target="#home2" type="button"
                        role="tab" aria-controls="home2" aria-selected="false">Living Room & Bed Room
                        Cleaning</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link " id="home-tab3" data-bs-toggle="tab" data-bs-target="#home3" type="button"
                        role="tab" aria-controls="home3" aria-selected="false">Floor Cleaning</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link " id="home-tab4" data-bs-toggle="tab" data-bs-target="#home4" type="button"
                        role="tab" aria-controls="home4" aria-selected="false">Hard to Reach areas</button>
                </li> -->
            </ul>
            <div class="tab-content" id="myTabContent">
            <?php $j=1; foreach ($sub_category as $key) : ?>
                <div class="tab-pane fade  <?php if($j==1) echo "show";?> <?php if($j==1) echo "active";?>" id="home<?php echo $j;?>" role="tabpanel" aria-labelledby="home-tab<?php echo $j;?>">
                    <!--Start Pricing One-->
                    <section class="pricing-one pricing-one--pricing">
                        <div class="pricing-one__bg">
                        </div>
                        <div class="container">
                            <div class="mb-md-5 mb-3 uuu">
                            <?php echo $key['content'];?>
                                <!-- <ul style="list-style-type: disc;">
                                    <li>Deep cleaning of the bathroom floor and wall tiles. </li>
                                    <li>De-scaling the water taps & cleaning WC seat.</li>
                                    <li>Cleaning of all bathroom fittings, exhaust fans, lighting fixtures and geyser
                                        etc.</li>
                                    <li>Cleaning of mirrors, windows and doors.</li>
                                    <li><b>Job Duration 2-3 hours</b></li>
                                    <li><b>Professionals Head Count: 2 -3 persons</b></li>
                                </ul> -->
                            </div>
                            <div class="row pricediv">

                            <?php
                            	$db = db_connect(); // Connect to the database
                                $query = $db->table('price_card')
                                    ->select('*') // Select columns from both tables
                                ->where('sub_c_id',$key['subcategory_id']);
                                $price_card = $query->get()->getResultArray(); // Execute the query and get the results
                                // echo "<pre>";
                                // print_r($price_card);
                                // exit;
                            ?>

                            <?php $k=1; foreach ($price_card as $keys) : ?>
                                <!--Start Pricing One Single-->
                                <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp g-0" data-wow-delay="0.1s">
                                    <div class="pricing-one__single g-0">
                                        <a type="submit" class="btn pricingbtn" href="javascript:void(0); " ><?php echo $keys['card_for'];?></a>
                                        <div class="table-content">
                                            <ul>
                                                <li _ngcontent-serverapp-c11=""><small _ngcontent-serverapp-c11=""><b
                                                            _ngcontent-serverapp-c11="">Offer Price: <span
                                                                _ngcontent-serverapp-c11=""
                                                                style="color: green;">₹<?php echo $keys['offer_price'];?></span></b><br
                                                            _ngcontent-serverapp-c11=""><s
                                                            _ngcontent-serverapp-c11="">M.R.P.:
                                                            ₹<?php echo $keys['mrp'];?></s></small><br _ngcontent-serverapp-c11=""><small
                                                        _ngcontent-serverapp-c11=""
                                                        style="color: grey; font-weight: 550;"> (You
                                                        save <span _ngcontent-serverapp-c11=""
                                                            style="color: #333;">₹<?php echo $keys['saving'];?>)</span></small><br
                                                        _ngcontent-serverapp-c11="">
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="callwhatsappicons">
                                        <a type="submit" class="btn pricingbtnss" href="https://wa.me/8105285392"><i class="fa-brands fa-whatsapp"></i></a>
                                        <a type="submit" class="btn btnsecondaryss" href="tel:8105285392"><i class="fa-solid fa-phone"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Pricing One Single-->
                                <?php  $k++; endforeach; ?>


                               
                            </div>
                        </div>
                    </section>
                    <!--End Pricing One-->
                </div>
                <?php  $j++; endforeach; ?>

            </div>
        </div>
    </div>
</section>
<!-- pricing end  -->



<!-- table start  -->
<section class="team-one team-one--two">
    <div class="container">
        <h2 class="mb-md-5 mb-4"><?php echo $category['category_name'];?> included: -</h2>

        <div class="d-flex justify-content-center">
            <table>
            <?php $i=1; foreach ($table_data as $table_data) : ?>
                <tr>
                    <td><?php echo $table_data['field_1'];?></td>
                    <td><?php echo $table_data['field_2'];?></td>
                    <td><?php echo $table_data['field_3'];?></td>
                </tr>
                <?php  $i++; endforeach; ?>
                <!-- <tr>
                    <td>Kitchen</td>
                    <td>Kitchen Floor, Tiles, Stove, Cabinet Exterior Yes</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>Floor</td>
                    <td>Floor Tiles, Marbles, Granites etc. Only Wiping & Mopping</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>Curtains & Mattresses</td>
                    <td>Dry Vacuuming</td>
                    <td>No</td>
                </tr>
                <tr>
                    <td>Carpet, Sofa & chairs</td>
                    <td>Dry Vacuuming</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>Wall & Ceiling</td>
                    <td>Dry dusting</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>Windows & electrical fittings</td>
                    <td>Wet wiping</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>Wooden Furniture</td>
                    <td>Wet wiping</td>
                    <td>Yes</td>
                </tr> -->
            </table>
        </div>
    </div>
</section>
<!-- table end  -->



<!-- location  start-->
<section class="why-choose-one locationsecs">

    <div class="why-choose-one__inner losec">
        <div class="shape3"><img src="<?php echo base_url(); ?>assets/images/shapes/why-choose-v1-shape3.png" alt="#"></div>
        <div class="shape4"><img src="<?php echo base_url(); ?>assets/images/shapes/why-choose-v1-shape4.png" alt="#"></div>
        <div class="container">
            <div class="row">
                <!--Start location One Single-->
                <div class="col-xl-12 col-lg-12 wow animated fadeInUp animated " data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">

                    <div class="why-choose-one__single mt-lg-4 mt-0 pb-lg-4 pb-0">
                        <div class="sec-title__tagline d-flex justify-content-center py-0">
                            <p> <span class="left-shape"><img src="<?php echo base_url(); ?>assets/images/shapes/sec-title-shape1.png"
                                        alt="#"></span>
                                Areas We Save In Bangalore <span class="right-shape"><img
                                        src="<?php echo base_url(); ?>assets/images/shapes/sec-title-shape1.png" alt="#"></span>
                            </p>
                        </div>

                        <div class="why-choose-one__single-inner text-center locatsec">

                            <p>Our clients are present in Bellandur, Marathahalli, Hosur Road, Sarjapura Road,<br>
                                Whitefield, Koramangala, HSR Layout, Sanjaynagar, Sadashivanagar, Mahadevpura,<br>
                                Bannerghatta Road, Richmond Road, Kadugodi, Indiranagar, Jayanagar,<br>
                                Malleshwaram, JP Nagar, Indiranagar, Hebbal, Electronic City and other parts of
                                Bangalore.</p>
                        </div>
                    </div>
                </div>
                <!--End location One Single-->
            </div>
        </div>
    </div>
</section>

<!-- location  end -->


