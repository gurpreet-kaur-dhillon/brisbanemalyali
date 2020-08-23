<?php
    namespace App\classes;
    use App\data\Database as DB;
    use App\classes\Validation as Valid;

    class Search extends DB{
        
        public function findEvent($values){
            $eventName          = $values['eventName'];
            $eventPostalCode    = $values['postalCode'];
            $eventDate          = $values['eventDate'];
            
            
            $condition = [];
            
          

            if(!empty($eventName)){
                $condition[] =  "`event_name` LIKE '%$eventName%'";  
            }

            if(!empty($values['postalCode'])){
                $condition[] =  "(`event_postcode` LIKE '%$eventPostalCode%' OR `event_location` LIKE '%$eventPostalCode%')";
            }

            if(!empty($values['eventDate'])){
                $condition[] =  "DATE(event_date) = '$eventDate'";
                
            }

            $sql = "SELECT * FROM `event`";

            if(count($condition)>0){
                $sql .= " WHERE `status`= 2 AND " . implode(' AND ', $condition );
            }else{
                $sql = "SELECT * FROM `event` WHERE `status`= 2 AND `event_date` >= NOW()";
            }

           // echo $sql;

                         
            try{
               
                $this->query($sql);
                $events = $this->resultSet();
                return $events;

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