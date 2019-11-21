<?php
$conn = mysqli_connect("localhost", "root", "", "jobbillboard");
$a = mysqli_query($conn, "SELECT*FROM user WHERE status LIKE '%admin%' ");
$b = mysqli_query($conn, "SELECT*FROM user WHERE status LIKE '%student%' ");
$c = mysqli_query($conn, "SELECT*FROM user WHERE status LIKE '%lecturer%' ");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome to JobBillboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->


    <!-- tambahan -->
  </head>


  <body>

      <div id="home" style="height: 150px; background-image: url('images/logo.jpg'); background-size: contain; filter: brightness(50%); padding: 50px 0px">
        <div class="container-fluid">	
          <marquee>
            <h1 class="text-white">Hello! Welcome to JobBillboard</h1>
          </marquee>
        </div>
      </div>
      
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top" style="">

          <div class="col-xs-4 col-md-4 col-sm-4" style="margin-left: 1080px;">
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
              <!-- Notifications-->
              <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell-o"></i><span class="badge bg-red badge-corner">12</span></a>
                <ul aria-labelledby="notifications" class="dropdown-menu">
                  <li><a rel="nofollow" href="#" class="dropdown-item"> 
                      <div class="notification">
                        <div class="notification-content"><i class="fa fa-envelope bg-green"></i>You have 6 new messages </div>
                        <div class="notification-time"><small>4 minutes ago</small></div>
                      </div></a></li>
                  <li><a rel="nofollow" href="#" class="dropdown-item"> 
                      <div class="notification">
                        <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                        <div class="notification-time"><small>4 minutes ago</small></div>
                      </div></a></li>
                  <li><a rel="nofollow" href="#" class="dropdown-item"> 
                      <div class="notification">
                        <div class="notification-content"><i class="fa fa-upload bg-orange"></i>Server Rebooted</div>
                        <div class="notification-time"><small>4 minutes ago</small></div>
                      </div></a></li>
                  <li><a rel="nofollow" href="#" class="dropdown-item"> 
                      <div class="notification">
                        <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                        <div class="notification-time"><small>10 minutes ago</small></div>
                      </div></a></li>
                  <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>view all notifications                                            </strong></a></li>
                </ul>
              </li>


              <!-- Messages -->
              <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope-o"></i><span class="badge bg-orange badge-corner">10</span></a>
                <ul aria-labelledby="notifications" class="dropdown-menu">
                  <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                      <div class="msg-profile"> <img src="images/profil.jpg" alt="..." class="img-fluid rounded-circle"></div>
                      <div class="msg-body">
                        <h3 class="h5">Budi</h3><span>Sent You Message</span>
                      </div></a></li>
                  <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                      <div class="msg-profile"> <img src="images/profil3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                      <div class="msg-body">
                        <h3 class="h5">Abdul</h3><span>Sent You Message</span>
                      </div></a></li>
                  <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                      <div class="msg-profile"> <img src="images/profil2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                      <div class="msg-body">
                        <h3 class="h5">Lathifah</h3><span>Sent You Message</span>
                      </div></a></li>
                  <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages   </strong></a></li>
                </ul>
              </li>
             
              <li class="nav-item" style="margin-right: 15px">&ensp;</li>
              <li class="nav-item dropdown" style="margin-right: 15px">
              <a class="btn btn-success dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">SYF</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="images/project8.png" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">SYF</h1>
              <p>Admin JobBillboard</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
            <li><a href="admin.php"> <i class="icon-home"></i>Home </a></li>
            <li class="active"><a href="user.php"> <i class="icon-grid"></i>Account Manager</a></li>
            <li><a href="todo.php"> <i class="icon-padnote"></i>To do List </a></li>
            <li><a href="posting.php"> <i class="icon-check"></i>Create a Post</a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Post Monitoring </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="#">All Post</a></li>
                <li><a href="#">Deleted Post</a></li>
                <li><a href="#">Post Request</a></li>
                <li><a href="#">Draft</a></li>
              </ul>
            </li>
            
        </nav>

        <?php
        while ($select = mysqli_fetch_assoc($a)){ ?>
        <div class="content-inner">
          <!-- Page Header-->
         <!-- Breadcrumb-->
         <div class="breadcrumb-holder container-fluid">
           <br>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Account Manager</li>
            </ul>
          </div>
          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6">
                  <div class="card" style="width:900px">
                      <div class="card-close">
                          <div class="dropdown">
                            <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                            <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                          </div>
                      </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Admin Account</h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive" >
                        <table class="table">
                            <tr>
                              <th>ID</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Username</th>
                              <th>Email</th>
                            </tr>
                            <?php
                            foreach($a as $data){
                            ?>
                            <tr>
                              <th scope="row"><?= $data["id"] ?></th>
                              <td><?= $data["fname"] ?></td>
                              <td><?= $data["lname"] ?></td>
                              <td><?= $data["username"] ?></td>
                              <td><?= $data["email"] ?></td>
                            </tr>
                            <?php }?>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
  

                <div class="container-fluid">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="card" style="width:900px">
                            <div class="card-close">
                                <div class="dropdown">
                                  <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                  <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                </div>
                            </div>
                          <div class="card-header d-flex align-items-center">
                            <h3 class="h4">Student Account</h3>
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                            <table class="table">
                            <tr>
                              <th>ID</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Username</th>
                              <th>Email</th>
                            </tr>
                            <?php
                            foreach($b as $data){
                            ?>
                            <tr>
                              <th scope="row"><?= $data["id"] ?></th>
                              <td><?= $data["fname"] ?></td>
                              <td><?= $data["lname"] ?></td>
                              <td><?= $data["username"] ?></td>
                              <td><?= $data["email"] ?></td>
                            </tr>
                            <?php }?>
                        </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>
                      </div>
                     
         
                      
                      <div class="container-fluid">
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="card" style="width:900px">
                                  <div class="card-close">
                                      <div class="dropdown">
                                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                      </div>
                                  </div>
                                <div class="card-header d-flex align-items-center">
                                  <h3 class="h4">Lecturer Account</h3>
                                </div>
                                <div class="card-body">
                                  <div class="table-responsive">
                                  <table class="table">
                            <tr>
                              <th>ID</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Username</th>
                              <th>Email</th>
                            </tr>
                            <?php
                            foreach($c as $data){
                            ?>
                            <tr>
                              <th scope="row"><?= $data["id"] ?></th>
                              <td><?= $data["fname"] ?></td>
                              <td><?= $data["lname"] ?></td>
                              <td><?= $data["username"] ?></td>
                              <td><?= $data["email"] ?></td>
                            </tr>
                            <?php }?>
                        </table>
                                  </div>
                                </div>
                              </div>
                            </div>

              </div>
            </div>
          </section>
          </div>
          </div>
          <?php }?>
  <!-- Footer -->

	<footer style="background-color: #f9dc24">
      <div class="container-fluid text-center text-md-left">
        <div class="row bg-dark" style="height: 250px">
          <div class="col-md-4">
            <div class="container">
              <h5 class="my-4 text-white">JobBillboard</h5>
              <h5 class="text-warning">About Us</h5>
              <p class="text-white">JobBillboard adalah sebuah website dan aplikasi Job Listing yang memudahkan user dalam mencari lowongan pekerjaan atau projek sekitar Telkom Unversity</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="container py-5 my-4">
              <h5 class="text-warning">Contact Us</h5>
              <p class="text-white"><i class="fa fa-phone mr-md-3"></i>+62 22-1234567</p>
              <p class="text-white"><i class="fa fa-envelope mr-md-3"></i>kelompok15@JobBillboard.com</a></p>
              <a href="#"><i class="fa fa-facebook fa-2x text-white mr-md-5"></i></a>
              <a href="#"><i class="fa fa-google-plus fa-2x text-white mr-md-5"></i></a>
              <a href="#"><i class="fa fa-twitter fa-2x text-white mr-md-5"></i></a>
              <a href="#"><i class="fa fa-youtube fa-2x text-white mr-md-5"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="container py-5 my-4">
              <h5 class="text-warning">Address</h5>
              <p class="text-white"> <i class="fa fa-map-marker mr-md-3"></i>Jl. Telekomunikasi Jl. Terusan Buah Batu, Sukapura Bandung, Jawa Barat - 40257</p>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-copyright text-center py-3">&copy;JobBillboard. All Rights Reserved</div>
    </footer>

    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>