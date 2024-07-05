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
                          <h2 style="margin:20px; font-family: sans-serif; text-align:center; text-transform: uppercase;">Security</h2>
                       </div>

                     <?php  include('include/message.php'); ?>
                     <h3><strong>Defence Intellengence DSR</strong> </h3>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-md-12">
                <form class="user" action="" method="POST">
                                <div class="form-group">
                               <input type="hidden" name="user_id" value="<?=$data['id'];  ?> " >
                                    
                                    <input type="password" class="form-control "
                                        id="password"  name="currentPassword"
                                        placeholder="Enter Your Current Password" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control "
                                        id="newPassword"  name="newPassword"
                                        placeholder="Enter New Password" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control "
                                        id="repeatPassword"  name="rePassword"
                                        placeholder="Repeat Password" required>
                                </div>

                                <div class="form-group">
                            <button type="submit" class="btn btn-success btn-user btn-block"   name="resetPassword"
                                >Reset Password </button>
                        </div>
                              
                            </form>
                    </div>
                   
           
			</div>
                 <!-- /. ROW  -->
                <hr /> 




<?php   
include('include/footer.php')
?>