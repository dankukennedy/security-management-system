<?php

include('../config/application.php');
include_once('../controllers/ProofController.php');


if(isset($_POST['deleteProof']))
{
    $id = validateInput($db->conn,$_POST['deleteProof'] );
    $proof=new ProofController();
    $result=$proof->delete( $id);
    if($result)
    {
        redirect("<h4 style='color:red;' >Evidence Deleted Successfully  !!!</h4>","viewEvidence.php");

    }
    else
    {
        redirect("<h4 style='color: orange;' >Something Went Wrong</h4>","viewEvidence.php");
    }


}


if(isset($_POST['save_proof']))
{
    $title= validateInput($db->conn,$_POST['title']);
    //$file= validateInput($db->conn,$_POST['file']);
    $post= validateInput($db->conn,$_POST['post']);
    $description= validateInput($db->conn,$_POST['description']);
    $comment= validateInput($db->conn,$_POST['comment']);
    $email= validateInput($db->conn,$_POST['email']);

    $file=$_FILES['file'];
    $fileName=$_FILES['file']['name'];
    $fileTmpName=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];
    $fileType=$_FILES['file']['type'];
    $fileExt=explode('.',$fileName);
    $fileActualExt=strtolower(end($fileExt));
    $allowed=array('jpg','png','jpeg','jfif','gif','avif','apng','pdf','docx','ppt');



    if(in_array( $fileActualExt,$allowed))
    {
        if($fileError===0)
        {
            if($fileSize < 1000000)
            {
                $fileNameNew=uniqid('',true).".".$fileActualExt;

                $proof=new ProofController;
                $result_proof= $proof->description($description);
                if($result_proof)
                {
                    $postNotEmpty=$proof->post($post);
                    if($postNotEmpty)
                    {
                        $commentNotEmpty=$proof->comment($comment);
                        if($commentNotEmpty)
                        {
                            $emailNotEmpty=$proof->email($email);
                            if ( $emailNotEmpty)
                            {
                                $fileNotEmpty= $proof->fileNotEmpty( $file);
                                if($fileNotEmpty)
                                {
                                    $uploadFile= $proof->uploadDetails($title,$post,$description,$comment,$email,$fileNameNew);
                                    $fileDestination="../files/".$fileNameNew;
                                    //move_uploaded_file($fileTmpName,$fileDestination);
                                    //  move_uploaded_file($fileTmpName,'uploaded/images/profiles/'.$fileNameNew);
                                    if($uploadFile)
                                    {
                                        move_uploaded_file($fileTmpName,$fileDestination);
                                        redirect("<h4 style='color: green;' > File Uploaded Successfully  !!!</h4>","viewEvidence.php");
                                    }
                                    else
                                    {
                                        redirect("<h4 style='color: orange;' > Something Went Wrong cannot upload image file!!!</h4>","writeEvidence.php");
                                    }

                                }
                                else
                                {
                                    redirect("<h4 style='color: orange;' > The  Image  cannot be left empty !!!</h4>","writeEvidence.php");
                                }

                            }
                            else
                            {
                                redirect("<h4 style='color: orange;' > The Email cannot be left empty !!!</h4>","writeEvidence.php");
                            }
                        }
                        else
                        {
                            redirect("<h4 style='color: orange;' > The Comment cannot be left empty !!!</h4>","writeEvidence.php");

                        }

                    }
                    else{
                        redirect("<h4 style='color: orange;' > The  Post cannot be left empty !!!</h4>","writeEvidence.php");
                    }
                }
                else
                {
                    redirect("<h4 style='color: orange;' > The  Image description cannot be left empty !!!</h4>","writeEvidence.php");
                }
            }
            else
            {
                redirect("<h4 style='color: orange;' > The  file size is too big !!!</h4>","writeEvidence.php");
            }
        }
        else
        {
            redirect("<h4 style='color: orange;' > The is Error Uploading the file of this type  !!!</h4>","writeEvidence.php");
        }
    }
    else
    {
        redirect("<h4 style='color: orange;' >  print_r($file);You cannot upload file of this type  !!!</h4>","writeEvidence.php");
    }


}

if(isset($_POST['update_proof']))
      {
        $id=validateInput($db->conn,$_POST['proof_id']);
    
        $inputData=[
            'title'=>validateInput($db->conn,$_POST['title']),
             'post'=>validateInput($db->conn,$_POST['post']),
            'description'=>validateInput($db->conn,$_POST['description']),
            'comment'=>validateInput($db->conn,$_POST['comment'])
        ];
      $proof = new ProofController;;
      $result=$proof->update($inputData,$id);
    if($result)
    {
       redirect("Evidence Updated Successfully","viewEvidence.php");
    }
      else
      {
       redirect("Something Went Wrong, Evidence Cannot Be Updated","editProof.php");
      }
    
    
      }




?>
