<?php  include_once('controllers/ReportController.php');
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
                          <h2 style="margin:20px; font-family: sans-serif; text-align:center; text-transform: uppercase;">New Reports</h2>
                       </div>
                       <h3><strong>Defence Intellengence DSR</strong> </h3>
                      
                        <h3 style="color: green;">Daily Situation Report  </h3>
                        <hr />   
                        <?php 
        if(isset($_GET['id']))
        {
            $report_id=validateInput($db->conn,$_GET['id']);
             $report=new ReportController;
             $result=$report->edit($report_id);  
             if($result)
             {  
                  ?>
                        <form class="user" action="codes/report_code.php" method="POST"> 
                            
                            <input type="hidden" name="report_id" value="<?=$result['id'];  ?>" >
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control " value="<?=$result['title']; ?>" name="title"
                                        id="fNameId" placeholder="Enter Report Title" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control " name="post"
                                        id="lastNameId" placeholder="Enter Your Post" value="<?=$result['post']; ?>"required>
                                </div>
                            </div>

                            <div class="form-group">
                                    <input type="text" class="form-control"name="occurance" value="<?=$result['occurance']; ?>" id="occurance"
                                        placeholder="Enter Occurance Here" required>
                                       
                                </div>

                            <div class="form-group">
                                 
                                        <textarea  class="form-control"  name="description" value="<?=$result['description']; ?>"rows="10" cols="70" required> <?=$result['description']; ?>
                                        
                                        </textarea>
                                </div>

                                <div class="form-group">
                                 
                                        <textarea  class="form-control"  name="comment" rows="5" cols="70"> <?=$result['comment']; ?>

                                        </textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-user "  id="report" name="update_report">Update Report </button>
                                </div>

                </form>   
                <?php
             }   
             else
             {
              echo "<h4>No Record Found</h4>";
             }

         }  else
          {
            echo "<h4> Something Went Wrong</h4>";
          }
        ?>    
                    </div>
                
                    
			</div>
                 <!-- /. ROW  -->
               






<?php   
include('include/footer.php')
?>