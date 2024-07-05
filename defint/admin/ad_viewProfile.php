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
    img{
        overflow-clip-margin: content-box;
        overflow: clip;
        border: 2px solid black;
        border-radius:15px;
        height: 400px;
        width: 400px;
    }

    .file{
     margin-top:4px;
    }
 </style>
 
 

<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <div>
                        <h2 style="margin:20px; font-family: sans-serif; text-align:center; text-transform: uppercase;">View Profile </h2>
                       </div>   
                        <h3><strong>Defence Intellengence DSR</strong> </h3>
      
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <div>
                 <section class="bg-light">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mb-sm-5">
                <div class="card card-style1 border-0">
                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                        <div class="row align-items-center">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                            <?php 
                           
                            $id=$data['id'];
                            $image=$data['profile_img'];
                            ?>  <?php
                                   
                                    if(empty($image))
                                    {   ?>
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="..."><br>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <img src="../files/<?=$data['profile_img'] ?>" alt="..."><br>
                                        <?php 
                                    }   
                               ?>
                               
                               
                                <div class="file btn btn-lg btn-primary">
                                <form method="post" id="form" class="form" enctype="multipart/form-data">
                         
                                <input type="hidden" name="id" value=" <?php echo $id; ?> " />
                                <input type="hidden" name="name" value="<?php echo $name;  ?> "/>
                                <input type="file" id="image" name="image" accept=".jpg, .png, .jpeg"/>
                                <i class="fa fa-camera" style="color:#fff"></i>
                             </form>
                            </div>

                            <script type="text/javascript">
                                  document.getElementById("image").onchange=function(){
                                    document.getElementById('form').submit();
                                  }
                                    </script>
                                    <?php
                                    if(isset($_FILES['image']['name']))
                                    {
                                         // print_r($_FILES);
                                        $id=$_POST['id'];
                                        $name=$_POST['name'];


                                        $imageName=$_FILES['image']['name'];
                                        $imageSize=$_FILES['image']['size'];
                                        $tmpName=$_FILES['image']['tmp_name'];

                                        $validImageExtension=['jpg','jpeg','png'];
                                        $imageExtension=explode('.',$imageName);
                                        $imageExtension=strtolower(end($imageExtension));

                                        if(!in_array($imageExtension,$validImageExtension))
                                        {
                                          echo " <script>
                                          alert('invalid image Extension');
                                          document.location.href='ad_viewProfile.php';
                                          </script>";
                                        } 
                                        elseif($imageSize>1200000)
                                            {
                                                echo "  <script>
                                          alert('invalid image too Large');
                                          document.location.href='ad_viewProfile.php';
                                          </script>";
                                            }
                                             else
                                             {
                                                $newImageName=$imageName."-".date("Y.m.d")."-".date("h.i.sa");
                                                $newImageName.=".".$imageExtension;
                                                $managerUpdateQuery=" UPDATE admin SET profile_img='$newImageName'  WHERE id='$id' ";
                                                $result=$db->conn->query($managerUpdateQuery);
                                               
                                                 move_uploaded_file($tmpName,'../files/'.$newImageName);
                                                 echo "  <script>
                                                 alert('Profile Image Successfully Updated');
                                                 document.location.href='ad_viewProfile.php';
                                                 </script>";
                                                 if($result){
                                                    return true;
                                                }
                                             }

                                    }
                                 
                                    ?> 
                            </div>
                            <div class="col-lg-6 px-xl-10">
                                <div class="bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                    <h3 class="h2 text-white mb-0"><?=$data['fName'] ." ".$data['lName']." ".$data['otherName']; ?></h3>
                                    <span class="text-primary"><h3>Officer</h3></span>
                                </div>
                                <ul class="list-unstyled mb-1-9">
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600"><h4><strong>Position: </strong></span> <?=$data['rank'];  ?></li><span class="text-primary"><h3>Personal Details</h3></span></h4>
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600"><h4><strong>NIA: </strong></span> <?=$data['nia'];  ?></li></h4>
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600"><h4><strong>Email: </strong></span> <?=$data['email'];  ?></li></h4>
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600"><h4><strong>Region: </strong></span> <?=$data['region'];  ?></li></h4>
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600"><h4><strong>Sub Division: </strong></span> <?=$data['subDivision'];  ?></li></h4>
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600"><h4><strong>Gender: </strong></span> <?=$data['gender'];  ?></li></h4>
                                    <li class="display-28"><span class="display-26 text-secondary me-2 font-weight-600"><h4><strong>Phone: </strong></span><?=$data['number'];  ?></li></h4>
                                </ul>
                                <ul class="social-icon-style1 list-unstyled mb-0 ps-0">
                                    <li><a href="#!"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#!"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#!"><i class="ti-pinterest"></i></a></li>
                                    <li><a href="#!"><i class="ti-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mb-4 mb-sm-5">
                <div>
                    <span class="section-title text-primary mb-3 mb-sm-4"><h3>About Me<h3></span>
                    <p class="mb-0" style="color:black; font-weight:bold">  <?=$data['about'];  ?></p>
                </div>
            </div>
            
        </div>
    </div>
</section>
                 </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>



<?php   
include('include/footer.php')
?>