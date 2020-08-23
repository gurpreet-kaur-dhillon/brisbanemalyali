<?php
    use App\classes\Search;
    use App\classes\Validation as Valid;

   

    
    $search = new Search;
   
    if(isset($_REQUEST['searchEvent'])){
       
        $eventName = Valid::inputValidation($_POST['eventName']);
        $postalCode = Valid::inputValidation($_POST['postalCode']);
        $eventDate = Valid::inputValidation($_POST['eventSearchDate']);

        $data = array(
            'eventName' => $eventName,
            'postalCode' => $postalCode,
            'eventDate' => $eventDate
        );

        $foundEvents = $search->findEvent($data);
       
    }

   

    //include('pages/search.php');
    


?>