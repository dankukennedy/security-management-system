<?php
include('../config/app.php');
include_once('../controllers/ReportController.php');

if(isset($_POST['send_report']))
{
    $inputData=[
        'title'=>validateInput($db->conn,$_POST['title']),
         'post'=>validateInput($db->conn,$_POST['post']),
         'occurance'=>validateInput($db->conn,$_POST['occurance']),
         'description'=>validateInput($db->conn,$_POST['description']),
         'comment'=>validateInput($db->conn,$_POST['comment']),
         'email'=>validateInput($db->conn,$_POST['email']),
        
        
    ];
    $report= new ReportController;
    $result=$report->createNewReport($inputData);
    if($result)
    { redirect(" <h4 style='color:green; font:200'>Report Added Successfully</h4>","ad_report.php");


    }
     else
     {
        redirect(" <h4 style='color:red; font:200'>Something Went Wrong Report Not Created</h4>","ad_report.php");

     }
}


if(isset($_POST['delete_report'])) 
{
   $id=validateInput($db->conn,$_POST['delete_report'] );
   $report=new ReportController;
   $result=$report->delete( $id);
   if($result)
   {
      redirect("Report Deleted Successfully","ad_viewReports.php");
   }
   else
   {
      redirect("Something Went Wrong","ad_viewReports.php");
    }


} 

if(isset($_POST['update_report']))
      {
        $id=validateInput($db->conn,$_POST['report_id']);
    
        $inputData=[
            'title'=>validateInput($db->conn,$_POST['title']),
             'post'=>validateInput($db->conn,$_POST['post']),
            'occurance'=>validateInput($db->conn,$_POST['occurance']),
            'description'=>validateInput($db->conn,$_POST['description']),
            'comment'=>validateInput($db->conn,$_POST['comment'])
        ];
      $report=new ReportController;
      $result=$report->update($inputData,$id);
    if($result)
    {
       redirect("Report Updated Successfully","ad_viewReports.php");
    }
      else
      {
       redirect("Something Went Wrong, Report Cannot Be Updated","ad_editReport.php");
      }
    
    
      }





?>