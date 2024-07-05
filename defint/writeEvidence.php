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
                           <h2 style="margin:20px; font-family: sans-serif; text-align:center; text-transform: uppercase;">Write Proof</h2>
                        </div>
                    <h3 style="color: green;">Evidence & Proof  </h3>
                    <hr />
                    <form class="user" action="codes/proof_code.php" enctype="multipart/form-data" method="POST">
                        <input type="hidden" class="form-control " value="<?=$data['email'];  ?>" name="email"  >

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control " name="title"
                                       id="evidence" placeholder="Enter Evidence Title" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control " name="post"
                                       id="post" placeholder="Enter Your Post" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="file" name="file" class="form-control"  />

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
                            <button type="submit" class="btn btn-primary btn-user "  id="report" name="save_proof">Send Evidence or Proof</button>
                        </div>

                    </form>
                </div>


            </div>
            <!-- /. ROW  -->

<?php
include('include/footer.php')
?>