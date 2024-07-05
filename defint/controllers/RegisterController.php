<?php 

class RegisterController{

 public function __construct()
 {
    $db=new DatabaseConnection;
    $this->conn=$db->conn;
  
 }

 //register new user 
 public function registration($fName,$lName,$otherName,$email,$nia,$regimentalNo,$number,$password,$gender,$region,$subDivision,$rank)
 {
    $register_query="INSERT INTO users (fName,lName,otherName,email,nia,regimentalNo,number,password,gender,region,subDivision,rank) VALUES('$fName','$lName','$otherName','$email','$nia','$regimentalNo','$number','$password','$gender','$region','$subDivision','$rank')";
    $result=$this->conn->query($register_query);
    return $result;
 }

//Checking where both password matches.
public function confirmPassword($password,$repassword)
{
  if($password == $repassword){ 
    return true;
   
  }else {
    return false;
   
  }
}

//checking password not less than 6
public function passwordLenght($password)
{
  if(strlen($password) < 6)
  { 
    return false;
  }  else
   { 
    return true;
   }
}

//check if password is Empty;
public function isPasswordLenght($password)
{
    if(!empty($password))
    {   
       if(strlen($password) > 6)
       {
        return true;
       }else{
        return false;
       }
    } else{
        return false;
    }
}

//Checkin whether name field are not left empty
public function namesNotEmpty($fName,$lName)
{
    if (!empty($fName)||!empty($lName))
    {
        return true;
    } else 
    { 
        return false;
    }
}

//Check if Email fieldis empty
public function IsEmailEmpty($email)
{
    if(!empty($email))
    {
        return true;
    }  else
    {
        return false;
    }
}

//Check if NIA field is empty
public function isEmptyNia($nia)
{
    if(!empty($nia))
    {
        return true;
    } else
      {
        return false;
      }
}

//Check if number field is empty
public function isEmptyNumber($number)
{
    if(!empty($number))
    {
        return true;
    }else
    {
        return false;
    }
}


//Setting contact format.
public function phoneNumberFormat($number)
{
 //Allow only Digits,Remove all other characters.
 $number=preg_replace("/[^\d]/","",$number);
 //get the lenght
 $lenght_of_number=strlen($number);
 //if contact;
   if($lenght_of_number==10)
   {
     return true;
   } 
     else {
       return false;
      }
}   

//check if regimental number field is empty
public function isRegimentalNoEmpty($regimentalNo)
{
    if(!empty($regimentalNo))
    {
        return true;
    }else
    {
        return false;
    }
}

//Checking whether Email exist
public function isEmailValid($email)
{
    if(filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        return true;
    } else 
    {
        return false;
    }

}
//check regimental number length
public function regimentalLenght($regimentalNo)
{
    if(strlen($regimentalNo ) >= 6 || strlen($regimentalNo ) <= 8 )
    {
        return true;
    } else
    {
        return false;
    }
}

//Checking whether Regimental Number existed
public function checkRegimentalNo($regimentalNo)
{
$checkRegimentalNo="SELECT regimentalNo FROM users WHERE regimentalNo='$regimentalNo' LIMIT 1";
$result=$this->conn->query($checkRegimentalNo);
if($result){
    return false;
}else{
    return true;

   }
}

//checking Whether contact entered existed    
public function isNumberExist($number)
{
    $checkUserNumber="SELECT number FROM users WHERE number='$number' LIMIT 1";
    $result=$this->conn->query($checkUserNumber);
    if($result->num_rows > 0){
      return true;
    } else{
     return false;
    }

}

//Check whether Email Existed
public function checkEmail($email)
{
    $checkUserEmail="SELECT email FROM users WHERE email='$email' LIMIT 1";
    $result=$this->conn->query($checkUserEmail);
    if($result->num_rows >0){
        return false;
    } else{
        return true;
    }
    

}

//check whether NIA Existed
public function checkNia($nia)
{
  $checkUserNia="SELECT nia FROM users WHERE nia='$nia' LIMIT 1";
  $result=$this->conn->query($checkUserNia);
  if($result->num_rows > 0){
    return true;
  }else{
    return false;
  }
}

//Checking Whether NIA Exist
public function isNiaExist($nia)
{ $checkManager="SELECT nia FROM managers WHERE nia ='$nia' LIMIT 1";
 $result=$this->conn->query($checkManager);
 if ($result->num_rows > 0 ) {
   return true;
 }else{
   return false;
 }
 
}

// Checcking whether Region is not Empty.
public function IsRegionEmpty($region){
    if(!empty($region))
    {
       return true;
    }
    else{
      return false;
    }
  }
  
  // Checcking whether Sub-Division is not Empty.
  public function IsSubDivisionEmpty($subDivision){
    if(!empty($subDivision))
    {
       return true;
    }
    else{
      return false;
    }
  }
  
// Checcking whether Region is not Empty.
public function IsGenderEmpty($gender){
    if(!empty($gender))
    {
       return true;
    }
    else{
      return false;
    }
  }
  
// Checcking whether Region is not Empty.
public function IsRankEmpty($rank){
    if(!empty($rank))
    {
       return true;
    }
    else{
      return false;
    }
  }
  
  
}

?>