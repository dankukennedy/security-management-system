<?php
   class ReportController 
   {
    public function __construct()
    {
        $db= new DatabaseConnection;
        $this->conn=$db->conn;
    }

    
    public function index()
    {
        $reportQry="SELECT * FROM reports order by id desc";
        $result=$this->conn->query($reportQry);
        if($result->num_rows > 0)
        {
         return $result;   
        } else
          {
            return false;
          }
    }

   
    public function createNewReport($inputData)
    {
        $data="'".implode("','",$inputData)."'";
        //echo $data;

        $reportgQry="INSERT INTO reports(title,post,occurance,description,comment,email) VALUES($data)";
        $result=$this->conn->query($reportgQry);
       if($result)
       {
        return true;
       } else
       {
        return false;
       }
    }       

    public function delete( $id)
      {
       $report_id=validateInput($this->conn,$id); 
       $reportDeleteQuery="DELETE FROM reports WHERE id='$report_id' LIMIT 1";
       $result=$this->conn->query($reportDeleteQuery);
       if($result)
         {
           return true;
         } 
         else
          {
            return false;
          }
 
      }
      public function update($inputData,$id)
      {
        $report_id=validateInput($this->conn,$id); 
        $title=$inputData['title'];
        $post=$inputData['post'];
        $occurance=$inputData['occurance'];
        $description=$inputData['description'];
        $comment=$inputData['comment'];
       
        
        $reportUpdateQry=" UPDATE reports SET post='$post',title='$title',occurance='$occurance',description='$description',comment='$comment' WHERE id='$report_id' LIMIT 1 ";
        $result =$this->conn->query($reportUpdateQry);
        if($result)
         {
          return true;
         }  else
           {
            return  false;
           }
  
  
  
      }
      public function edit($id)
      {  
       $report_id=validateInput($this->conn,$id);
        $reportQry="SELECT * FROM reports WHERE id='$report_id' LIMIT 1";
        $result=$this->conn->query($reportQry);
        if($result->num_rows == 1)
          {
           $data=$result->fetch_assoc();
           return $data;
          } else
          {
            return false;
          }
      }
   



   }





?>