<?php

    namespace App\classes;
    use App\data\Database as DB;

    class Users extends DB{

        public function createUser($values){
            try{
                $sql = "INSERT INTO `users` (`name`, `email`,`phone`,`password`) VALUES(:fullname,:email,:contact,:pwd)";
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

