
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
      
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Edit Our Work</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Our Work</a></li>
                                        <li class="breadcrumb-item active">Edit Our Work</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                   
       <form action="<?php echo base_url('admin/edit_sub_category_process/');?><?php echo $sub_cate['subcategory_id'];?>">
         <!-- end page title -->

         <div class="row pb-4 gy-3">
                        <div class="col-sm-4">
                            <a href="<?php echo base_url('admin/sub_category_list');?><?php echo $sub_cate['subcategory_id'];?>"class="btn btn-primary addtax-modal" >  <i class="fa-solid fa-eye"></i> View List</a>
                        </div>

                    </div>

                    <div class="row">
                    <div class="row">
        <div class="col-12">
        <div class="mb-3">
                <label for="emailidInput" class="form-label">Sub Category Name</label>
                <input type="text"  class="form-control" value="<?php echo $sub_cate['sub_c_name']?>"  name="sub_c_name" required>
            </div>
        </div><!--end col-->
        <div class="col-md-12">
            <div class="mb-3">
             <label for="choices-single-default" class="form-label">Category</label>
                <select class="form-select"   name="category_id" id="seatcount" required>
                    <option  value="">--select category--</option>
                <?php $i=1; foreach ($category as $category) : ?>
                <option <?php if($category['category_id']==$sub_cate['category_id'])echo "selected";?>  value="<?php echo $category['category_id'];?>"><?php echo $category['category_name'];?></option>
                <?php  $i++; endforeach; ?>
                </select>
            </div>
            
        </div><!--end col-->
        <div class="col-12">
        <div class="mb-3">
                <label for="emailidInput" class="form-label">Contents</label>
                <textarea name="content"  class="form-control" id="addsubcategory"  required><?php echo $sub_cate['content']?></textarea>
        
            </div>
        </div><!--end col-->
       </form>

        <div class="modal-footer">
      
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </div><!--end row-->

    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

 


            <script>
    CKEDITOR.replace('addsubcategory');
</script>
