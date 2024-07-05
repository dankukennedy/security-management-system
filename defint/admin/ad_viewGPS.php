<?php 
include_once('controllers/LocationController.php');
?>

<?php 
include('include/header.php')
?>

<?php 
include('include/sidebar.php')
?>

<style>
    body{
        font-family: sans-serif;
    }
 </style>
 
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                <div class="col-md-12"> 
                        <div>
                          <h2 style="margin:20px; font-family: sans-serif; text-align:center; text-transform: uppercase;">View GPS Page</h2>
                       </div>
                       <?php  include('include/message.php'); ?>
                       <h3><strong>Defence Intellengence DSR </strong></h3> 
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                  <div class="row">

      <div class="card-body">
      <h3 style="text-align:center; color:blue"><strong>History of All Locations Generated in the System  </strong></h3> 
          <div class="table-responsive">
          <table id="example" class="table table-striped table-bordered" style="width:100%" cellspacing="0">
                <thead>
                    <tr>
                       <th>#</th> 
                       <th>Latitude</th>
                       <th>Longitude</th>
                       <th>Email</th>
                       <th>Name</th>
                       <th>Time</th>
                       <th>Go Live on Map</th>
                       <th>Deleted</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $i=1;
                    $location=new LocationController;
                  
                    $result=$location->Index();
                    if($result)
                    {
                        foreach($result as $row )
                        {

                            ?>

                             <tr>
                       <td><?=  $i++ ?></td>
                        <td><?= $row['latitude'] ?></td>
                        <td><?= $row['longitude'] ?></td>
                        <td><?= $row['email'] ?></td>                          
                        <td><?= $row['name'] ?></td>                          
                        <td><?= $row['time'] ?></td>                          
                              <td><form  method="POST">
                                            <input type="hidden" name="latitude" value="<?= $row['latitude'] ?>" class="btn btn-success">
                                            <input type="hidden" name="longitude" value="<?= $row['longitude'] ?>" class="btn btn-success">
                                            <button type="submit" name="coordinates"  class="btn btn-success">Check Live Location on the Map</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="codes/gps_code.php" method="POST">
                                            <button type="submit" name="deleteGps" value="<?= $row['id'] ?>" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                        
                    </tr>
                                <?php 
                        }

                     } else
                       { 
                        echo " No Records Found ";
                       }
                     ?>
                   
                </tbody>
            </table>
          </div>
        </div>
                  
                 <?php 

                  if(isset($_POST["coordinates"])){
                    $latitude = $_POST["latitude"];
                    $longitude = $_POST["longitude"];
                  }
                  ?>
        <div class="row ">

              <div class="card-body">
                <div style="margin:5px">
                <iframe width="100%" height="600" src="https://maps.google.com/maps?q=<?= $latitude ?>,<?= $longitude ?>&output=embed" ></iframe>
                </div>
               </div>
       </div>

        


             
			</div>
                 <!-- /. ROW  -->
                <hr />  

<?php   
include('include/footer.php')
?>