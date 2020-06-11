<?php
    use App\classes\Event;
   
    $method = isset($params[0])? strtolower($params[0]) : '';
    
    $event = new Event;

    if($method == 'createevent' && isset($_POST['createevent'])){
       
        $eventName = $_POST['eventName'];
        $eventDesc =  $_POST['eventDesc'];
        $hostName =  $_POST['hostName'];
        $hostPhone = $_POST['hostPhone']; 
        $hostEmail =  $_POST['hostEmail'];
        $eventLocation =$_POST['eventLoc']; 
        $eventAdd = $_POST['eventAdd'] .' '.$_POST['eventAdd2'];
        
        $_POST['eventSuburb']; 
        $eventState = $_POST['eventState']; 
        $eventPostcode = $_POST['eventPostcode']; 
        $eventAttendees = $_POST['eventAttendees']; 
        $eventDate = $_POST['eventDate']; 
        $eventTime = $_POST['eventTime'];
       
        $eventStartTime =$_POST['eventStartTime'];
        $eventEndTime =$_POST['eventEndTime'];

        $eventBookStart = $_POST['eventBookStartdate']; 
        $eventBookEnds = $_POST['eventBookEndDate']; 

        $eventPrice = $_POST['ticketPrice'];
        $hostId = $_SESSION['id'];

        
        // converting time format
        $eventDateTime       =      $eventDate;
        $eventDate           =      dateTimeFormat($eventDate.' '.$eventTime);
        $eventBookStart      =      dateTimeFormat($eventBookStart.' '.$eventStartTime);
        $eventBookEnds       =      dateTimeFormat($eventBookEnds.' '.$eventEndTime);


       







        $values = array(
            'eventName' =>$eventName,
            'eventDesc' =>$eventDesc,
            'hostName' =>$hostName,
            'hostPhone' =>$hostPhone,
            'hostEmail' =>$hostEmail,
            'eventLocation' =>$eventLocation,
            'eventState' =>$eventState,
            'eventPostcode' =>$eventPostcode,
            'eventAttendees' =>$eventAttendees,
            'eventDate' =>$eventDate,
            'eventBookStart' =>$eventBookStart,
            'eventBookEnds' =>$eventBookEnds,
            'eventPrice' =>$eventPrice,
            'hostId' =>$hostId,
            
        );

        //image validations
        $bannerImgFile = $_FILES['bannerImage'];
        $eventImgFile = $_FILES['eventImg'];

        $bannerImgUpload = imgValidation($bannerImgFile);
        $eventImgUpload = imgValidation($eventImgFile);
       

        $values['bannerImg'] = $bannerImgUpload;
        $values['eventImg'] = $eventImgUpload;
       
        
    
        $result = $event->create($values);
        if($result){
            echo 'event created successfully';
        }
        
    }//ifbracket


   
?>