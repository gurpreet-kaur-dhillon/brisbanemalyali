
<?php
  if(!isset($_SESSION['id'])){
   homePage();
  }
?>

<?php

$dashboardpages =array(
  'index'=>['dashboard'],
  'event'=>['eventcreate','eventmanage','eventedit']
);

$key  = isset($params[0])? $params[0] : 'index';

$page = isset($params[1])? $params[1] : '';

$adminPage = empty($key) ? $dashboardpages['index']:$key; 

$adminPage = array_key_exists($adminPage,$dashboardpages)? $key.$page : 'index'; 


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
        
      
      include('pages/admin/adminpages/'.$adminPage.'.php');?>
      </div>
      <!-- End of Main Content -->

<?php require_once('admin/adminCommon/adminFooterContent.php');?>
<?php require_once('admin/adminCommon/adminFooter.php'); ?>