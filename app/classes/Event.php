<?php
    namespace App\classes;
    use App\data\Database as DB;

    class Event extends DB{
        
        public function create($values){

           
           $sql = "INSERT INTO `event` (`event_name`, `event_location`,`event_state`,`event_postcode`,`address1`,`address2`,`suburb`,`event_date`,`event_start_date`,`event_end_date`,`event_description`,`event_price`,`event_attendee`,`host_id`,`host_name`,`host_contact`,`host_email`,`banner_img`,`event_img`) VALUES(:eventName,:eventLocation,:eventState,:eventPostcode,:eventAdd1,:eventAdd2,:suburb,:eventDate,:eventBookStart,:eventBookEnds,:eventDesc,:eventPrice,:eventAttendees,:hostId,:hostName,:hostPhone,:hostEmail,:bannerImg,:eventImg)";
         
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

        //find event

        public function findEvent($values){

            $sql= "SELECT * FROM `event` WHERE `event_id` = :id";

            try{
                $result = $this->getResult($sql,$values);
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

        //fetching event for carsoule

        public function fetch($limit='all'){
            if($limit == 'all'){
                $sql = "SELECT * FROM `event` ORDER BY event_id DESC";
            }else{
                $sql = "SELECT * FROM `event` WHERE `status` = 2 ORDER BY event_id DESC LIMIT $limit";
            }

            
            try{
                $this->query($sql);
                $result = $this->resultSet();
                return $result;
            }catch(\PDOException $e){
                $status = array(
                        'status'=> '0',
                        'msg' => $e->getMessage()   
                    );
                echo json_encode($status);
                exit;
            }
        }
//fetching event by id

        public function fetchByUser($values){
            
            $newValues = ['id'=>$values['id']];
            $role = array(
                0 => "SELECT * FROM `event` WHERE `host_id` = :id ORDER BY event_created_at DESC",
                1 =>  "SELECT * FROM `event` ORDER BY event_created_at DESC"
            );            
           
            $sql = $role[$values['role']];

            try{
                $this->query($sql);
                $result = $this->getResult($sql, $newValues);
                return $result;
            }catch(\PDOException $e){
                $status = array(
                        'status'=> '0',
                        'msg' => $e->getMessage()   
                    );
                echo json_encode($status);
                exit;
            }
        }
//find event for update
         public function findUpdate($values){
             
            $role = array(
                0 => "SELECT * FROM `event` WHERE `host_id` = :id AND `event_id` = :eventId",
                1 =>  "SELECT * FROM `event` WHERE `event_id` = :eventId "
            );            
           
            if($values['role'] == 1){
                $newValues = ['eventId'=>$values['eventId']];
            }else{
                $newValues = ['eventId'=>$values['eventId'],'id'=>$values['id']];
            }
            $sql = $role[$values['role']];
           
            try{
                $this->query($sql);
                $result = $this->getResult($sql,$newValues);
                return $result;
            }catch(\PDOException $e){
                $status = array(
                        'status'=> '0',
                        'msg' => $e->getMessage()   
                    );
                echo json_encode($status);
                exit;
            }
        }

        //update method

        public function update($values){
            $modified_time = date("Y-m-d H:i:s");
            $sql = "UPDATE `event` SET
            `event_name`=:eventName, `event_location`=:eventLocation,`address1`=:eventAdd,`address2`=:eventAdd2,`suburb`=:eventSuburb,`event_state`=:eventState,`event_postcode`=:eventPostcode,`event_date`=:eventDate,`event_start_date`=:eventBookStart,`event_end_date`=:eventBookEnds,`event_description`=:eventDesc,`event_price`=:eventPrice,`event_attendee`=:eventAttendees,`host_name`=:hostName,`host_contact`=:hostPhone,`host_email`=:hostEmail,`banner_img`=:bannerImg,`event_img`=:eventImg "; 

            $role = array(
                0 => "WHERE `event_id` =:eventId AND `host_id`=:hostId",
                1 =>  "WHERE `event_id` =:eventId" 
            );         
            
            if($_SESSION['user_role'] == 1){
              unset($values['hostId']);
            }
            
           

            $sql .= $role[$_SESSION['user_role']];

           // dd($values);

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
            }
        }


        //deleting event

         public function delete($values){
           
            $sql = "DELETE FROM `event`"; 

            $role = array(
                0 => "WHERE `event_id`=:event_id AND `host_id`=:host_id",
                1 =>  "WHERE `event_id` =:event_id" 
            );
            if($_SESSION['user_role'] == 1){
              unset($values['host_id']);
            }
            
            $sql .= $role[$_SESSION['user_role']];
          

            try{
                $result = $this->deleteData($sql,$values);
                return $result;
            }catch(\PDOException $e){
                    $status = array(
                        'status'=> '0',
                        'msg' => $e->getMessage()   
                    );
                    echo json_encode($status);
                    exit;
            }
        }

        //updatestatus

        public function statusUpdate($values){
            
            $sql = "UPDATE `event` SET `status` = :eventStatus WHERE `event_id` = :eventId";

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
            }

        }

        public function TotalEvents(){

            $hostId = $_SESSION['id'];
            $userRole = $_SESSION['user_role'];

            $role = array(
                1 =>  "SELECT COUNT(event_id) as tevent FROM `event`",
                0 =>  "SELECT COUNT(event_id) as tevent FROM event WHERE `host_id` = '$hostId'" 
            );

            $sql = $role[$userRole];

            try{
                $this->query($sql);
                $result =$this->resultSet();
                return $result;
            }catch(\PDOException $e){
                    $status = array(
                        'status'=> '0',
                        'msg' => $e->getMessage()   
                    );
                    echo json_encode($status);
                    exit;
            }


        }

        public function PendingEvents(){

            $hostId = $_SESSION['id'];
            $userRole = $_SESSION['user_role'];

            $role = array(
                1 =>  "SELECT COUNT(event_id) as tevent FROM `event` WHERE `status` = 1",
                0 =>  "SELECT COUNT(event_id) as tevent FROM event WHERE `host_id` = '$hostId' AND `status`= 1" 
            );

            $sql = $role[$userRole];

            try{
                $this->query($sql);
                $result =$this->resultSet();
                return $result;
            }catch(\PDOException $e){
                    $status = array(
                        'status'=> '0',
                        'msg' => $e->getMessage()   
                    );
                    echo json_encode($status);
                    exit;
            }


        }


    public function LiveEvents(){

            $hostId = $_SESSION['id'];
            $userRole = $_SESSION['user_role'];

        $role = array(
            1 =>  "SELECT COUNT(event_id) as tevent FROM `event` WHERE `status` = 2",
            0 =>  "SELECT COUNT(event_id) as tevent FROM event WHERE `host_id` = '$hostId' AND `status`= 2" 
        );

            $sql = $role[$userRole];

            try{
                $this->query($sql);
                $result =$this->resultSet();
                return $result;
            }catch(\PDOException $e){
                    $status = array(
                        'status'=> '0',
                        'msg' => $e->getMessage()   
                    );
                    echo json_encode($status);
                    exit;
            }


    }

    //fetching all evvents

     public function AllEvents(){

            $sql= "SELECT * FROM `event` WHERE `status` = 2";
            try{
                $this->query($sql);
                $result =$this->resultSet();
                return $result;
            }catch(\PDOException $e){
                    $status = array(
                        'status'=> '0',
                        'msg' => $e->getMessage()   
                    );
                    echo json_encode($status);
                    exit;
            }


    }

    //updating event token

    public function updateToken($values){
        $sql = "UPDATE `event` SET `eventToken` = :token WHERE `event_id` = :id";

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
        }
    }

    


    }


?>