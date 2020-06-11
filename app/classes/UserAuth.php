<?php

    namespace App\classes;
    use App\data\Database as DB;


    class UserAuth extends DB{

        public function checkEmail($email){
            $sql = "SELECT `email` FROM USERS WHERE `email` = :email";

            try{
                $result = $this->getResult($sql, ['email'=>$email]);
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


        //////password check

        public function pwdCheck($email,$pwd){
            $sql = "SELECT `id`,`password` FROM `users` WHERE `email` = :email";
            try{
                $data = [
                    'email'=>$email, 
                ];
                $fetchpwd = $this->getResult($sql,$data);
                
                $result = password_verify($pwd, $fetchpwd[0]['password']);
                
                return $result ? $this->userData($fetchpwd[0]['id']) : false;

            }catch(\PDOException $e){
                $status = array(
                            'status'=> '0',
                            'msg' => $e->getMessage()   
                        );
                        echo json_encode($status);
                        exit;
            }
        }

//fetching user data

        public function userData($id){
       
            $sql = "SELECT *, NULL as `password` FROM `users` WHERE `id` = :id";
                try{
                    $user = $this->getResult($sql,['id'=>$id]);
                    return $user; 
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