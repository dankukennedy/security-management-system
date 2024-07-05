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
                          <h2 style="margin:20px; font-family: sans-serif; text-align:center; text-transform: uppercase;">GPS Page</h2>
                       </div>                 
                     <?php  include('include/message.php'); ?>  
                     <h3><strong>Defence Intellengence DSR</strong> </h3>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
               
              
             
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-globe fa-spin  fa-fw"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><a href="setGPS.php"  style="text-decoration:none ;">
                   GPS </a></p>
                    <p class="text-muted">Generate GPS</p>
                </div>
             </div>
		     </div>
             
             <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                <i class="fa fa-globe fa-spin  fa-fw"> </i> 
                </span>
                <div class="text-box" >
                    <p class="main-text"><a href="viewGPS.php"  style="text-decoration:none ;">GPS</a></p>
                    <p class="text-muted">View GPS List</p>
                </div>
             </div>
		     </div>
             
			</div>
                 <!-- /. ROW  -->
                <hr />  

<?php   
include('include/footer.php')
?>