<?php
  include('connection.php');
  if(isset($_POST['Submit']))
  {
    $name=$_POST['Fname'];
    $email=$_POST['Email'];
    $mobil=$_POST['mob'];
    $loc=$_POST['loc'];
    $pass=$_POST['passq'];
    $copass=$_POST['coPass'];
    $filename=$_FILES['uploadfile']['name'];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
     $path="img/Simg/".$filename;
  
 if ($pass==$copass)
  {
    // $encPass=md5($pass);
     $XYZ="INSERT INTO signup(Sprofile,Sfullname,Semail,Smob,Sloc,Spass,creata)
                   VALUE('$path','$name','$email','$mobil','$loc','$pass',now())";
      if ($connt->query($XYZ)) 
      {
        if (move_uploaded_file($tempname, $path))  {
          $msg = "Image uploaded successfully";
          
      }
      else{
          $msg = "Failed to upload image".$conn->error;
       echo'<script>
       alert("Account created succefully!!!!")
       window.location="login.php";
       </script>';
      }
      
   }
   else
      {
        echo" ERROR!!!!".$connt->error;
      }
 
  }
  else
 {
   echo 'pass is not correct';
 }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup page</title>
  <link href="style.css" rel="stylesheet"/>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
  
<div class="container">
        <div class="card">
            <h2 class="log">SignUp Here</h2>
            <form action="" method="POST" enctype="multipart/form-data" >
            <div class="inputBox">
            <input type="file" class="form-control" name="uploadfile">
            </div>
              <div class="inputBox">
                <input type="text" name="Fname" placeholder="FullName">
              </div>
              <div class="inputBox">
                <input type="email" name="Email" placeholder="example@gmail.com">
              </div>
              <div class="inputBox">
                <input type="tel" name="mob" placeholder="Mobaile no">
              </div>
              <div class="inputBox">
                <input type="text" name="loc" placeholder="location">
              </div>
              <div class="inputBox">
                <input type="password"  name="passq" placeholder="Password">
              </div>
              <div class="inputBox">
                <input type="password" name="coPass"  placeholder="Conform Password">
              </div>
              <div class="inputBox">
                  <button type="submit" name="Submit" class="btn">Submit</button>
                  <button type="reset" class="btn">Reset</button>
              </div>
              <p class=" underline forget">Already Registered with Us ?<a href="login.php">Click Here</a></p>
            </form>
          </div>        
        </div>
    </div>
   
</body>
</html>