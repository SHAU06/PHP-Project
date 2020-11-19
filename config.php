<?php 
$con=new mysqli("localhost","root","","fms");

if ($con->connect_error) 
{
	die("Database Connection fail".$con->connect_error);
}
  $msg = '';

// for Login 
if(isset($_POST['login']))
  {
    $username = $con->real_escape_string($_POST['username']);
    $password = $con->real_escape_string(md5($_POST['password']));
    $query = "SELECT * FROM admin WHERE username='$username' AND password = '$password'";
    $fire = mysqli_query($con,$query);
    if ($fire) 
    {
      if (mysqli_num_rows($fire)==1) 
      {
        session_start();
        $_SESSION['is_login'] = TRUE;
        $_SESSION['username'] = $username;
        // echo "Welcome".$_SESSION['username'];
        header("Location: dashboard.php");
      }
      else
      {
       $msg = "Fail..!! Invalid Username and Password";
        header("refresh:2; url=login-page.php");
      }
    }
  }
  // //For login

  // Storing folder in Uploaded files and putting data in database
  if(isset($_POST['uploadimg']))
      {
        $file_name = $_FILES['folder_name']['name'];
        $file_name = preg_replace("/\s+/","_", $file_name);
        $file_size = $_FILES['folder_name']['size'];
        $file_tempname = $_FILES['folder_name']['tmp_name'];
        $file_type = $_FILES['folder_name']['type'];
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        if (!empty($file_name)) 
        {
          if ($file_size <= 5000000)
          { 
            if ($file_ext == "zip" || $file_ext == "rar") 
            {
              $final_file = "Uploaded Files/".$file_name;
              $upload = move_uploaded_file($file_tempname, $final_file);
              if ($upload) 
              {
                $name = isset($_POST['name']);
                $mobile = isset($_POST['mobile']);
                $email = isset($_POST['email']);
                $folder_name = isset($_POST['final_file']);
                $msg = "<h1 class='text-center'><small class='text-success subtitle'>Yeah.. $file_name Uploaded Successfully.<br></small></h1><br><a class='btn btn-round btn-default' href='upload-folder.php'>Next Candidate</a>";
                $query = "INSERT INTO user(rollno,name,mobile,email,folder_name) VALUES ('$_POST[rollno]','$_POST[name]','$_POST[mobile]','$_POST[email]','$final_file')";
                $fire = mysqli_query($con,$query) or die("Cannot insert file path in database");
              }
            }else 
            {
              $msg = "<h1 class='text-center'><small class='text-danger subtitle'>Fail..!! Only zip, rar files are allowed to upload.<br></small></h1><br><a class='btn btn-round btn-default' href='upload-folder.php'>Upload Again</a>";
            }
          }else
          {
            $msg = "<h1 class='text-center'><small class='text-danger subtitle'>Fail..!! File size is too large. Ur file size : $file_size bytes<br></small></h1><br><a class='btn btn-round btn-default' href='upload-folder.php'>Upload Again</a>";
          }
        }else
        {
          $msg = "<h1 class='text-center'><small class='text-danger subtitle'>Fail..!! Please select a file to upload.<br></small></h1><br><a class='btn btn-round btn-default' href='upload-folder.php'>Upload Again</a>";
        }
      }
    // //Storing folder in Uploaded files and putting data in database
?>