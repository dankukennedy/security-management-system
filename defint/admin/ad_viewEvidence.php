
<?php
include_once('controllers/ProofController.php');
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
                          <h2 style="margin:20px; font-family: sans-serif; text-align:center; text-transform: uppercase;">View Evidence</h2>
                       </div>
                       <h3><strong>Defence Intellengence DSR</strong> </h3>
 
                    </div>
                </div>
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">

                <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                       <th>#</th> 
                       <th>Title</th>
                       <th>Post</th>
                       <th>Description</th>
                       <th>Comments</th>
                       <th>File</th>
                       <th>Evidence Provider</th>
                       <th>Edit</th>
                       <th>Deleted</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $i=1;
                    $proof=new ProofController;
                    $email = $data['email'];
                    $result=$proof->Index($email);
                    if($result)
                    {
                        foreach($result as $row )
                        {

                            ?>

                             <tr>
                       <td><?= $i++ ?></td>
                        <td><?= $row['title'] ?></td>
                        <td><?= $row['post'] ?></td>
                        <td><?= $row['description'] ?></td>                          
                        <td> <?= $row['comment'] ?></td>                   
                        <td>
                        <a style="border-radius:10px" href="../files/<?= $row['file_url'] ?>" download> 
                        <img style="border-radius:10px;" src="../files/<?= $row['file_url'] ?>" width="130" height="90"/> <i class="fa fa-download" style="font-size:20px;color:green"></i>
                        </a></td>
                        <td> <?= $row['email'] ?></td>
                        <td>
                                        <a href="ad_editProof.php?id=<?= $row['id'] ?>" class="btn btn-success">Edit</a></td>
                                    <td>
                                        <form action="codes/proof_code.php" method="POST">
                                            <button type="submit" name="deleteProof" value="<?= $row['id'] ?>" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                        
                    </tr>
                                <?php 
                        }

                     } else
                       { 
                        echo " No Records Found ";
                       }
                     ?>
                   
                </tbody>
            </table>
          </div>
        </div>

<?php
include('include/footer.php')
?>