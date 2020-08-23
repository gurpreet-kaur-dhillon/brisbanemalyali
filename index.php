      
<?php  
    error_reporting(1);
    session_start();

    use App\core\Application as App;
   
    require_once __DIR__.'/base/config.php';
    require __DIR__.'/vendor/autoload.php';

    
     
    $app = new App;
    
    $currentPage =   $app->page;
    $params       =  $app->params;

    $webpage = $currentPage;  

    
    
    $noTemp = ['loginaction','logout','createeventform','searchevent','updateeventform','homeenqform'];

    $webversion = "1.01.03";
    

    if(in_array($currentPage, $noTemp)){
        require("actions/".$currentPage.".php");
    }elseif($currentPage == 'dashboard'){
        include("pages/".$currentPage.".php");
    }else{
        include("pages/templates/homeTemplate.php");
    }
    
?>
    
    

   
  


