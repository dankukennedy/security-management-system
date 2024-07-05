<?php 
class AuthenticationController
{
    public function __construct()
    {
        $db=new DatabaseConnection;
        $this->conn=$db->conn;
        $this->checkIsLoggedIn();

    }
    public function admin()
    {
       $manager_id=$_SESSION['auth_manager']['manager_id'];
       $checkAdmin="SELECT id, role_as FROM admin WHERE id='$manager_id' AND role_as='1' LIMIT 1";
       $result=$this->conn->query($checkAdmin);
       if($result->num_rows == 1)
       {
           return true;
       } else
       { 
        redirect("<h4 style='color:red;'>You are not Authorized as Admin</h4>","index.php");
     return false;
       }
    }
    


public function AuthUserDetail()
{
    $checkAuth=$this->checkIsLoggedIn();
    if($checkAuth){
    $user_id= $_SESSION['auth_user']['user_id'];
    $getUserData=" SELECT * FROM admin WHERE id='$user_id' LIMIT 1";
    $result=$this->conn->query($getUserData);
     if($result->num_rows > 0){
       $data=$result->fetch_assoc();
       return $data;
     } else{
        redirect("<h4>Something Went wong </h4>","ad_login.php");
     }
    }else{
        return false;
    }
}


private function checkIsLoggedIn()
{  
  if(!isset($_SESSION['authenticated'])){
redirect("<h4 style='color:red;' >Login to Access the page</h4>","ad_login.php");
   return false;
  } else{ 
return true;
  }


}

}

$authenticated=new AuthenticationController;

?>