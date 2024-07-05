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

    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                       <div>
                          <h2 style="margin:20px; font-family: sans-serif; text-align:center; text-transform: uppercase;">My Profile</h2>
                       </div> 
                     <?php  include('include/message.php'); ?>
                     <h3><strong>Defence Intellengence </strong> </h3>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-user"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><a href="ad_viewProfile.php" style="text-decoration:none ;">
                    Profile </a></p>
                    <p class="text-muted">Details</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-desktop"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><a href="ad_profilePic.php" style="text-decoration:none ;">
                    Profile </a></p>
                    <p class="text-muted">Picture </p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-laptop"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><a href="ad_updateProfile.php" style="text-decoration:none ;">
                    Profile </a></p>
                    <p class="text-muted">Update  </p>
                </div>
             </div>
		     </div>
           
			</div>
                 <!-- /. ROW  -->
                <hr /> 




<?php   
include('include/footer.php')
?>