<?php 


include('include/header.php');
include('include/sidebar.php')
?>

<style>
    body{
        font-family: sans-serif;
    }
 </style>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <div>
                          <h2 style="margin:20px; font-family: sans-serif; text-align:center; text-transform: uppercase;"> DI Dashboard</h2>
                       </div>
                       <h3><strong>Defence Intellengence DSR </strong> </h3>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-envelope-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><a href="messages.php"  style="text-decoration:none ;">120 New</a></p>
                    <p class="text-muted">Messages</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><a href="tasks.php"  style="text-decoration:none ;">Tasks</a></p>
                    <p class="text-muted">Remaining</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-camera"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><a href="evidence.php"  style="text-decoration:none ;">Proof</a></p>
                    <p class="text-muted">Evidence</p>
                    
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-book"></i>
                    
                </span>
                <div class="text-box" >
                    <p class="main-text"><a href="report.php"  style="text-decoration:none ;">
                   Reports </a></p>
                    <p class="text-muted">working</p>
                </div>
             </div>
		     </div>


             <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-cog fa-spin fa-fw"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><a href="settings.php"  style="text-decoration:none ;">settings</a></p>
                    <p class="text-muted">Viltals</p>
                </div>
             </div>
		     </div>
             


             <div class="col-md-3 col-sm-6 col-xs-6">           
			    <div class="panel panel-back noti-box">
                  <span class="icon-box bg-color-blue set-icon">
                   <i class="fa fa-globe fa-spin fa-fw"></i>    
                  
                    </span>
                    <div class="text-box" >
                      <p class="main-text"><a href="gps.php"  style="text-decoration:none ;">Location Service</a></p>
                      <p class="text-muted">GPS</p>
                   </div>
                </div>
		     </div>
                         

             <div class="col-md-3 col-sm-6 col-xs-6">           
			    <div class="panel panel-back noti-box">
                  <span class="icon-box bg-color-green set-icon">
                   <i class="fa fa-phone  fa-fw"></i>    
                  
                    </span>
                    <div class="text-box" >
                      <p class="main-text"><a href="call.php"  style="text-decoration:none ;">Call</a></p>
                      <p class="text-muted">Call Center</p>
                   </div>
                </div>
		     </div>


           
			</div>
                 <!-- /. ROW  -->
                <hr />                
               
                     
                                     

                
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
  <?php 
  include('include/footer.php');
  ?>