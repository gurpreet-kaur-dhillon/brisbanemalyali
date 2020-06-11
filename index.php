      
<?php  
    session_start();

    use App\core\Application as App;
   



    require __DIR__.'/vendor/autoload.php';
     
   
   
    $app = new App;
    
    $currentPage =   $app->page;
    $params       =  $app->params;

    $webpage = $currentPage;  

    
    $noTemp = ['loginaction','logout','createeventform'];

     

    if(in_array($currentPage, $noTemp)){
        require("actions/".$currentPage.".php");
    }else{
        include("pages/$currentPage".".php");
    }
    
?>
    
    

   
  


