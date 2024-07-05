<?php
include('../config/application.php');
include_once('../controllers/taskController.php');


if(isset($_POST['deleteTask']))
{
    $id=validateInput($db->conn,$_POST['deleteTask'] );
    $task=new TaskController;
    $result=$task->delete( $id);
    if($result)
    {
        redirect("Task Deleted Successfully","ad_viewTask.php");
    }
    else
    {
        redirect("Something Went Wrong","ad_viewTask.php");
    }


}


if(isset($_POST['update_Task']))
{
    $id=validateInput($db->conn,$_POST['task_id']);

    $inputData=[
        'email'=>validateInput($db->conn,$_POST['email']),
        'message'=>validateInput($db->conn,$_POST['message'])

    ];
    $message=new TaskController;
    $result=$message->update($inputData,$id);
    if($result)
    {
        redirect("Task Updated Successfully","ad_viewTask.php");
    }
    else
    {
        redirect("Something Went Wrong, Message Cannot Be Updated","ad_editTask.php");
    }


}


if(isset($_POST['save_task'])){

    $inputData=[
        'email'=>validateInput($db->conn,$_POST['email']),
        'message'=>validateInput($db->conn,$_POST['message'])

    ];

    $message=new TaskController;
    $result=$message->createTask($inputData);
    if($result)
    {
        redirect(" <h4 style='color:green; font:200'>Task Added Successfully</h4>","ad_tasks.php");
    } else
    {
        redirect("Something Went Wrong, Task Cannot Be Added","ad_addTask.php");
    }

}

?>