 
 <!-- Bootstrap core JavaScript-->
 
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 
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

  <!-- custome javasript -->
  <script src="src/js/validation.js"></script>
  <script src="src/js/validationAdditional.js"></script>
  

  <?php 
      require('src/js/js.php');
      if(file_exists('src/js/'.$dashdir.$currentPage.'.js')){
        echo '<script src="src/js/'.$dashdir.$currentPage.'.js"></script>';
      }
  ?>

</body>

</html>