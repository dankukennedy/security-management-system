<?php 
include ('config/app.php'); 
$auth->isLoggedIn();

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="css/css1.css" rel="stylesheet" >
<!------ Include the above in your HEAD tag ---------->
<style>
  body{
    font-family: sans-serif;
  }
</style>


<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">DEFINT</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <hr> <?php  include('include/message.php'); ?>
                            
                            <div class="form-group">
                            <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i></span>
                                <input type="text" name="email" id="email" class="form-control" placeholder="Enter Your Email" required>
                            </div>
                            <div class="form-group">
                            <span class="input-group-addon"><i class="fa fa-key fa-fw" aria-hidden="true"></i></span>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password Here "required>
                            </div><br>
                            <div class="form-group">
                                <button type="submit" name="login" class="btn btn-success btn-md" value="submit"> Login Here</button><br>
                            </div>
                            <div class="form-group">
                              <br>
                            <div id="register-link" class="text-right">
                                <a href="<?php base_url('ad_register.php') ?>" class="text-info"><i style="color:orange ;"> Register here</i></a>
                            </div>
                            </div>
                            
                           
                            
                             <br><br>
                            
                           
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
