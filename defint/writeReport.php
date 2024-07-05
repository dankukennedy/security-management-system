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
                           <h2 style="margin:20px; font-family: sans-serif; text-align:center; text-transform: uppercase;"> New Reports</h2>
                        </div>
                        <h3 style="color: green; font-family: sans-serif;">Daily Situational Report  </h3>
                        <hr />  
                        <form class="user" action="codes/report_code.php" method="POST"> 
                            <input type="hidden" name="email" value="<?= $_SESSION['auth_user']['user_email']?>" >
                            

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control " name="title"
                                        id="fNameId" placeholder="Enter Report Title" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control " name="post"
                                        id="lastNameId" placeholder="Enter Your Post"required>
                                </div>
                            </div>

                            <div class="form-group">
                                    <input type="text" class="form-control"name="occurance" id="occurance"
                                        placeholder="Enter Occurance Here" required>
                                       
                                </div>

                            <div class="form-group">
                                 
                                        <textarea  class="form-control"  name="description" rows="10" cols="70" required> Write The Description Here
                                        
                                        </textarea>
                                </div>

                                <div class="form-group">
                                 
                                        <textarea  class="form-control"  name="comment" rows="5" cols="70">Comment Here

                                        </textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-user "  id="report" name="send_report">Send Report </button>
                                </div>

                </form>       
                    </div>
                
                    
			</div>
                 <!-- /. ROW  -->
               






<?php   
include('include/footer.php')
?>