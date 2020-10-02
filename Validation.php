<?php
    namespace App\classes;

    class Validation{
        Public static function inputValidation($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

         public static function alphaValid($name,$msg ='Only charcters allowed'){

            $str =  preg_match("/^[a-zA-Z ]*$/",$name) ? true : false;

            if(!$str){
                 $status = array(
                    'status'=>0,
                    'alpha' => false,
                    'msg'=> $msg
                );
                echo json_encode($status);
                exit;
            }else{
                return $name;
            }
        }


        public static function emailValid($email, $msg="Please write valid email address"){

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $status = array(
                    'status'=>0,
                    'emailvalid' =>false,
                    'msg'=> $msg
                );
                echo json_encode($status);
                exit;
                
            }else{
                return $email;
            }

        }


        public static function phoneValid($phone, $msg = 'invalid phone no'){
       
            // Allow +, - and . in phone number
            $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
            // Remove "-" from number
            $phone_to_check = str_replace("-", "", $filtered_phone_number);
            // Check the lenght of number
            // This can be customized if you want phone number from a specific country
            if (strlen($phone_to_check) != 10) {
                $validStatus = false;
            } 
            $phone = $phone_to_check;
            $validStatus  = $phone;


            if(!$validStatus){
                $status = array(
                    'status'=>0,
                    'msg'=> $msg
                );
                echo json_encode($status);
                exit;
            }else{
                $validStatus = phoneValidation($phone);
            }
        
        }

        public static function pwdValidation($pwd){
           
            if(strlen($pwd) < 8 || strlen($pwd) > 16){
                $status = array(
                    'msg'=>"Password length must be between 8 to 16 charcters",
                    'status' => 0
                );
                echo json_encode($status);
                exit;
            }
        }



    }

?>