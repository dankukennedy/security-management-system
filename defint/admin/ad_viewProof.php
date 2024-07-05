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
            <h3><strong>Defence Intelligence DSR</strong></h3>
    
        <h5 > <i style="color:green; font:200"><?php  include('include/message.php'); ?></i></h5>
        <div class="card">
            <div class="card-header">
                <h5 style="color:white ;">View Reports</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Post</th>
                            <th>Description</th>
                            <th>Comments</th>
                            <th>File to Prove</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Edit</th>
                            <th>Deleted</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i=1;
                        $proof=new ProofController;
                        $result=$proof->Index();
                        if($result)
                        {
                            foreach($result as $row )
                            {

                                ?>
                                <tr>
                                <tr id="<?= $i++ ?>">
                                    <td><?php echo $i++; ?></td>
                                    <td><?= $row['title'] ?></td>
                                    <td><?= $row['post'] ?></td>
                                    <td><?= $row['description'] ?></td>
                                    <td><?= $row['comment'] ?></td>
                                    <td><img src="../files/<?= $row['file_url'] ?> "></td>
                                    <td><?= $row['email'] ?></td>
                                    <td><?= $row['created_at'] ?></td>

                                    <td>
                                        <a href="ad_editProof.php?id=<?= $row['id'] ?>" class="btn btn-success">Edit</a></td>
                                    <td>
                                        <form action="codes/proof_code.php" method="POST">
                                            <button type="submit" name="delete_proof" value="<?= $row['id'] ?>" class="btn btn-danger">Delete</button>
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



        </div>
    </div>



<?php
include('include/footer.php')
?>