<?php class UpdateController
{
   public function __construct()
   {
    $db=new DatabaseConnection;
    $this->conn=$db->conn;
   }

   public function edit($id)
   {
    $user_id=validateInput($this->conn,$id);
    $userQuery="SELECT * FROM users WHERE id='$user_id' LIMIT 1";
    $result=$this->conn->query( $userQuery);
    if( $result->num_rows==1)
    {  $data=$result->fetch_assoc();
        return $data;

    }else{
         return false;
    }

   }

   public function update($rank,$region,$subDivision,$number,$email,$about,$id)
   {
   $user_id=validateInput($this->conn,$id);
  $rank= validateInput($this->conn,$_POST['rank']);
  $region= validateInput($this->conn,$_POST['region']);
  $subDivision= validateInput($this->conn,$_POST['subDivision']);
  $number= validateInput($this->conn,$_POST['number']); 
  $email= validateInput($this->conn,$_POST['email']); 
  $about= validateInput($this->conn,$_POST['about']); 

    $userUpdateQuery=" UPDATE users SET rank='$rank',region='$region',subDivision='$subDivision',number='$number',about='$about',email='$email'  WHERE id='$user_id' LIMIT 1";
   $result=$this->conn->query($userUpdateQuery);
   if($result)
   { 
     return true;
   }else 
   { 
    return false;
   }

   }


}
 
?>