<?php
include('../config/app.php');
include_once('../controllers/LocationController.php');


 

if(isset($_POST['deleteGps']))
{
    $id = validateInput($db->conn,$_POST['deleteGps'] );
    $location=new LocationController;
    $result=$location->delete($id);
    if($result)
    {
        redirect("<h4 style='color:green;' >Location Deleted Successfully  !!!</h4>","viewGPS.php");

    }
    else
    {
        redirect("<h4 style='color: orange;' >Something Went Wrong</h4>","viewGPS.php");
    }


}



if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $inputData=[
        'latitude'=>validateInput($db->conn,$_POST['latitude']),
         'longitude'=>validateInput($db->conn,$_POST['longitude']),
         'email'=>validateInput($db->conn,$_POST['email']),
         'name'=>validateInput($db->conn,$_POST['name']),
        
        
    ];
    $location = new LocationController;
    $result = $location->createLocation($inputData);
    if($result)
    { redirect(" <h4 style='color:green; font:200'>Location Added Successfully !!</h4>","viewGPS.php");


    }
     else
     {
        redirect(" <h4 style='color:red; font:200'>Something Went Wrong Location Not Created</h4>","setGPS.php");

     }
}


if(isset($_POST['update_location']))
      {
        $id=validateInput($db->conn,$_POST['location_id']);
    
        $inputData=[
         'latitude'=>validateInput($db->conn,$_POST['latitude']),
         'longitude'=>validateInput($db->conn,$_POST['longitude']),
         'email'=>validateInput($db->conn,$_POST['email']),
        ];
      $report=new LocationController;
      $result=$report->update($inputData,$id);
    if($result)
    {
       redirect("Location Updated Successfully","viewGPS.php");
    }
      else
      {
       redirect("Something Went Wrong, Location Cannot Be Updated","setGPS.php");
      }
    
    
      }





?>