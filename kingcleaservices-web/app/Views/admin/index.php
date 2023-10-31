

<!-- removeNotificationModal -->
<div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
        <!-- ========== App Menu ========== -->
        <?php include 'include/sidebar.php';?>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                       

                        <div class="col-xl-12">
                            <div class="card dash-mini">
                                <div class="card-header border-0 align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Overview</h4>
                                    <div class="flex-shrink-0">
                                        <div class="dropdown card-header-dropdown d-flex py-2">
                                        

                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body pt-1">
                                    <div class="row">
                                        <div class="col-lg-2 mini-widget pb-3 pb-lg-0">
                                            <div class="d-flex align-items-end">
                                                <div class="flex-grow-1">

                                                    <h2 class="mb-0 fs-24"><span class="counter-value" data-target="<?php echo $total_invoice;?>">0</span></h2>

                                                    <h5 class="text-muted fs-16 mt-2 mb-0">Total Invoice</h5>
                                                    <!-- <p class="text-muted mt-3 pt-1 mb-0 text-truncate"> <span class="badge bg-info me-1">1.15%</span>  since last week</p> -->
                                                </div>
                                               
                                            </div>
                                        </div>

                                        <div class="col-lg-2 mini-widget py-3 py-lg-0">
                                            <div class="d-flex align-items-end">
                                                <div class="flex-grow-1">
                                                    <h2 class="mb-0 fs-24"><i class="fa fa-thin fa-indian-rupee-sign"></i> <span class="counter-value" data-target="<?php echo $total_sale;?>">124</span></h2>
                                                    <h5 class="text-muted fs-16 mt-2 mb-0">Total Sale</h5>
                                                    <!-- <p class="text-muted mt-3 pt-1 mb-0 text-truncate"> <span class="badge bg-danger me-1">1.15%</span>  since last week</p> -->
                                                </div>
                                               
                                            </div>
                                        </div>

                                        <div class="col-lg-2 mini-widget pt-3 pt-lg-0">
                                            <div class="d-flex align-items-end">
                                                <div class="flex-grow-1">
                                                    <h2 class="mb-0 fs-24"><i class="fa fa-thin fa-indian-rupee-sign"></i> <span class="counter-value" data-target="<?php echo $total_expenses;?>">0</span></h2>
                                                    <h5 class="text-muted fs-16 mt-2 mb-0">Total Expenses</h5>
                                                    <!-- <p class="text-muted mt-3 pt-1 mb-0 text-truncate"> <span class="badge bg-info me-1">3.14%</span>  since last week</p> -->
                                                </div>
                                               
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-lg-2 mini-widget pt-3 pt-lg-0">
                                            <div class="d-flex align-items-end">
                                                <div class="flex-grow-1">
                                                    <h2 class="mb-0 fs-24"><i class="fa fa-thin fa-indian-rupee-sign"></i> <span class="counter-value" data-target="<?php echo $total_loan?>">0</span></h2>
                                                    <h5 class="text-muted fs-16 mt-2 mb-0">Total Loan</h5>
                                                    <!-- <p class="text-muted mt-3 pt-1 mb-0 text-truncate"> <span class="badge bg-info me-1">3.14%</span>  since last week</p> -->
                                                </div>
                                                
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-lg-2 mini-widget pt-3 pt-lg-0">
                                            <div class="d-flex align-items-end">
                                                <div class="flex-grow-1">
                                                    <h2 class="mb-0 fs-24"><i class="fa fa-thin fa-indian-rupee-sign"></i> <span class="counter-value" data-target="<?php echo $total_received;?>">100</span></h2>
                                                    <h5 class="text-muted fs-16 mt-2 mb-0">Total Received</h5>
                                                    <!-- <p class="text-muted mt-3 pt-1 mb-0 text-truncate"> <span class="badge bg-info me-1">3.14%</span>  since last week</p> -->
                                                </div>
                                               
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-lg-2 mini-widget pt-3 pt-lg-0">
                                            <div class="d-flex align-items-end">
                                                <div class="flex-grow-1">
                                                    <h2 class="mb-0 fs-24"><i class="fa fa-thin fa-indian-rupee-sign"></i> <span class="counter-value" data-target="<?php echo $total_paid_to_vender;?>">100</span></h2>
                                                    <h5 class="text-muted fs-16 mt-2 mb-0">Total Paid To Vender</h5>
                                                    <!-- <p class="text-muted mt-3 pt-1 mb-0 text-truncate"> <span class="badge bg-info me-1">3.14%</span>  since last week</p> -->
                                                </div>
                                               
                                            </div>
                                        </div><!-- end col -->
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                       
                        <div class="col-xl-12">
                            <div class="card dash-mini">
                                <div class="card-header border-0 align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Overview</h4>
                                    <div class="flex-shrink-0">
                                    <!-- <div class="dropdown card-header-dropdown d-flex py-2">
                                        <div class="search-box mx-1">
                                <input type="datetime-local" class="form-control p-1" id="searchMemberList1" placeholder="Search for Result">
                            </div>
                            <div class="search-box">
                                <input type="datetime-local" class="form-control p-1" id="searchMemberList2" placeholder="Search for Result">
                            </div>
                            <div class="search-box">
                                <button class="btn btn-success btn p-1 mx-1">Search</button>
                            </div>

                                        </div> -->
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body pt-1">
                                    <div class="row">
                                        <div class="col-lg-6 mini-widget pb-3 pb-lg-0">
                                        <h5 class="text-center">Recent Bill</h5>
                                        <div class="table-responsive"  style="height: 250px; overflow-y: scroll;">
                                          
                                                    <table class="table table-centered align-middle table-nowrap mb-0">
                                                        <thead>
                                                            <tr class="text-uppercase">
                                                                <th style="width: 500px;">Name</th>
                                                                <th style="width: 30%;">Mobile</th>
                                                                <th style="width: 30%;">Bill Date</th>
                                                                <th style="width: 15%;">Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php 
                                             $i=1;
                                             foreach ($invoice_list->result() as $invoice_list) 
                                             { ?>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                   
                                                                        <div class="flex-grow-1">
                                                                            <p class="mb-0 text-truncate"><?php echo $invoice_list->first." ".$invoice_list->second; ?></p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><?php echo $invoice_list->phone; ?></td>
                                                                <td><?php echo $invoice_list->created_at; ?></td>
                                                                <td><i class="fa fa-thin fa-indian-rupee-sign"></i> <?php echo $invoice_list->amount; ?></td>
                                                            </tr>                                                                                                                  
                                                            <?php $i++;  } 
                                                            ?>
                                                        </tbody>
                                                    </table>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mini-widget py-3 py-lg-0">
                                        <h5 class="text-center">Dues Date</h5>
                                        <div class="table-responsive"  style="height: 250px; overflow-y: scroll;">
                                                    <table class="table table-centered align-middle table-nowrap mb-0">
                                                        <thead>
                                                            <tr class="text-uppercase">
                                                                <th style="width: 500px;">Name</th>
                                                                <th style="width: 30%;">Phone</th>
                                                                <th style="width: 30%;">Due date</th>
                                                                <th style="width: 15%;">Due Amount</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                                <?php 
                                             $i=1;
                                             foreach ($invoice_due_list->result() as $invoice_due_list) 
                                             { ?>
                                                            <tr class="<?php if($invoice_due_list->due_last=="0") echo "d-none" ;?>">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                       
                                                                        <div class="flex-grow-1">
                                                                            <p class="mb-0 text-truncate"><?php echo $invoice_due_list->first?></p>
                                                                        </div>
                                                                        <img src="<?php echo base_url();?>assets/images/important.gif" class="rounded" alt="user-image" height="35">
                                                                    </div>
                                                                </td>
                                                                <td ><?php echo $invoice_due_list->phone; ?></td>
                                                                <td><i class="fa fa-thin fa-indian-rupee-sign"></i><?php if($invoice_due_list->due_last!='nothing'){echo $invoice_due_list->last_due_date;}else{echo $invoice_due_list->dueDate;}?></td>
                                                                <td><i class="fa fa-thin fa-indian-rupee-sign"></i><?php if($invoice_due_list->due_last!='nothing'){echo $invoice_due_list->due_last;}else{echo $invoice_due_list->due;}?></td>
                                                               
                                                            </tr>
                                                            <?php $i++;  } 
                                                            ?>
                                                            
                                                          
                                                           
      
                                                        </tbody>
                                                    </table>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mini-widget pt-3 pt-lg-0 mt-5">
                                        <h5 class="text-center">Loan Popup</h5>
                                        <div class="table-responsive"  style="height: 250px; overflow-y: scroll;">
                                                    <table class="table table-centered align-middle table-nowrap mb-0">
                                                        <thead>
                                                            <tr class="text-uppercase">
                                                                <th style="width: 500px;">Name</th>
                                                                <th style="width: 30%;">Mobile</th>
                                                                <th style="width: 15%;">Amount</th>
                                                                <th style="width: 15%;">Due date</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                        <?php 
                                             $i=1;
                                             foreach ($loan_view->result() as $loan_view) 
                                             { ?>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">                              
                                                                        <div class="flex-grow-1">
                                                                            <p class="mb-0 text-truncate"><?php echo $loan_view->first." ".$loan_view->second; ?></p>
                                                                        </div>
                                                                        <img src="<?php echo base_url();?>assets/images/important.gif" class="rounded" alt="user-image" height="35">
                                                                    </div>
                                                                </td>
                                                                <td><?php echo $loan_view->phone?></td>
                                                                <td><i class="fa fa-thin fa-indian-rupee-sign"></i><?php echo $loan_view->amount?></td>
                                                                <td><?php echo $loan_view->due_date?></td>
                                                            </tr>
                                                            <?php $i++;  } 
                                                            ?>

                                 
                                                           
                                                        </tbody>
                                                    </table>
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-lg-6 mini-widget pt-3 pt-lg-0 mt-5">
                                        <h5 class="text-center">Stock Alert</h5>
                                        <div class="table-responsive"  style="height: 250px; overflow-y: scroll;">
                                                    <table class="table table-centered align-middle table-nowrap mb-0">
                                                        <thead>
                                                            <tr class="text-uppercase">
                                                                <th style="width: 500px;">Product Name</th>
                                                                <th style="width: 30%;">Category</th>
                                                                <th style="width: 15%;">Measurement</th>
                                                                <th style="width: 15%;">Stock</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php 
                                             $i=1;
                                             foreach ($product_list->result() as $product_list) 
                                             { ?>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                      
                                                                        <div class="flex-grow-1 ms-3">
                                                                            <p class="mb-0 text-truncate"><?php echo $product_list->product_name;?></p>
                                                                        </div>
                                                                        <img src="<?php echo base_url();?>assets/images/alert.gif" class="rounded" alt="user-image" height="35">
                                                                    </div>
                                                                </td>
                                                                <?php
                                                $category=$this->Admin_model->get_category_by_id($product_list->category_id);
                                                $sub=$this->Admin_model->get_sub_category_by_id($product_list->sub_category_id);
                                                $measurement=$this->Admin_model->get_measurement_by_id($product_list->measurement_id);
                                                ?>
                                                                <td><?php echo $category;?></td>
                                                                <td><?php echo $measurement;?></td>
                                                                <td><?php echo $product_list->stock;?></td>
                                                            </tr>
                                                            <?php $i++;  } 
           ?>        
                                                        </tbody>
                                                    </table>
                                            </div>
                                        </div><!-- end col -->
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="col-xl-12">
                            <div class="card dash-mini">
                                <div class="card-header border-0 align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Expenses</h4>
                                    <div class="flex-shrink-0">
                                    <!-- <div class="dropdown card-header-dropdown d-flex py-2">
                                        <div class="search-box mx-1">
                                <input type="datetime-local" class="form-control p-1" id="searchMemberList1" placeholder="Search for Result">
                            </div>
                            <div class="search-box">
                                <input type="datetime-local" class="form-control p-1" id="searchMemberList2" placeholder="Search for Result">
                            </div>
                            <div class="search-box">
                                <button class="btn btn-success btn p-1 mx-1">Search</button>
                            </div>

                                        </div> -->
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body pt-1">
                                    <div class="row">
                                        <div class="col-lg-2 mini-widget pb-3 pb-lg-0">
                                            <div class="d-flex align-items-end">
                                                <div class="flex-grow-1">
                                                    <h2 class="mb-0 fs-24"><i class="fa-solid fa-indian-rupee-sign mx-2"></i><span class="counter-value" data-target="<?php echo $wheeler2;?>">0</span></h2>
                                                    <h5 class="text-muted fs-16 mt-2 mb-0">2 Wheeler</h5>
                                                    <!-- <p class="text-muted mt-3 pt-1 mb-0 text-truncate"> <span class="badge bg-info me-1">1.15%</span>  since last week</p> -->
                                                </div>
                                               
                                            </div>
                                        </div>

                                        <div class="col-lg-2 mini-widget py-3 py-lg-0">
                                            <div class="d-flex align-items-end">
                                                <div class="flex-grow-1">
                                                    <h2 class="mb-0 fs-24"><i class="fa-solid fa-indian-rupee-sign mx-2"></i><span class="counter-value" data-target="<?php echo $wheeler4;?>">0</span></h2>
                                                    <h5 class="text-muted fs-16 mt-2 mb-0">4 Wheeler</h5>
                                                    <!-- <p class="text-muted mt-3 pt-1 mb-0 text-truncate"> <span class="badge bg-danger me-1">1.15%</span>  since last week</p> -->
                                                </div>
                                              
                                            </div>
                                        </div>

                                        <div class="col-lg-2 mini-widget pt-3 pt-lg-0">
                                            <div class="d-flex align-items-end">
                                                <div class="flex-grow-1">
                                                    <h2 class="mb-0 fs-24"><i class="fa-solid fa-indian-rupee-sign mx-2"></i><span class="counter-value" data-target="<?php echo $staff;?>">214</span></h2>
                                                    <h5 class="text-muted fs-16 mt-2 mb-0">Staff</h5>
                                                    <!-- <p class="text-muted mt-3 pt-1 mb-0 text-truncate"> <span class="badge bg-info me-1">3.14%</span>  since last week</p> -->
                                                </div>
                                                
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-lg-2 mini-widget pt-3 pt-lg-0">
                                            <div class="d-flex align-items-end">
                                                <div class="flex-grow-1">
                                                    <h2 class="mb-0 fs-24"><i class="fa-solid fa-indian-rupee-sign mx-2"></i><span class="counter-value" data-target="<?php echo $palledar;?>">214</span></h2>
                                                    <h5 class="text-muted fs-16 mt-2 mb-0">Paldar</h5>
                                                    <!-- <p class="text-muted mt-3 pt-1 mb-0 text-truncate"> <span class="badge bg-info me-1">3.14%</span>  since last week</p> -->
                                                </div>
                                               
                                            </div>
                                        </div><!-- end col -->


                                        <div class="col-lg-2 mini-widget pt-3 pt-lg-0">
                                            <div class="d-flex align-items-end">
                                                <div class="flex-grow-1">
                                                    <h2 class="mb-0 fs-24"><i class="fa-solid fa-indian-rupee-sign mx-2"></i><span class="counter-value" data-target="<?php echo $other;?>">0</span></h2>
                                                    <h5 class="text-muted fs-16 mt-2 mb-0">Others</h5>
                                                    <!-- <p class="text-muted mt-3 pt-1 mb-0 text-truncate"> <span class="badge bg-info me-1">3.14%</span>  since last week</p> -->
                                                </div>
                                               
                                            </div>
                                        </div><!-- end col -->

                                        <div class="col-lg-2 mini-widget pt-3 pt-lg-0">
                                            <div class="d-flex align-items-end">
                                                <div class="flex-grow-1">
                                                    <h2 class="mb-0 fs-24"><i class="fa-solid fa-indian-rupee-sign mx-2"></i><span class="counter-value" data-target="<?php echo $salary?>">0</span></h2>
                                                    <h5 class="text-muted fs-16 mt-2 mb-0">Salary</h5>
                                                    
                                                    
                                                </div>
                                              
                                            </div>
                                        </div>
                                        


                                        <!-- <div class="col-lg-2 mini-widget pt-3 pt-lg-0 mt-5">
                                            <div class="d-flex align-items-end">
                                                <div class="flex-grow-1">
                                                    <h2 class="mb-0 fs-24"><i class="fa-solid fa-indian-rupee-sign mx-2"></i><span class="counter-value" data-target="<?php echo $salary;?>">0</span></h2>
                                                    <h5 class="text-muted fs-16 mt-2 mb-0">Salary</h5>
                                                    <p class="text-muted mt-3 pt-1 mb-0 text-truncate"> <span class="badge bg-info me-1">3.14%</span>  since last week</p>
                                                </div>
                                               
                                            </div>
                                        </div> -->

                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                   

                    <div class="row mx-1">
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-header border-0 align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Cash</h4>

                                </div>

                                <div class="card-body pt-0">
                                <h2 class="mb-0 fs-24"><i class="fa-solid fa-indian-rupee-sign mx-2"></i><span class="counter-value" data-target="<?php echo $cash;?>">0</span></h2>                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-header border-0 align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">SBI Bank</h4>

                                </div>

                                <div class="card-body pt-0">
                                <h2 class="mb-0 fs-24"><i class="fa-solid fa-indian-rupee-sign mx-2"></i><span class="counter-value" data-target="<?php echo $SBI_Bank;?>">0</span></h2> 
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-header border-0 align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">UCO Bank</h4>

                                </div>

                                <div class="card-body pt-0">
                                <h2 class="mb-0 fs-24"><i class="fa-solid fa-indian-rupee-sign mx-2"></i><span class="counter-value" data-target="<?php echo $UCO_Bank;?>">0</span></h2> 
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="row mx-1">
                       

                       <div class="col-xl-12">
                           <div class="card dash-mini">
                               <div class="card-header border-0 align-items-center d-flex">
                                   <h4 class="card-title mb-0 flex-grow-1">Bank Balance Overview</h4>
                                   <div class="flex-shrink-0">
                                       <div class="dropdown card-header-dropdown d-flex py-2">
                                       

                                       </div>
                                   </div>
                               </div><!-- end card header -->

                               <div class="card-body pt-1">
                                   <div class="row">
                                       <div class="col-lg-4 mini-widget pb-3 pb-lg-0">
                                           <div class="d-flex align-items-end">
                                               <div class="flex-grow-1">

                                                   <h2 class="mb-0 fs-24"><i class="fa fa-thin fa-indian-rupee-sign"></i><span class="counter-value" data-target="<?php echo $Total_deposit;?>">0</span></h2>

                                                   <h5 class="text-muted fs-16 mt-2 mb-0">Total</h5>
                                                   <!-- <p class="text-muted mt-3 pt-1 mb-0 text-truncate"> <span class="badge bg-info me-1">1.15%</span>  since last week</p> -->
                                               </div>
                                              
                                           </div>
                                       </div>

                                       <div class="col-lg-4 mini-widget py-3 py-lg-0">
                                           <div class="d-flex align-items-end">
                                               <div class="flex-grow-1">
                                                   <h2 class="mb-0 fs-24"><i class="fa fa-thin fa-indian-rupee-sign"></i> <span class="counter-value" data-target="<?php echo $UCO_Bank_Deposit;?>">0</span></h2>
                                                   <h5 class="text-muted fs-16 mt-2 mb-0">UCO Bank</h5>
                                                   <!-- <p class="text-muted mt-3 pt-1 mb-0 text-truncate"> <span class="badge bg-danger me-1">1.15%</span>  since last week</p> -->
                                               </div>
                                              
                                           </div>
                                       </div>

                                       <div class="col-lg-4 mini-widget pt-3 pt-lg-0">
                                           <div class="d-flex align-items-end">
                                               <div class="flex-grow-1">
                                                   <h2 class="mb-0 fs-24"><i class="fa fa-thin fa-indian-rupee-sign"></i> <span class="counter-value" data-target="<?php echo $SBI_Bank_Deposit;?>">0</span></h2>
                                                   <h5 class="text-muted fs-16 mt-2 mb-0">SBI Bank</h5>
                                                   <!-- <p class="text-muted mt-3 pt-1 mb-0 text-truncate"> <span class="badge bg-info me-1">3.14%</span>  since last week</p> -->
                                               </div>
                                              
                                           </div>
                                       </div><!-- end col -->
 
                                       
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
