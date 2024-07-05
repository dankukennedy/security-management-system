<?php 
include('config/app.php');

include_once('controllers/AuthenticationController.php');
$authenticated=new AuthenticationController;
$data = $authenticated->authUserDetail();
?>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">DEFINT</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <form action="" method="POST">
                        <?= $_SESSION['auth_user']['user_fname']." ".$_SESSION['auth_user']['user_lname']." "; ?>     <button type="submit" class="btn btn-danger square-btn-adjust" name="logout">Logout</button>

                        </form>  </div>



</nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="image/logo.jpeg" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="home.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a  href="settings.php"><i class="fa fa-cog fa-spin fa-3x fa-fw"></i> Settings</a>
                    </li>
                    <!--   <li>
                      <a  href="ui.html"><i class="fa fa-desktop fa-3x"></i> UI Elements</a>
                    </li>
                    <li>
                        <a  href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> Tabs & Panels</a>
                    </li>
						   <li  >
                        <a   href="chart.html"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>
                    </li>	
                      <li  >
                        <a  href="table.html"><i class="fa fa-table fa-3x"></i> Table Examples</a>
                    </li>
                    <li  >
                        <a  href="form.html"><i class="fa fa-edit fa-3x"></i> Forms </a>
                    </li>		-->		
					
					                   
                   <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Account<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="settings.php">Settings</a>
                            </li>
                            <li>
                            <a href="orders.php">Orders</a>
                                
                            </li>
                           <li>
                                <a href="profile.php">Profile<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="profile.php">Profile</a>
                                    </li>
                                    <li>
                                        <a href="updateProfile.php">Update Profile</a>
                                    </li>
                                    <li>
                                        <a href="changePassword.php">Change Password</a>
                                    </li>

                                </ul>
                               
                            </li>
                        </ul>
                      </li>  
                  	
                </ul>
               
            </div>

            <div>
            <?php
                $image=$data['profile_img'];             
                if(empty($image))
                { 
                   ?>
                  <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="..." class="user-image img-responsive">
                <?php
                    }
                    else
                    {
                        ?>
                        <img src="files/<?=$data['profile_img'] ?>" alt="..." class="user-image img-responsive"/>
                        <?php 
                    }   
                ?>
            <p style="color:white; text-align:center;"><a href="viewProfile.php"> User Profile Image</a></p>
            </div>
            
        </nav>  