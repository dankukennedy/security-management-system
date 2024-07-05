<?php
include_once('controllers/MessagesController.php');
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
              <h2 style="margin:20px; font-family: sans-serif; text-align:center; text-transform: uppercase;">Message Page</h2>
             </div>
            <?php  include('include/message.php'); ?>
            <h5>Defence Intellengence  </h5>
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
                            $message_id=validateInput($db->conn,$_GET['id']);
                            $message=new MessagesController;
                            $result=$message-> edit($message_id);
                            if($result)
                            {
                                ?>
                                <form action="codes/messages_code.php" method="POST">
                                    <div class="form-group row">
                                        <input type="hidden" name="message_id" value="<?=$result['id'];  ?> "  class="form-control" />


                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
        <textarea  class="form-control"  name="subject" rows="10" cols="70" required placeholder="Write The Subject Here"> <?=$result['subject'];  ?>

        </textarea>
                                            </div>
                                            <div class="col-sm-6 mb-3 mb-sm-0">
        <textarea class="form-control"  name="message" rows="10" cols="70" required placeholder="Write The Messages Here"><?=$result['content'];  ?>

         </textarea>
                                            </div>

                                        </div>

                                        <div class="mb-3">
                                            <button type="submit" name="update_Message" class="btn btn-info">Update Messages </button>
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