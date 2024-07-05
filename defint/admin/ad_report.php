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
                          <h2 style="margin:20px; font-family: sans-serif; text-align:center; text-transform: uppercase;">Report Page</h2>
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
                <i class="fa fa-book"> </i> 
                </span>
                <div class="text-box" >
                    <p class="main-text"><a href="ad_viewReports.php" style="text-decoration:none ;">Reports</a></p>
                    <p class="text-muted">View</p>
                </div>
             </div>
		     </div>
             
			</div>
                 <!-- /. ROW  -->
                <hr />  

<?php   
include('include/footer.php')
?>