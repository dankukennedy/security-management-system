<?php
//include('config/app.php');
class ProofController
{
    public function __construct()
    {
        $db=new DatabaseConnection;
        $this->conn=$db->conn;
    }

    public function edit($id)
    {
        $proof_id=validateInput($this->conn,$id);
        $proofQry="SELECT * FROM proof WHERE id='$proof_id' LIMIT 1";
        $result=$this->conn->query($proofQry);
        if($result->num_rows == 1)
        {
            $data=$result->fetch_assoc();
            return $data;
        } else
        {
            return false;
        }
    }

    public function update($inputData,$id)
    {
        $proof_id=validateInput($this->conn,$id);
        $title=$inputData['title'];
        $post=$inputData['post'];
        $description=$inputData['description'];
        $comment=$inputData['comment'];
        $proofUpdateQry=" UPDATE proof SET post='$post',title='$title',description='$description',comment='$comment' WHERE id='$proof_id' LIMIT 1 ";
        $result =$this->conn->query($proofUpdateQry);
        if($result)
         {
          return true;
         }  else
           {
            return  false;
           }
        
    }
    
    public function delete( $id)
    {
        $proof_id=validateInput($this->conn,$id);
        $proofDeleteQuery="DELETE FROM proof WHERE id='$proof_id' LIMIT 1";
        $result=$this->conn->query($proofDeleteQuery);
        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function index()
    {
        $proofQry="SELECT * FROM proof order by id desc";
        $result=$this->conn->query($proofQry);
        if($result->num_rows > 0)
        {
            return $result;
        } else
        {
            return false;
        }
    }

    public function uploadDetails($title,$post,$description,$comment,$email,$fileNameNew)
    {
        $upload_query="INSERT INTO proof(title,post,description,comment,email,file_url) VALUES ('$title','$post','$description','$comment','$email','$fileNameNew')";
        $result=$this->conn->query($upload_query);
        return $result;
    }

// Checking whether Description is not Empty.
    public function description( $description){
        if(!empty( $description))
        {
            return true;
        }
        else{
            return false;
        }
    }

    // Checking whether Post is not Empty.
    public function post( $post){
        if(!empty( $post))
        {
            return true;
        }
        else{
            return false;
        }
    }
    public function email( $email){
        if(!empty( $email))
        {
            return true;
        }
        else{
            return false;
        }
    }

    // Checking whether Comment is not Empty.
    public function comment( $comment){
        if(!empty( $comment))
        {
            return true;
        }
        else{
            return false;
        }
    }

//Checking whether image is not Empty.
    public function fileNotEmpty( $file){
        if(!empty( $file))
        {
            return true;
        }
        else{
            return false;
        }
    }


}

?>