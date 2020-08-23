<?php 
   

        use App\classes\Event;    
        $event = new Event;

        if(!isset($_POST['editevent'])){
            homePage();
        }

        $values['eventId']  =$_POST['eventId'];
        $values['eventName'] = $_POST['eventName'];
        $values['eventDesc'] =  trim($_POST['eventDesc']);
        $values['hostName'] =  $_POST['hostName'];
        $values['hostPhone'] = $_POST['hostPhone']; 
        $values['hostEmail'] =  $_POST['hostEmail'];
        $values['eventLocation'] =$_POST['eventLoc']; 
        $values['eventAdd'] =    $_POST['eventAdd'];
        $values['eventAdd2'] =    $_POST['eventAdd2'];
        $values['eventSuburb'] = $_POST['eventSuburb']; 
        $values['eventState'] = $_POST['eventState']; 
        $values['eventPostcode'] = $_POST['eventPostcode']; 
        $values['eventAttendees'] = $_POST['eventAttendees'];        
        $values['eventPrice'] = $_POST['ticketPrice'];
        $values['hostId'] = $_SESSION['id'];
       


        $eventDate = $_POST['eventDate']; 
        $eventTime = $_POST['eventTime'];
       
        $eventStartTime =$_POST['eventStartTime'];
        $eventEndTime =$_POST['eventEndTime'];

        $eventBookStart = $_POST['eventBookStartdate']; 
        $eventBookEnds = $_POST['eventBookEndDate']; 

         // converting time format
       
        $values['eventDate']           =      dateTimeFormat($eventDate.' '.$eventTime);
        $values['eventBookStart']      =      dateTimeFormat($eventBookStart.' '.$eventStartTime);
        $values['eventBookEnds']       =      dateTimeFormat($eventBookEnds.' '.$eventEndTime);
        

        ///////////////validating img
        if(empty($_FILES['bannerImage']['name'])){
            $values['bannerImg'] = $_POST['eventBannerHidden'];
        }else{
            $bannerImgFile = $_FILES['bannerImage'];
            $bannerImgUpload = imgValidation($bannerImgFile);
            $values['bannerImg'] = $bannerImgUpload;
        }

        if(empty($_FILES['eventImage']['name'])){
             $values['eventImg'] = $_POST['eventImgHidden'];
        }else{
            $eventImgFile = $_FILES['eventImg'];
            $eventImgUpload = imgValidation($eventImgFile);
            $values['eventImg'] = $eventImgUpload;
       
        }
        
        $result = $event->update($values);
        if($result){
            echo json_encode(array(
                'status'=>1,
                'msg'=>'Event updated successfully',
            ));
        }else{
             echo json_encode(array(
                'status'=>0,
                'msg'=>'No changes made in event or No fields modified',
            ));
        }

?>