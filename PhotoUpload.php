<?php
   namespace App\classes;
    class Photoupload{

       private $maxSize = 1024*1024*2;
       private $fileType = array('jpeg','jpg','png');
       public $response = '';

        public function __construct($files){
           return $this->imgValidation($files);
        }

        public function imgValidation($files){
           

            if($files['size'] > $this->maxSize || $files['size'] <= 0){
                            
                $status = array(
                        'upload' => false,
                        'msg'    => $files['name']." file larger than 1MB"   
                    );

                //return $this->response = json_encode($status);
                return $status;
                exit;
                        
            }
        }


    }

?>