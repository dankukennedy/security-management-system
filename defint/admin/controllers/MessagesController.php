<?php

class MessagesController
{
    public function __construct()
    {
        $db=new DatabaseConnection;
        $this->conn=$db->conn;
    }


    public function delete( $id)
    {
        $msg_id=validateInput($this->conn,$id);
        $msgDeleteQuery="DELETE FROM messages WHERE id='$msg_id' LIMIT 1";
        $result=$this->conn->query($msgDeleteQuery);
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
        $message_id=validateInput($this->conn,$id);
        $msgQry="SELECT * FROM messages WHERE id='$message_id' LIMIT 1";
        $result=$this->conn->query($msgQry);
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
        $msgQry="SELECT * FROM messages order by id desc";
        $result=$this->conn->query($msgQry);
        if($result->num_rows > 0)
        {
            return $result;
        } else
        {
            return false;
        }
    }

    public function createMessage($inputData)
    {
        $data="'".implode("','",$inputData)."'";
        //echo $data;

        $msgQry="INSERT INTO messages(subject,content) VALUES($data)";
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
        $message_id=validateInput($this->conn,$id);
        // $cicName=$inputData['cicName'];
        // $region=$inputData['region'];
        $subject=$inputData['subject'];
        //$gps=$inputData['gps'];
        $message=$inputData['message'];

        $msgUpdateQry=" UPDATE messages SET content='$message',subject='$subject' WHERE id='$message_id' LIMIT 1 ";
        $result =$this->conn->query($msgUpdateQry);
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