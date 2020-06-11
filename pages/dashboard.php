
<?php
  if(!isset($_SESSION['id'])){
   homePage();
  }
?>

<?php

$dashboarddir = ['event'];  
$dashboardpages =['create','manage'];
  if(isset($params[0]) && in_array($params[0],$dashboarddir)){
    $dashdir = $params[0];
  }else{
    $dashdir = '';
  }
  
  if(isset($params[1]) && in_array($params[1],$dashboardpages)){
    $currentPage = $params[1];    
   
  }else{
    $currentPage = '404';
  }
  
?>

<?php include('admin/adminCommon/adminHeader.php');?>
<div id="wrapper">
        <input type="hidden" id="progress_width" value="0">
        <?php require_once('admin/adminCommon/adminSidebar.php'); ?>
     <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">    
        <?php require_once('admin/adminCommon/adminNav.php');?>
        
        <?php 
        
       
      include('pages/admin/adminpages/'.$dashdir.$currentPage.'.php');?>
      </div>
      <!-- End of Main Content -->

<?php require_once('admin/adminCommon/adminFooterContent.php');?>
<?php require_once('admin/adminCommon/adminFooter.php'); ?>