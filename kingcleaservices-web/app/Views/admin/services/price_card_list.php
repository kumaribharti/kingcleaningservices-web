
        <!-- ========== App Menu ========== -->
      
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
                                <h4 class="mb-sm-0">Price Card List</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Price Card</a></li>
                                        <li class="breadcrumb-item active">Price Card List</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row pb-4 gy-3">
                        <div class="col-sm-4">
                            <a href="#" class="btn btn-primary addtax-modal" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="las la-plus me-1"></i> Add More</a>
                        </div>

                        <div class="col-sm-auto ms-auto">
                           <div class="d-flex gap-3">
                           
                           
                           </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive table-card mb-4">
                                        <table class="table  align-middle mb-5" id="myTable">
                                            <thead>
                                                <tr class="text-muted text-uppercase">                                                  
                                                    <th scope="col">SNO</th>
                                                    <th scope="col">Price card for</th>
                                                    <th scope="col">Offer price</th>
                                                    <th scope="col">MRP</th>
                                                    <th scope="col">Saving</th>                               
                                                    <th scope="col">Category Name</th>                                                                                           
                                                    <th scope="col">Sub Category Name</th>                                                                                           
                                                    <th scope="col">Actions</th>                               
                                                </tr>
                                            </thead>
        
                                            <tbody>
                                            <?php $i=1; foreach ($price_card_data as $price_card_data) : ?>
                                              <tr>
                                              <td><?php echo $i;?></td>
                                              <td><?php echo $price_card_data['card_for'];?></td>
                                              <td><?php echo $price_card_data['offer_price'];?></td>
                                              <td><?php echo $price_card_data['mrp'];?></td>
                                              <td><?php echo $price_card_data['saving'];?></td>
                                              <td><?php echo $price_card_data['category_name'];?></td>
                                              <td><?php echo $price_card_data['sub_c_name'];?></td>

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="las la-ellipsis-h align-middle fs-18"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                            <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a data-bs-toggle="modal" data-bs-target="#removeNotificationModal<?php echo $price_card_data['price_card_id'];?>" class="dropdown-item" href="#"><i class="fa  fa-trash"></i>
                                                                        Delete</a>
                                                                </li>
                                                                <li>
                                                                    <a  class="dropdown-item" href="<?php echo base_url('admin/edit_price_card/');?><?php echo $price_card_data['price_card_id'];?>"><i class="las la-pen fs-18 align-middle me-2 text-muted"></i>
                                                                        Edit</a>
                                                                </li>
                                                               
                                                                <li class="dropdown-divider"></li>
                                                               
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>


                                                  <!-- delete modal -->


<!-- removeNotificationModal -->
<div id="removeNotificationModal<?php echo $price_card_data['price_card_id'];?>" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
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
                        <p class="text-muted mx-4 mb-0">Are you sure you want to delete ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <a href="<?php echo base_url()?>admin/delete_price_card/<?php echo $price_card_data['price_card_id'];?>" type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</a>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- delete modal -->


<?php  $i++; endforeach; ?>
          
                                            </tbody><!-- end tbody -->
                                        </table><!-- end table -->
                                    </div><!-- end table responsive -->
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <!-- Add city modal -->

<div class="modal fade mt-5" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add price card</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form   action="<?php echo base_url('admin/add_price_card');?>" method="post">
      <div class="row">
      <div class="col-md-12">
            <div class="mb-3">
             <label for="choices-single-default" class="form-label">Category</label>
                <select class="form-select"   name="category_id" id="category" required>
                    <option  value="">--select category--</option>
                <?php $i=1; foreach ($category as $category) : ?>
                <option  value="<?php echo $category['category_id'];?>"><?php echo $category['category_name'];?></option>
                <?php  $i++; endforeach; ?>
                </select>
            </div>
            
        </div><!--end col-->
        <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="choices-single-specifications" class="form-label">Sub Category</label>
                                                    <select class="form-select" name="sub_c_id" id="subcategory" required>
                                                        <option value="">Select</option>
                                                    </select>
                                                </div>
                                            </div> 
        <div class="col-12">
        <div class="mb-3">
                <label for="emailidInput" class="form-label">Card for</label>
                <input type="text"  class="form-control"  name="card_for" required>
            </div>
        </div><!--end col-->
        <div class="col-12">
        <div class="mb-3">
                <label for="emailidInput" class="form-label">Offer Price</label>
                <input type="number"  class="form-control"  name="offer_price" required>
            </div>
        </div><!--end col-->
        <div class="col-12">
        <div class="mb-3">
                <label for="emailidInput" class="form-label">MRP</label>
                <input type="number"  class="form-control"  name="mrp" required>
            </div>
        </div><!--end col-->
        <div class="col-12">
        <div class="mb-3">
                <label for="emailidInput" class="form-label">Saving</label>
                <input type="number"  class="form-control"  name="saving" required>
            </div>
        </div><!--end col-->


        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
    </div><!--end row-->
      </form>
      </div>
      
    </div>
  </div>
</div>

  <!-- Add city modal -->

          

  <script>
    CKEDITOR.replace('addsubcategory');
</script>

<script type="text/javascript">
		$(document).ready(function(){
// get gategory

			$('#category').change(function(){ 
                
                var id=$('#category').val();
                // console.log(id);
                $.ajax({
                    url : "<?php echo site_url('admin/get_sub_gategory');?>",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                        // console.log(data[0]);
                        // return;
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].subcategory_id +'>'+data[i].sub_c_name+'</option >';
                        }

                        $('#subcategory').html(html);

                    }
                });
                return false;
            }); 
            
		
// get sub category

        }); 
		

	</script>
          