<!-- <?php
$conn = mysqli_connect("localhost", "root", "", "jobbillboard");
$result = mysqli_query($conn, "SELECT*FROM post WHERE kategori LIKE '%Project1%' ");
$result2 = mysqli_query($conn, "SELECT*FROM post WHERE kategori LIKE '%Project2%' ");
$a = mysqli_query($conn, "SELECT*FROM post WHERE kategori LIKE '%Asisten1%' ");
$b = mysqli_query($conn, "SELECT*FROM post WHERE kategori LIKE '%Asisten2%' ");
$c = mysqli_query($conn, "SELECT*FROM post WHERE kategori LIKE '%Tutor%' ");
$result4 = mysqli_query($conn, "SELECT*FROM post WHERE kategori LIKE '%Trending%' ");
?> -->

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

  </head>


  <body>
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top" style="">

          <div class="col-xs-4 col-md-4 col-sm-4">
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
      
        <div class="content-inner">

        HEHEEHEH    
        </div>

      <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
            <li class="active"><a href="admin.php"> <i class="icon-home"></i>Home </a></li>
            <li><a href="user.php"> <i class="icon-grid"></i>Account Manager</a></li>
            <li><a href="todo.php"> <i class="icon-padnote"></i>To do List </a></li>
            <li><a href="posting.php"> <i class="icon-check"></i>Create a Post</a></li>
          </ul>
        </nav>

</div>
  


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