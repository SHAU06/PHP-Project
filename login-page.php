<?php require "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="img/pc.png">
  <link rel="icon" type="image/png" href="img/pc.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Folder Manager &mdash; Login 
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/login-page.css?v=1.3.0" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="index.html" rel="tooltip" title="Designed by GPN Students. Coded by P P S G" data-placement="bottom" target="_blank">
          <i class="fa fa-folder" aria-hidden="true"></i>
           Folder Management System
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="img/blurred-image-1.jpg" style="font-size: 1.20571em; letter-spacing: 1px;">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about-us.html">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="upload-folder.php">Upload Folder</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login-page.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="#" target="_blank">
              <i class="fab fa-twitter"></i>
              <p class="d-lg-none d-xl-none">Twitter</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="#" target="_blank">
              <i class="fab fa-facebook-square"></i>
              <p class="d-lg-none d-xl-none">Facebook</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="#" target="_blank">
              <i class="fab fa-instagram"></i>
              <p class="d-lg-none d-xl-none">Instagram</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="page-header clear-filter" filter-color="">
    <div class="page-header-image" style="background-image:url(img/study-2.jpg)"></div>
    <div class="content">
      <div class="container">
        <div class="col-md-4 ml-auto mr-auto">
          <div class="card card-login card-plain">
            <!-- form tag -->
            <form class="form" method="POST" action="#" autocomplete="off">
              <div class="card-header text-center">
                <div class="navbar-translate">
                  <br>
                  <!-- <a class="navbar-brand" href="">Login</a> -->
                  <!-- <img src="img/plane.png" alt=""> -->
                </div>
              </div>
              <div class="card-body">
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons users_circle-08"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" required name="username" placeholder="Username...">
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons text_caps-small"></i>
                    </span>
                  </div>
                  <input type="password" placeholder="Password..." name="password" required class="form-control" />
                </div>
              </div>
              <div class="card-footer text-center">
                <input type="submit" name="login" class="btn btn-primary btn-round btn-lg btn-block"></input>
                <!-- <a type="submit" name="login" class="btn btn-primary btn-round btn-lg btn-block">Login</a> -->
                <div class="pull-left">
                  <h6>
                    <a href="#" class="link">Forgotten Password</a>
                  </h6>
                </div>
                <div class="pull-right">
                  <h6>
                    <a href="#" class="link">Need Help?</a>
                  </h6>
                </div>
                <!-- </div> New Footer--> 
            </form>
            <!-- //from tag -->
            </div>
          </div>
        </div>
       <h5 class="text-danger"> 
        <?php 
        // echo md5("pratipurni");
        echo $msg; ?> </h5>
      </div>
    </div>
    
    <footer class="footer">
      <div class=" container ">
        <nav>
          <ul>
            <li>
              <a href="index.html">
                Home
              </a>
            </li>
            <li>
              <a href="about-us.html">
                About Us
              </a>
            </li>
            <li>
              <a href="upload-folder.php">
                Upload Folder
              </a>
            </li>
            <li>
              <a href="login-page.php">
                Login
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>, Design With <i class="fa fa-heart heart" alt="love"></i> By <a href="https://gpnashik.ac.in" target="_blank"><u>GPN Students</u></a>. Coded by
          <a href="about-us.html"><u title="Purnima Chandan">Purnima</u><u title="Prajkta Deore"> Prajkta</u><u title="Shaurya Shete"> Shaurya</u><u title="Gaurav Borse"> Gaurav</u></a>.
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="js/core/jquery.min.js" type="text/javascript"></script>
  <script src="js/core/popper.min.js" type="text/javascript"></script>
  <script src="js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
</body>

</html>