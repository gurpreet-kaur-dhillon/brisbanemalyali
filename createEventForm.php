<?php
    use App\classes\Event;
    use App\classes\Mailsend;
    
    $event = new Event;

    if(isset($_POST['createevent'])){
       
        $eventName = $_POST['eventName'];
        $eventDesc =  $_POST['eventDesc'];
        $hostName =  $_POST['hostName'];
        $hostPhone = $_POST['hostPhone']; 
        $hostEmail =  $_POST['hostEmail'];
        $eventLocation =$_POST['eventLoc']; 
        $eventAdd1 = $_POST['eventAdd']; 
        $eventAdd2 =$_POST['eventAdd2'];
        
        $suburb =  $_POST['eventSuburb']; 
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
            'eventAdd1'=>$eventAdd1,
            'eventAdd2'=>$eventAdd2,
            'suburb'=>$suburb,
            'eventAttendees' =>$eventAttendees,
            'eventDate' =>$eventDate,
            'eventBookStart' =>$eventBookStart,
            'eventBookEnds' =>$eventBookEnds,
            'eventPrice' =>$eventPrice,
            'hostId' =>$hostId,
            
        );


        if(empty($_FILES['bannerImage']['name'])){
            $values['bannerImg'] = '';
        }else{
            $bannerImgFile = $_FILES['bannerImage'];
            $bannerImgUpload = imgValidation($bannerImgFile);
            $values['bannerImg'] = $bannerImgUpload;
        }

        if(empty($_FILES['eventImage']['name'])){
             $values['eventImg'] = '';
        }else{
            $eventImgFile = $_FILES['eventImg'];
            $eventImgUpload = imgValidation($eventImgFile);
            $values['eventImg'] = $eventImgUpload;
       
        }
        
    
        $result = $event->create($values);
       

        if($result){

           
            $lastId = $result['last_insert_id'];
            $createToken = createToken();
            $tokenUpdate = $event->updateToken(array(
                'token'=>$createToken,
                'id'=>$lastId
            ));
                if($tokenUpdate){
                    $link = "http://localhost/theevent/approval/?eventid=$lastId&token=$createToken";
                    $body = tokenTemplate($link);
                    
                        $mail = new Mailsend(array(
                            'subject' =>'One more event uploaded',
                            'body'=> $body,
                            'addAddress'=>'brisbanemalyalitest@gmail.com',
                            'title'=>'New event upload'
                
                        ));
                       
                        if($mail){   
                             echo json_encode(array(
                                'status'=>1,
                                'msg'=>'event created successfully'
                            ));
                        }

                        
                        
                }
            
    

           
            
        }
        
    }//ifbracket


//deleting event
    if(isset($_POST['deleteevent'])){
       // dd($_POST);
        $values['event_id'] = $_POST['deleteId'];
        $values['host_id'] = $_SESSION['id'];

        $result = $event->delete($values);

        if($result){
            echo json_encode(array(
                'status'=>1,
                'msg'=>'event deleted successfully'
            ));
            
        }

    }



    //updating status

    if(isset($_POST['eventStatusUpdate'])){
       
        $eventId = $_POST['eventId'];
        $eventStatus = $_POST['eventStatus'];
        
        $values = array(
            'eventId'=>$eventId,
            'eventStatus'=>$eventStatus
        );

        $result = $event->statusUpdate($values);
        

        if($result){
            echo json_encode(array(
                'status'=>1,
                'msg'=>'Event status updated successfully'
            ));
            
        }else{
            echo json_encode(array(
                'status'=>0,
                'msg'=>'No changes made'
            ));
        }

    }


    //reseting event

    if(isset($_POST['restEventStatus'])){
        $eventId = $_POST['eventId'];
        $token = '';

        $result = $event->updateToken(array(
            'id'=>$eventId,
            'token'=>$token
        ));

        if($result){
            echo json_encode(array(
                'status'=>1,
                'msg'=>'status updated'
            ));
            
        }
    }


   
?>