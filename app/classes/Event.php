<?php
    namespace App\classes;
    use App\data\Database as DB;

    class Event extends DB{
        
        public function create($values){

           
           $sql = "INSERT INTO `event` (`event_name`, `event_location`,`event_state`,`event_postcode`,`event_date`,`event_start_date`,`event_end_date`,`event_description`,`event_price`,`event_attendee`,`host_id`,`host_name`,`host_contact`,`host_email`,`banner_img`,`event_img`) VALUES(:eventName,:eventLocation,:eventState,:eventPostcode,:eventDate,:eventBookStart,:eventBookEnds,:eventDesc,:eventPrice,:eventAttendees,:hostId,:hostName,:hostPhone,:hostEmail,:bannerImg,:eventImg)";
         
            try{
                $result = $this->saveData($sql,$values);
                return $result;
            }catch(\PDOException $e){
                $status = array(
                        'status'=> '0',
                        'msg' => $e->getMessage()   
                    );
                echo json_encode($status);
                exit;
            };
        }
    }


?>