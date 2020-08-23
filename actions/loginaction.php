<?php 


    use App\classes\UserAuth;
    use App\classes\Users;

    $userAuth = new UserAuth;
    $user = new Users;

    $method = isset($params[0])? strtolower($params[0]) : '';

    if(isset($_POST['email']) && $method == 'emailcheck'){
        emailCheck($_POST);
    }

    if(isset($_POST['email']) && $method == 'emailnotexists'){
        emailNotExist($_POST);
    }


    if(isset($_POST['createAccount']) && $method == 'create'){
        createAccount($_POST);
    }

    if(isset($_POST['loginAccount']) && $method == 'validate'){
        userValidate($_POST);
    }

///////////////////////////////////if email exists///////////////////////////////////////////////////////////////    

    function emailCheck($request){
        global $userAuth;
        $email = $request['email'];
        $email = strtolower($email);
        
        $result = $userAuth->checkEmail($email);
        echo isset($result[0]['email']) && $result[0]['email'] == $email ? 'false':'true';
    }

///////////////////////////////if email not exists//////////////////////////////////

     function emailNotExist($request){
        global $userAuth;
        $email = $request['email'];
        $email = strtolower($email);
        
        $result = $userAuth->checkEmail($email);
        echo isset($result[0]['email']) && $result[0]['email'] == $email ? 'true':'false';
    }
////////////////user validate//////////////////////////////////////////////////////////////////////////////////

    



/////////////////creating user//////////////////////////////////////////////////////////////////////////////////
    function createAccount($request){

        global $user;

        $email  =    $_POST['email'];
        $fullname  =    $_POST['fullname'];
       
        $pwd    =    $_POST['password'];
        $repeatPwd = $_POST['repeatPassword'];
        $contact = isset($_POST['phone'])? $_POST['phone'] : $contact ='NA';
       //inserting data
        $hashpwd = password_hash($pwd, PASSWORD_DEFAULT);

        $values = array(
            'fullname'=>$fullname,
            'email'=>$email,
            'pwd'=>$hashpwd,
            'contact'=> $contact
                
            );


        $data = $user->createUser($values);
        if($data){
            
            echo json_encode(array(
                'status'=> 1,
                'msg'=>'User has been created'
            ));
            exit;
        }
    }
    /////////////////validate user//////////////////////////////////////////////////////////////////////////////////

    function userValidate($request){
       
        global $userAuth;
        $email = $request['email'];
        $pwd = $request['password'];

        if(!$userAuth->checkEmail($email)){
            echo json_encode(array(
                    'status'=> 0,
                    'msg'=>'email doesn\'t  exist'
                ));
            exit;     
        }

        
        if($userAuth->pwdCheck($email,$pwd)){
            $user = $userAuth->pwdCheck($email,$pwd);
            
            $_SESSION['id']     = $user[0]['id'];
            $_SESSION['email']  = $user[0]['email'];
            $_SESSION['name']   = $user[0]['name'];
            $_SESSION['user_role'] = $user[0]['user_role'];
            
            echo json_encode(array(
                    'status'=> 1,
                    'msg'=>'Login Success'
                ));
            exit; 
        }else{
            echo json_encode(array(
                    'status'=> 0,
                    'msg'=>'Invalid password'
                ));
            exit; 
        }


    }

?>