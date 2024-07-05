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
                    <div>
                        <h2 style="margin:20px; font-family: sans-serif; text-align:center; text-transform: uppercase;">View Message Page </h2>
                       </div>   
                        <h3><strong>Defence Intellengence DSR</strong> </h3>
  
                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
    <div class="row">


        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-body">


                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                            <div class="card">
                                <div class="boxs mail_listing">
                                    <div class="inbox-body no-pad">
                                        <section class="mail-list">
                                            <?php
                                            $message=new MessagesController;
                                            $result=$message->Index();
                                            if($result)
                                            {
                                                while ($row=$result->fetch_assoc())
                                                {

                                                    ?>

                                                    <?php
                                                    echo ' 
 <!-- Collapsable Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary">Subject:<br> '.$row['subject'] .' </h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" ">
                                    <div class="card-body">
                                       Message Body: <br> <form> <textarea  class="form-control"  name="comment" rows="5" cols="70">'.$row['content'] .' 

                                       </textarea></form>   <br> <strong style="color: seagreen">Created On:Time: '.$row['created_at'] .' </strong>
                                  <a href="ad_editMessage.php?id='. $row['id'] .' " class="btn btn-outline-info" >Edit Message </a> <i> <form action="codes/messages_code.php" method="POST">
                           <button type="submit" name="deleteMessage" value="'.$row['id'].' " class="btn btn-danger">Delete</button></i>
                           </form>  </div>
                                      
                      
                                </div>
                            </div>
                            

                                            ';

                                                }
                                                ?>
                                                <?php
                                            } else
                                            {
                                                echo " No Records Found ";
                                            }
                                            ?>

                                        </section>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </section>
        </div>
    </div>

    <!-- /. ROW  -->
            <hr />

<?php
include('include/footer.php')
?>