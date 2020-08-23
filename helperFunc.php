<?php

    function homePage(){
        header('location:'.DOMAIN.'user/login');
    }

    function createToken($len=25){
        $token = bin2hex(openssl_random_pseudo_bytes($len));
        return $token;
    }

    function dd($obj){
        echo '<pre>';
            print_r($obj);
        echo '</pre>';
    }

    function dateTimeFormat($dateTime){
        $date=date_create($dateTime);
        return date_format($date,"Y-m-d H:i:s");
    }

    function showDate($dateTime){
        $date = date_create($dateTime);
        return date_format($date,"Y-M-d");
        
    }

    function setDate($dateTime){
        $date = date_create($dateTime);
        return date_format($date,"m/d/y");
        
    }

    function showTime($dateTime){
        $date = date_create($dateTime);
        return date_format($date,"h:i A");    
    }
    
    function setTime($dateTime){
        $date = date_create($dateTime);
        return date_format($date,"h:i");    
    }

    

     function imgValidation($imgFile){
        $maxSize = 1024*1024;
        $allowedFile = ['jpg','jpeg','png','gif'];
        $uploadPath = 'upload/';
        $ext = pathinfo($imgFile['name'],PATHINFO_EXTENSION);
        $ext = strtolower($ext);

        if($imgFile['size'] > $maxSize || $imgFile['size'] <= 0){
           $status = array(
                    'status' => false,
                    'msg'    => $imgFile['name']." file larger than 1MB"   
                );

            echo json_encode($status);
            exit;
        }
        if(!in_array($ext,$allowedFile)){
            $status = array(
                'status' => false,
                'msg'    => 'Only jpg, Jpeg and png file format allowed'   
            );
            echo json_encode($status);
            exit;
        }

        $imgFile['name'] = uniqid().".".$ext;
        if(move_uploaded_file($imgFile['tmp_name'],$uploadPath.$imgFile['name'])){

                return $imgFile['name'];
               /*  $status = array(
                    'status' => true,
                    'msg'    => 'file uploaded' ,
                    'filesname' => $imgFile['name']
                    
                );
                echo json_encode($status);
                exit; */
                
        }

       

        
       
    }

    function  tokenTemplate($link =''){
        $table = "<table>
                    <tr>
                        <th>Go to link</th>
                        <td><a href='$link'>Link</a></td>
                    </tr>
                </table>";

                return $table;
            
    }
?>