<?php
include('connection.php');

$flag=0;

if (isset($_POST['login'])) {

  $email=$_POST['email'];
  $paso=$_POST['passss'];

  $ABC="SELECT * FROM signup WHERE Semail='$email'";
  $result=$connt->query($ABC);

  if($result->num_rows>0)
  {
    while ($row=$result->fetch_assoc()) {
     
     if($row['Spass']==$paso)
     {
           $flag=1;
           $_SESSION['user']=$row;

        if(!empty($_POST['checkme']))
        {
          setcookie('email', $row['Semail'],time()+(86400*30));
        }
     }
     else{
      echo" Password is wrong!!";
     }
    }
  }
  else {
    echo"You r Not regiredwith US";
  }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link href="style.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
    if ($flag == 1) {
        echo '<script>
            swal("Logged in successfully")
            .then((value) => {
                window.location="dashboard.php"
            });
        </script>';
    } else if ($flag == 2) {
        echo
        '<script>
                swal("Something went wrong! Try after sometime.")
            </script>';
    } else if ($flag == 3) {
        echo
        '<script>
                swal("This email is not registered with us.")
            </script>';
    }
    ?>
  <form action="" method="POST" >
<div class="container">
        <div class="card">
            <h2 class="log">Login Form</h2>
            <form action="#">
              <div class="inputBox">
                <input type="text" name="email" placeholder="Username@gmail.com">
              </div>
              <div class="inputBox">
                <input name="passss" type="password"  placeholder="Password">
              </div>

              <div >
                <input class="m" type="checkbox" name="checkme">
                <label>
                  remember me
                </label>
              </div>
              <div class="inputBox">
                  <button type="submit" name="login" class="btn">Login</button>
                  <button type="reset" class="btn">Reset</button>
              </div>
              <p class=" underline forget">Not Registered with Us SignUp ?<a href="signup.php">Click Here</a></p>
            </form>
          </div>        
        </div>
    </div>
    </form>
</body>
</html>