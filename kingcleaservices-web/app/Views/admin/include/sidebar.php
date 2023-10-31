<div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="<?php echo base_url();?>" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/backend/assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                      <h3  class="mt-4"><img class="img-fluid" style="width:170px;" src="<?php echo base_url();?>assets/images/resources/logologo.png" alt=""></h3>
                    </span>
                </a>
                <!-- Light Logo-->
               
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">


                        <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Pages</span></li>

                        <li class="nav-item">
                           
  
                        <li class="nav-item">
                            <a class="nav-link menu-link" <?php if($active=='testimonial') echo 'style="color:white ! important; background-color: var(--in-link-color);"'?> href="<?php echo base_url();?>#sidebartestimonial" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuthentication">
                            <i class="fa-solid fa-vials"></i><span data-key="t-authentication">Testimonial</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebartestimonial">
                                <ul class="nav nav-sm flex-column">

                                    <li class="nav-item">
                                        <a href="<?php echo base_url();?>admin/testimonial_list" class="nav-link" data-key="t-signin">Testimonial List</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </li>  
                        
                        <li class="nav-item">
                            <a class="nav-link menu-link" <?php if($active=='ourwork') echo 'style="color:white ! important; background-color: var(--in-link-color);"'?> href="<?php echo base_url();?>#sidebarslider" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuthentication">
                            <i class="fa-solid fa-image"></i></i><span data-key="t-authentication">Our Work</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarslider">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="<?php echo base_url();?>admin/ourworks_list" class="nav-link" data-key="t-signin">Our Works List</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link menu-link" <?php if($active=='services') echo 'style="color:white ! important; background-color: var(--in-link-color);"'?> href="<?php echo base_url();?>#sidebarcontact_enquiry" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuthentication">
                            <i class="fa-brands fa-servicestack"></i><span data-key="t-authentication">Service Management</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarcontact_enquiry">
                                <ul class="nav nav-sm flex-column">

                                    <li class="nav-item">
                                        <a href="<?php echo base_url();?>admin/category_list" class="nav-link" data-key="t-signin">Category</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url();?>admin/sub_category_list" class="nav-link" data-key="t-signin">Sub Category</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url();?>admin/table_data" class="nav-link" data-key="t-signin">Table Data</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url();?>admin/price_card_list" class="nav-link" data-key="t-signin">Price Card</a>
                                    </li>
                                    
                                   
                                </ul>
                            </div>
                        </li>    




  


                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>

