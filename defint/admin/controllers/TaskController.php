<?php

class TaskController
{
    public function __construct()
    {
        $db=new DatabaseConnection;
        $this->conn=$db->conn;
    }


    public function delete( $id)
    {
        $task_id=validateInput($this->conn,$id);
        $taskDeleteQuery="DELETE FROM tasks WHERE id='$task_id' LIMIT 1";
        $result=$this->conn->query($taskDeleteQuery);
        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }

    }

    public function edit($id)
    {
        $task_id=validateInput($this->conn,$id);
        $taskQry="SELECT * FROM tasks WHERE id='$task_id' LIMIT 1";
        $result=$this->conn->query($taskQry);
        if($result->num_rows == 1)
        {
            $data=$result->fetch_assoc();
            return $data;
        } else
        {
            return false;
        }
    }


    public function index()
    {
        $taskQry="SELECT * FROM tasks order by id desc";
        $result=$this->conn->query($taskQry);
        if($result->num_rows > 0)
        {
            return $result;
        } else
        {
            return false;
        }
    }

    public function createTask($inputData)
    {
        $data="'".implode("','",$inputData)."'";
        //echo $data;

        $msgQry="INSERT INTO tasks(email,content) VALUES($data)";
        $result=$this->conn->query($msgQry);
        if($result)
        {
            return true;
        } else
        {
            return false;
        }
    }


    public function update($inputData,$id)
    {
        $task_id=validateInput($this->conn,$id);
        
        $email=$inputData['email'];
   
        $message=$inputData['message'];

        $taskUpdateQry=" UPDATE tasks SET content='$message',email='$email' WHERE id='$task_id' LIMIT 1 ";
        $result =$this->conn->query($taskUpdateQry);
        if($result)
        {
            return true;
        }  else
        {
            return  false;
        }



    }

}
?>