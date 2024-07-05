<?php 
include_once('controllers/RegisterController.php');
include_once('controllers/loginController.php');
include_once('controllers/changePasswordController.php');
include_once('controllers/UpdateController.php');
$auth =new loginController;

if(isset($_POST['updateProfile']))
{
    $id=validateInput($db->conn, $_POST['user_id']);
    $number=validateInput($db->conn, $_POST['number']);
    $rank=validateInput($db->conn, $_POST['rank']);
    $region=validateInput($db->conn, $_POST['region']);
    $email=validateInput($db->conn, $_POST['email']);
    $about=validateInput($db->conn, $_POST['about']);
    $subDivision=validateInput($db->conn, $_POST['subDivision']);

      $userUpdateDetails= new UpdateController;

     $result=$userUpdateDetails->update($rank,$region,$subDivision,$number,$email,$about,$id);
     if($result)
     {   
      redirect(" <h5 style='color: green';> Profile Update  Successfully </h5>","ad_settings.php");
     }
        else
        {
          redirect(" <h5 style='color: red';> Profile Update  fails </h5>","ad_editProfile.php");
        }

}

if(isset($_POST['resetPassword']))
{
  $id = validateInput($db->conn, $_POST['user_id']);
  $newPassword= validateInput($db->conn,$_POST['newPassword']);   
  $rePassword= validateInput($db->conn,$_POST['rePassword']);
  $userChangePass=new changePasswordController;
  $result_checkPassword= $userChangePass->checkPassword($id,$newPassword);
  if($result_checkPassword)
  { $result_passwordLenght=$userChangePass->passwordLenght($newPassword);
     if( $result_passwordLenght)
     {
          $result_newPassSecurity=$userChangePass->newPasswordSecurity($newPassword);
        if( $result_newPassSecurity)
          {  
             $result_comparePass=$userChangePass->confirmPassword($newPassword,$rePassword);
            if($result_comparePass)
            {
              $password_hash=password_hash($newPassword,PASSWORD_DEFAULT);
              if( $password_hash)
                {
                  $password=$password_hash;
                  $changePasswordqry=$userChangePass->changePassword($password,$id);
                  if( $changePasswordqry)
                     {
                       {
                        redirect(" <h5 style='color: green';> Password change successfully !!! </h5>","ad_settings.php");
                               
                       }
                     }
                        else
                        {
                          redirect(" <h5 style='color: orange';> attempt to change New Password fails !!!  </h5>","ad_changePassword.php");
                 
                        }
                } 
                 else
                 {
                   redirect(" <h5 style='color: orange';> New Password security fails !!!  </h5>","ad_changePassword.php");
                 }
            } 
            else{
              redirect(" <h5 style='color:  orange';> New Password and Repeat password does not Match up !!!  </h5>","ad_changePassword.php");
                }
            
          }  
          else{
            redirect(" <h5 style='color:  orange';> Enter password  mix with numbers,special characters,uppercases,lowercases !!  </h5>","ad_changePassword.php");
          }

     } else     
        {
          redirect(" <h5 style='color: orange';> Enter password up to 8 characters or more !!! </h5>","ad_changePassword.php");
   }

  }
     else
     {
 redirect(" <h5 style='color: orange';> Password entered does not match with Current Password !!!  </h5>","ad_changePassword.php");
     }



}



if(isset($_POST['logout'])){
    $checkLoggedOut=$auth->logout();
    if($checkLoggedOut){
      redirect(" <h5 style='color: green';> Loggedout Successfully !!! </h5>","ad_login.php");
    }
  
  }

if(isset($_POST['login']))
{
  $email=validateInput($db->conn, $_POST['email']);
  $password=validateInput($db->conn, $_POST['password']); 
  $checkLogin=$auth->userLogin($email,$password);
    if($checkLogin)
   {
      redirect(" <h5 style='color: green';> Logged in Successfully !!!</h5>","index.php");
   }    else 
     {
      $checkAccount=$auth->userAccount($email);
      if ($checkAccount){
             redirect("<h5 style='color: orange';>Please You dont Have an Account Create one !!!</h5>","ad_login.php");
         } 
        else{ 
           redirect("<h5 style='color: orange';> Invalid Email or Password !!!</h5>","ad_login.php");

        }
      }

}


if(isset($_POST['register']))
{

    $fName=validateInput($db->conn, $_POST['fName']);
    $fName=ucwords($fName);
    $lName=validateInput($db->conn, $_POST['lName']);
    $lName=ucwords($lName);
    $otherName=validateInput($db->conn, $_POST['otherName']);
    $otherName=ucwords($otherName);
    $email=validateInput($db->conn, $_POST['email']);
    $gender=validateInput($db->conn, $_POST['gender']);
    $number=validateInput($db->conn, $_POST['number']);
    $rank=validateInput($db->conn, $_POST['rank']);
    $region=validateInput($db->conn, $_POST['region']);
    $subDivision=validateInput($db->conn, $_POST['subDivision']);
    $regimentalNo=validateInput($db->conn, $_POST['regimentalNo']);
    $nia=validateInput($db->conn, $_POST['nia']);
    $password=validateInput($db->conn, $_POST['password']);
    $repassword=validateInput($db->conn, $_POST['repassword']);


    $register=new RegisterController;
    $checkConfirmPassword=$register->confirmPassword($password,$repassword);
    if($checkConfirmPassword)
    {
       $checkNames=$register->namesNotEmpty($fName,$lName);
       if($checkNames)
       {
         $emailEmpty=$register->IsEmailEmpty($email);
         if($emailEmpty){
            $checkEmailExist=$register->checkEmail($email);
            if($checkEmailExist)
            { 
                $niaCheckEmpty=$register->isEmptyNia($nia);
                if($niaCheckEmpty)
                {
                   $niaCheck=$register->checkNia($nia);
                   if(!$niaCheck)
                   {
                      $regimentalNoEmpty=$register->isRegimentalNoEmpty($regimentalNo);
                      if($regimentalNoEmpty)
                      {
                        $regimentalNoLenght=$register->regimentalLenght($regimentalNo);
                        if($regimentalNoLenght){
                           $regimentalNoCheck=$register->checkRegimentalNo($regimentalNo);
                           if(!$regimentalNoCheck)
                           {
                            $numberEmpty=$register->isEmptyNumber($number);
                            if($numberEmpty)
                            {
                                $checkNumber=$register->isNumberExist($number);
                                if(!$checkNumber)
                                {
                                  $checkNumberFormat=$register->phoneNumberFormat($number);
                                  if($checkNumberFormat)
                                  {
                                     $emailValidate=$register->isEmailValid($email);
                                     if($emailValidate)
                                     {
                                        $checkRank=$register->IsRankEmpty($rank);                                        
                                
                                        if( $checkRank){
                                           $checkGender=$register->IsGenderEmpty($gender);
                                            if( $checkGender)
                                            {
                                                $checkRegion=$register->IsRegionEmpty($region);
                                                if($checkRegion)
                                                {
                                                    $checkSubDivision=$register->IsSubDivisionEmpty($subDivision); 
                                                    if($checkSubDivision)
                                                    {                                                                                 
                                        
                                                                   $passwordLenght=$register->isPasswordLenght($password);
                                                           if($passwordLenght)
                                                          {
                                                       $passwordHash=password_hash($password,PASSWORD_DEFAULT);
                                                    if($passwordHash)
                                                     {
                                                          $password=$passwordHash;
                                                          $registration_query=$register->registration($fName,$lName,$otherName,$email,$nia,$regimentalNo,$number,$password,$gender,$region,$subDivision,$rank);
                                                        if($registration_query)
                                                             {
                                                             redirect("<h4 style='color: green;'>Successfully Registered Welcome !!!</h4>","ad_login.php");
                                                            }
                                                      else{
                                                            redirect("<h4 style='color: orange;'>Something went wrong cannot register!!!</h4>","ad_register.php");
                                                          }
                                                     }
                                                     else{
                                                         redirect("<h4 style='color: orange;'>Password security Reasons!!!</h4>","ad_register.php");
                                                          }
                                                  } 
                                                       else{
                                                          redirect("<h4 style='color: orange;'>Password entered must be more than 6 Characters !!!</h4>","ad_register.php");
                                                  }
                                                      }else
                                                      {
                                                        redirect("<h4 style='color: orange;'>Check your SubDivision/District/Municipal/Metro cannot be left empty!!!</h4>","ad_register.php");
                                     
                                                    }
                                                }else
                                                {
                                                    redirect("<h4 style='color: orange;'>Check your Region cannot be left empty!!!</h4>","ad_register.php");
                                     
                                                }
                                            }
                                            else{
                                                redirect("<h4 style='color: orange;'>Check your Gender cannot be left empty!!!</h4>","ad_register.php");
                                    
                                            }
                                        }else{
                                            redirect("<h4 style='color: orange;'>Check your Rank cannot be left empty!!!</h4>","ad_register.php");
                                    
                                        }
                                     }  
                                     else{
                                        redirect("<h4 style='color: orange;'>Check your email !!!Email Not Valid !!!</h4>","ad_register.php");
                                     }
                                  }
                                   else{
                                    redirect("<h4 style='color: orange;'> Number must be at least 10 digits!!!</h4>","ad_register.php");
                                   }
                                } else
                                {
                                    redirect("<h4 style='color: orange;'> Number already Existed !!!</h4>","ad_register.php");
                                }
                            }else{
                                redirect("<h4 style='color: orange;'> Number Field cannot be Empty !!!</h4>","ad_register.php");
                            }

                           }else{
                            redirect("<h4 style='color: orange;'>Regimental Number already Existed !!!</h4>","ad_register.php");
                           }
                        }
                        else{
                            redirect("<h4 style='color: orange;'>Regimental Number must be 6 to 8 digits !!!</h4>","ad_register.php");
                        }
                      } 
                      else{
                        redirect("<h4 style='color: orange;'>Regimental Number Field cannot be Empty !!!</h4>","ad_register.php");
                      }
                   }
                         else{
                            redirect("<h4 style='color: orange;'>NIA already Existed !!!</h4>","ad_register.php");
                         }
                } else
                {
                    redirect("<h4 style='color: orange;'>NIA Field cannot be Empty !!!</h4>","ad_register.php");
                }
            }  else 
                {
                redirect("<h4 style='color: orange;'>Email already Existed !!!</h4>","ad_register.php");
                }

         }
             
       } else {
         redirect("<h4 style='color: orange;'>Email Fields cannot be left empty !!!</h4>","ad_register.php");
          }
       {  redirect("<h4 style='color: orange;'>Names Fields cannot be left empty !!!</h4>","ad_register.php");

       }
    }
      else
         {
           redirect("<h4 style='color: orange;'>Password and Re-type Password didn't match!!!</h4>","ad_register.php");
         }

   


}

?>