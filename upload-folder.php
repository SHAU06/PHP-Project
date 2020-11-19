<?php require "config.php";  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="img/pc.png">
  <link rel="icon" type="image/png" href="img/pc.png">  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Folder Manager &mdash; Upload Folder</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width" />
    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
    <link href="bootstrap3/css/font-awesome.css" rel="stylesheet" />
    <link href="css/gsdk.css" rel="stylesheet" />   
    <link href="css/demo.css" rel="stylesheet" /> 
    <!--Font Awesome-->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
</head>

<body>
 <div id="navbar-full">
    <div class="container">
        <nav class="navbar navbar-ct-orange navbar-transparent navbar-fixed-top" role="navigation">
          
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.html">
                     <div class="logo-container">
                        <div class="brand">
                          <i class="fa fa-folder" aria-hidden="true"></i>
                            Folder Management System
                        </div>
                    </div>
                </a>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about-us.html">ABOUT US</a></li>
                    <li><a href="upload-folder.php">UPLOAD FOLDER</a></li> 
                    <li><a href="login-page.php" class="btn btn-round btn-default">LOGIN</a></li>
               </ul>
              
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </div><!--  end container-->
    
    <div class='blurred-container'>
        <div class="motto">
            <div>Upload</div>  
            <div class="border no-right-border">U</div><div class="border">R</div>
            <div>Folder</div>
        </div>
        <div class="img-src" style="background-image: url('img/study-1.jpg')"></div>
        <div class='img-src blur' style="background-image: url('img/study-1_blur.jpg')"></div>
    </div>
    
</div>  

<div class="main">
    <div class="container tim-container" style="max-width:800px; padding-top:100px">
       <h1 class="text-center"><label class="subtitle">Upload Your Folder Here !!</label><small class="subtitle">Fill Following Details</small></h1>
       <center>
      <form action="#" method="POST" enctype="Multipart/form-data" autocomplete="off">
      <input type="number" name="rollno" placeholder="Roll No." class="btn btn-round btn-default" required ><br><br>
      <input type="text" name="name" placeholder="Name" class="btn btn-round btn-default" required ><br><br>
      <input type="number" name="mobile" placeholder="Mobile No." class="btn btn-round btn-default" required ><br><br>
      <input type="email" placeholder="Email" name="email" class="btn btn-round btn-default" required  ><br><br>
      <input type="file" name="folder_name" class="btn btn-round btn-default"><br><br>
      <input type="submit"name="uploadimg" class="btn btn-round btn-default">
      </form>
      <?php 
          // include 'config.php'; 
          echo $msg;
      ?>
      </center>
           <!--     end extras -->        
    </div>
    <div class="space"></div>
<!-- end container -->
</div>
<!-- end main -->
<div class="footer">
    <div class="overlayer">
    <div class="container">
        <div class="row">
            <div class="credits">
                &copy; 
                <script>document.write(new Date().getFullYear())</script>2020, Design With <i class="fa fa-heart heart" alt="love"></i> By <a href="https://gpnashik.ac.in" target="_blank"><u>GPN Students</u></a>. Coded by
          <a href="about-us.html"><u title="Purnima Chandan">Purnima</u><u title="Prajkta Deore"> Prajkta</u><u title="Shaurya Shete"> Shaurya</u><u title="Gaurav Borse"> Gaurav</u></a>.
            </div>
        </div>
    </div>
    </div>
</div>
</body>

    <script src="jquery/jquery-1.10.2.js" type="text/javascript"></script>
  <script src="js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>

  <script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>
  <script src="js/gsdk-checkbox.js"></script>
  <script src="js/gsdk-radio.js"></script>
  <script src="js/gsdk-bootstrapswitch.js"></script>
  <script src="js/get-shit-done.js"></script>
  
    <script src="js/custom.js"></script>

</html>