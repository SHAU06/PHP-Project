<?php require "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="img/pc.png">
  <link rel="icon" type="image/png" href="img/pc.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Folder Manager &mdash; Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="css/dashboard.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="index.html" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="img/pc.png">
          </div>
        </a>
        <a href="index.html" class="simple-text logo-normal">
          Folder Manager
          <!-- <div class="logo-image-big">
            <img src="img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="./dashboard.php">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./folder_submited.php">
              <i class="nc-icon nc-tile-56"></i>
              <p>Folder Submited</p>
            </a>
          </li>
          <li>
            <a href="./admin.php">
              <i class="nc-icon nc-circle-10"></i>
              <p>Current Admins</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Folder Management System</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form action="search.php" method="POST">
              <div class="input-group no-border">
                <input type="text" onkeyup="myFunction()" id="search_input" class="form-control" placeholder="Search for name..">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-circle-10"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="admin.php">Admin Profile</a>
                  <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-lg">

  <canvas id="bigDashboardChart"></canvas>


</div> -->
      <div class="content">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-icon nc-circle-10 text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Admins</p>
                      <p class="card-title">
                      <?php $result=mysqli_query($con,"SELECT count(*) as total from admin");
                      $data=mysqli_fetch_assoc($result);
                      echo $data['total']; ?>
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-user-o"></i> In the last four Days
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-single-02 text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Total Students</p>
                      <p class="card-title">76
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-users"></i> CM Third Year
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-credit-card text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Submited By</p>
                      <p class="card-title">
                      <?php $result=mysqli_query($con,"SELECT count(*) as total from user");
                      $data=mysqli_fetch_assoc($result);
                      echo $data['total']; ?>
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-user-o"></i> In the last Day
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-single-02 text-danger"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Remaining</p>
                      <p class="card-title">
                        <?php 
                        $total = '76';
                        $submited = $data['total'];
                        $msg = $total - $submited;
                        echo $msg;

                         ?>
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-clock-o"></i>In the last Day
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Table -->
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Recently Folder Submited</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="table">
                    <thead class=" text-primary">
                      <th class="text-center">
                        Id
                      </th>
                      <th class="text-center">
                        Roll No.
                      </th>
                      <th class="text-center">
                        Name
                      </th>
                      <th class="text-center">
                        Mobile
                      </th>
                      <th class="text-center">
                        Email
                      </th>
                      <th class="text-center">
                        Folder Name
                      </th>
                    </thead>
                    <tbody>
                      <?php
                        $sql = "SELECT id, rollno, name, mobile, email, folder_name FROM user ORDER BY id DESC LIMIT 3 ";
                        $result = $con->query($sql);
                        if ($result->num_rows > 0) 
                        {
                            while ($row = $result->fetch_assoc()) 
                            {
                         
                            ?>
                      <tr>
                        <td class="text-center">
                         <?php  echo $row["id"]; ?>
                        </td>
                        <td class="text-center">
                          <?php  echo $row["rollno"]; ?>
                        </td>
                        <td class="text-center">
                         <?php  echo $row["name"]; ?>
                        </td>
                        <td class="text-center">
                          <?php  echo $row["mobile"]; ?>
                        </td>
                        <td class="text-center">
                          <?php  echo $row["email"]; ?>
                        </td>
                        <td class="text-center">
                          <?php  echo $row["folder_name"]; ?>
                        </td>
                      </tr>
                      <?php 
                          }    
                        }else
                            {
                                echo "0 results";
                            }
                        $con->close();
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li>
                  <a href="index.html">Home</a>
                </li>
                <li>
                  <a href="about-us.html">About Us</a>
                </li>
                <li>
                  <a href="upload-folder.php">Upload Folder</a>
                </li>
                <li>
                  <a href="login-page.php">Login</a>
                </li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
          </script>2020, Design With <i class="fa fa-heart heart" alt="love"></i> By <a href="https://gpnashik.ac.in" target="_blank"><u>GPN Students</u></a>. Coded by
          <a href="about-us.html"><u title="Purnima Chandan">Purnima</u><u title="Prajkta Deore"> Prajkta</u><u title="Shaurya Shete"> Shaurya</u><u title="Gaurav Borse"> Gaurav</u></a>.
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script>
    function myFunction() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("search_input");
      filter = input.value.toUpperCase();
      table = document.getElementById("table");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[2];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }       
      }
    }
  </script>
  <!--   Core JS Files   -->
  <script src="js/core/jquery.min.js"></script>
  <script src="js/core/popper.min.js"></script>
  <script src="js/core/bootstrap.min.js"></script>
  <script src="js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="js/dashboard.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>
