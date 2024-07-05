<?php

include_once('controllers/TaskController.php');
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
            <h2> Message Page</h2>
             <div>
                 <h2 style="margin:20px; font-family: sans-serif; text-align:center; text-transform: uppercase;">Message Page </h2>
             </div>  
            <?php  include('include/message.php'); ?>
            <h3><strong>Defence Intellengence DSR</strong> </h3> 
        </div>
    </div>
    <!-- /. ROW  -->
    <hr />


            <div class="col-md-12">
                <h5 > <i style="color:green; font:200"></i></h5>
                <div class="card">
                    <div class="card-header" >
                        <h5 style="color:white ;">Send Messages</h5>
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($_GET['id']))
                        {
                            $task_id=validateInput($db->conn,$_GET['id']);
                            $message=new TaskController;
                            $result=$message-> edit($task_id);
                            if($result)
                            {
                                ?>


                                <form action="codes/task_code.php" method="POST">

                                <input type="hidden" name="task_id" value="<?=$result['id'];  ?> "  class="form-control" />

                                <div class="form-group row">
    
    
                                    <div class="col-sm-6 mb-3 mb-sm-0">
            <textarea  class="form-control"  name="message" value="<?=$result['content'];  ?> "  rows="10" cols="70" required placeholder="Write The task Here"> Assign Task
    
            </textarea>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="email" name="email"value="<?=$result['email'];  ?> "  placeholder="Enter email of the assigned Officer" class="form-control">
                                    </div>
    
                                </div>
    
                                <div class="mb-3">
                                    <button type="submit" name="save_task" class="btn btn-primary">Save Task </button>
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

            </div>





    <!-- /. ROW  -->
    <hr />

<?php
include('include/footer.php')
?>