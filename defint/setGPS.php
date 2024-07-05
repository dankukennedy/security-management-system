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
    .location{
        text-align:center;
        font-size:30px;
        border-radius:10px;

    }
    button:hover{
        background-color:green;
        color:white;
        border-radius:10px;

    }
    b > a:hover{
        background-color:green;
        color:white;
        border-radius:10px;
        text-decoration:none;

    }
    b >a{
        border:2px solid black;
        border-radius:10px;
        padding:5px;
        text-decoration:none;

    }
    button{
        border-radius:10px; 
    }
 </style>
 
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12"> 
                        <div>
                          <h2 style="margin:20px; font-family: sans-serif; text-align:center; text-transform: uppercase;">Generate GPS Page</h2>
                       </div>
                       <?php  include('include/message.php'); ?>
                       <h3><strong>Defence Intellengence DSR </strong></h3> 
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
               <div class="location">
                <h3>Click On The Button Get Live Location</h3>
                <h1>Track Your Location</h1>
                <button onclick="getLocation()">Get Your Location</button>
                <b><a  href="viewGPS.php">View All Your Locations To Track Your Movements</a></b>
                   
               </div>
               
               <script>
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        function showPosition(position) {
            const latitude = position.coords.latitude;
            const longitude = position.coords.longitude;
            const email = "<?=$data['email'] ?>";
            const name = "<?= $_SESSION['auth_user']['user_fname']." ".$_SESSION['auth_user']['user_lname']." "; ?>"

            const xhr = new XMLHttpRequest();
            xhr.open("POST", "codes/gps_code.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    alert("Location saved successfully!");
                    window.location.href = "viewGPS.php"
                }
            };
            xhr.send("latitude=" + latitude + "&longitude=" + longitude + "&email=" + email + "&name=" + name);
        }
    </script>
             
               <!-- <form class="user" action="" method="POST"> 
                            

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control " name="longitude"
                                        id="fNameId" placeholder="Enter Your Longitude" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control " name="latitude"
                                        id="lastNameId" placeholder="Enter Your Latitude"required>
                                </div>
                            </div>

                           
                                <div class="form-group">
                                 
                                        <textarea  class="form-control"  name="comment" rows="5" cols="70">Comment Here

                                        </textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-user "  id="report" name="send_report">Send GPS Location </button>
                                </div>

                </form>   -->    
			</div>
                 <!-- /. ROW  -->
                <hr />  
        <div class="row ">
              <div class="card-body">
                 <div style="margin:5px">
                      <iframe width="100%" height="600" src="https://maps.google.com/maps?&output=embed" ></iframe>
                 </div>
               </div>
        </div>

<?php   
include('include/footer.php')
?>