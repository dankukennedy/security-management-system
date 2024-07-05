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
                  <h2 style="margin:20px; font-family: sans-serif; text-align:center; text-transform: uppercase;">Task Page</h2>
               </div>
                    <?php  include('include/message.php'); ?>
                    <h3><strong>Defence Intellengence DSR </strong></h3>
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
                        <form action="codes/task_code.php" method="POST">


                            <div class="form-group row">


                                <div class="col-sm-6 mb-3 mb-sm-0">
        <textarea  class="form-control"  name="message" rows="10" cols="70" required placeholder="Write The task Here"> Assign Task

        </textarea>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="email" name="email" placeholder="Enter email of the assigned Officer" class="form-control">
                                </div>

                            </div>

                            <div class="mb-3">
                                <button type="submit" name="save_task" class="btn btn-primary">Send Task </button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>






        </div>








    </div>
    <!-- /. ROW  -->
    <hr />

<?php
include('include/footer.php')
?>