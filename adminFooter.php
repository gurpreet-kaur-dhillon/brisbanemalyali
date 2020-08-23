 
 <!-- Bootstrap core JavaScript-->
 
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- toastr alert -->
<script src="vendor/toastr/toastr.min.js"></script>
 
  <!-- jquery ui -->
  <script src="src/lib/jquery-ui/jquery-ui.js"></script>
  <script src="src/lib/clockpicker/src/clockpicker.js"></script>
  
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  
  <!-- Custom scripts for all pages-->
  <script src="src/js/sb-admin-2.min.js"></script>
 
  <!-- Page level plugins -->
  <!-- <script src="vendor/chart.js/Chart.min.js"></script> -->

  <!-- Page level custom scripts -->
  <!-- <script src="src/js/demo/chart-area-demo.js"></script>
  <script src="src/js/demo/chart-pie-demo.js"></script> -->

<!-- table plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>




<!-- ckeditor -->
<script src="vendor/ckeditor/ckeditor.js"></script>
  
  


  <!-- custome javasript -->
  <script src="src/js/validation.js"></script>
  <script src="src/js/validationAdditional.js"></script>
  <script src="src/js/custom.js?ver=<?php echo $webversion?>"></script>
  

  <?php 
      require('src/js/js.php');
      if(file_exists('src/js/'.$adminPage.'.js')){
         echo "<script src='src/js/$adminPage.js?ver=".$webversion."'></script>";
      }
  ?>

</body>

</html>

