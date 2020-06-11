
<?php 
       
        $allowedPage = ['login','register'];
        if(!isset($params[0]) || !in_array($params[0],$allowedPage)){
                header('location:http://localhost/theevent/404');
        }else{
                $currentPage = $params[0];
        }
?>


<?php require('common/header.php');?>

<?php include('include/'.$params[0].'.php');?>

<?php require('common/footer.php');?>
