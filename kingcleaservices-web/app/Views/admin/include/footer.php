

<style>
.preloader {
  position: fixed;
  z-index: 9999;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #fff;
}

.spinner {
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -25px;
  margin-left: -25px;
  border: 5px solid #ccc;
  border-top-color: #333;
  border-radius: 50%;
  width: 50px;
  height: 50px;
  -webkit-animation: spin 1s ease-in-out infinite;
  animation: spin 1s ease-in-out infinite;
}

@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
  }
}

@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}


</style>

<footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                        ©  <script>document.write(new Date().getFullYear())</script> All Rights Reserved By PHOTOYANA. Powered By <a target="_blank" href="https://ficuslot.com/">FICUSLOT INNOVATION PVT LTD</a>
                        </div>
                        
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div class="preloader" id="mypre">
  <div class="spinner"></div>
</div>


    <!-- <div class="customizer-setting d-none d-md-block">
        <div class="btn-info btn-rounded shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div> -->



    <!-- JAVASCRIPT -->
    <script src="<?php echo base_url();?>assets/backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url();?>assets/backend/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="<?php echo base_url();?>assets/backend/assets/libs/node-waves/waves.min.js"></script>
    <script src="<?php echo base_url();?>assets/backend/assets/libs/feather-icons/feather.min.js"></script>
    <script src="<?php echo base_url();?>assets/backend/assets/js/plugins.js"></script>

    <!-- apexcharts -->
    <script src="<?php echo base_url();?>assets/backend/assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="<?php echo base_url();?>assets/backend/assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="<?php echo base_url();?>assets/backend/assets/libs/jsvectormap/maps/world-merc.js"></script>

    <!-- Dashboard init -->
    <script src="<?php echo base_url();?>assets/backend/assets/js/pages/dashboard.init.js"></script>

    <!-- App js -->
    <script src="<?php echo base_url();?>assets/backend/assets/js/app.js"></script>
</body>


  
<script>


var element = document.getElementById("mypre");

window.addEventListener("load", function() {
    mypre.style.display = "none";
});


window.addEventListener("DOMContentLoaded", function() {
  preloamypreder.style.display = "none";
});



$(document).ready(function() {
    $('#myTable').DataTable();
});



// alert flash js
setTimeout(function() {
    var element = document.getElementById("alert");
    element.style.display = "none";
  }, 3000); 
// alert flash js
</script>


<script>
    CKEDITOR.replace('editor2');
</script>

</html>



