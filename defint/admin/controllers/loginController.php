
<?php 
class loginController
{
    public function __construct(){
        $db=new DatabaseConnection;
        $this->conn=$db->conn;

    }
        public function userAccount($email)
    { 
         $checkLogin="SELECT * FROM admin WHERE email='$email' LIMIT 1";
         $result=$this->conn->query($checkLogin);
         if($result->num_rows < 1)
         {
            return false;
         }
             
    } 
       
    public function userLogin($email,$password){
      $managersLogin="SELECT * FROM admin WHERE email='$email' LIMIT 1";
      $result=$this->conn->query($managersLogin);
      if($result->num_rows >0){
        if($data=$result->fetch_assoc()){
          $hash_pass=password_verify($password,$data['password']);
          if($hash_pass==false){
            return false;
          }elseif($hash_pass){
            $this->userAuthentication($data);
            return true; 
          }
        }

      } 
      else {
        return false;
      }
    }
  
  

     
      
private function userAuthentication($data)
{
  $_SESSION['authenticated']=true;
  //$_SESSION['auth_role']= $data['role_as'];
  $_SESSION['auth_user']=[
   'user_id'=>$data['id'],
   'user_fname'=>$data['fName'],
   'user_lname'=>$data['lName'],
   'user_otherName'=>$data['otherName'],
   'user_regimentalNo'=>$data['regimentalNo'],
   'user_email'=>$data['email'],
   'user_number'=>$data['number'],
   'user_gender'=>$data['gender'],
   'user_nia'=>$data['nia'],
   'user_rank'=>$data['rank'],
   'user_region'=>$data['region'],
   'user_subDivision'=>$data['subDivision']

  ];
}
      public function isLoggedIn(){
        if(isset($_SESSION['authenticated'])===TRUE){
         redirect("<h4 style='color:red;' >You are Already LoggedIn</h4>","index.php");
        }
        else{
            return false;
        }
      }

      public function logout(){
        if(isset($_SESSION['authenticated'])===TRUE){
        unset($_SESSION['authenticated']);
        unset($_SESSION['auth_user']);
         return true;
 
        } 
        else{
          return false;
        }
      }

}





?>

