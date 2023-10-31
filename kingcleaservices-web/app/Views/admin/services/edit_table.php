
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
                    <div class="row px-5">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Edit Table Data</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Table Data</a></li>
                                        <li class="breadcrumb-item active">Edit Table Data</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                   
       <form action="<?php echo base_url('admin/edit_table_data_process/');?><?php echo $table_data['table_id'];?>">
         <!-- end page title -->

         <div class="row pb-4 gy-3">
                        <div class="col-sm-4">
                            <a href="<?php echo base_url('admin/table_data');?>"class="btn btn-primary addtax-modal" >  <i class="fa-solid fa-eye"></i> View List</a>
                        </div>

                    </div>

                    <div class="row">
                    <div class="row">
                    <div class="col-12">
        <div class="mb-3">
                <label for="emailidInput" class="form-label">Field 1</label>
                <input type="text"  class="form-control" value="<?php echo $table_data['field_1'] ;?>"  name="field_1" required>
            </div>
        </div><!--end col-->
        <div class="col-12">
        <div class="mb-3">
                <label for="emailidInput" class="form-label">Field 2</label>
                <input type="text"  class="form-control" value="<?php echo $table_data['field_2'] ;?>"  name="field_2" required>
            </div>
        </div><!--end col-->
        <div class="col-12">
        <div class="mb-3">
                <label for="emailidInput" class="form-label">Field 3</label>
                <input type="text"  class="form-control" value="<?php echo $table_data['field_3'] ;?>"  name="field_3" required>
            </div>
        </div><!--end col-->
        <div class="col-md-12">
            <div class="mb-3">
             <label for="choices-single-default" class="form-label">Category</label>
                <select class="form-select"   name="category_id" id="seatcount" required>
                    <option  value="">--select category--</option>
                <?php $i=1; foreach ($category as $category) : ?>
                <option <?php if($category['category_id']==$table_data['category_id']) echo "selected" ;?>  value="<?php echo $category['category_id'];?>"><?php echo $category['category_name'];?></option>
                <?php  $i++; endforeach; ?>
                </select>
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
