<?php
include('../config/application.php');
include_once('../controllers/MessagesController.php');


if(isset($_POST['deleteMessage']))
{
    $id=validateInput($db->conn,$_POST['deleteMessage'] );
    
    $message=new MessagesController;
    $result=$message->delete( $id);
    if($result)
    {
        redirect("Message Deleted Successfully","ad_viewMessage.php");
    }
    else
    {
        redirect("Something Went Wrong","ad_viewMessage.php");
    }


}


if(isset($_POST['update_Message']))
{
    $id=validateInput($db->conn,$_POST['message_id']);

    $inputData=[
        'subject'=>validateInput($db->conn,$_POST['subject']),
        'message'=>validateInput($db->conn,$_POST['message'])

    ];
    $message=new MessagesController;
    $result=$message->update($inputData,$id);
    if($result)
    {
        redirect("Message Updated Successfully","ad_viewMessage.php");
    }
    else
    {
        redirect("Something Went Wrong, Message Cannot Be Updated","ad_editMessage.php");
    }


}


if(isset($_POST['save_Message'])){

    $inputData=[
        'subject'=>validateInput($db->conn,$_POST['subject']),
        'message'=>validateInput($db->conn,$_POST['message'])

    ];

    $message=new MessagesController;
    $result=$message->createMessage($inputData);
    if($result)
    {
        redirect(" <h4 style='color:green; font:200'>Message Added Successfully</h4>","ad_messages.php");
    } else
    {
        redirect("Something Went Wrong, Message Cannot Be Added","ad_addMessage.php");
    }

}

?>