<?php
    use App\classes\Mailsend;

    if(isset($_POST['homeEnqForm'])){
        $enqName = $_POST['name'];
        $enqEmail = $_POST['email'];
        $enqSub = $_POST['subject'];
        $enqMsg = $_POST['message'];


        $body = "<table style='border: 1px solid black;border-collapse: collapse;padding:2px'>
            <tr style='border: 1px solid black;border-collapse: collapse;padding:2px'>
                <th>Visitor name</th>
                <td>$enqName</td>
            <tr>
            <tr style='border: 1px solid black;border-collapse: collapse;padding:2px'>
                <th>Vistor email address</th>
                <td>$enqEmail</td>
            </tr>
            <tr style='border: 1px solid black;border-collapse: collapse;padding:2px'>
                <th>Subject</th>
                <td>$enqSub</td>
            </tr>
            <tr style='border: 1px solid black;border-collapse: collapse;padding:2px'>
                <th>Message</th>
                <td>$enqMsg</td>
            <tr>
        </table>";

        $phpMail = new Mailsend(array(
            'subject' =>$enqSub,
            'body'=>$body,
            'addAddress'=>'brisbanemalyalitest@gmail.com',
            'title'=>'Event enquiry'
        ));
       
         if($phpMail){   
            echo json_encode(array(
            'status'=>1,
            'msg'=>'Message sent'
        ));
    }

    }

?>