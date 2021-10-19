



<?php
    include('connection.php');
    
    session_unset();
    session_destroy();

    if (isset($_COOKIE['email'])) {
        setcookie('email','', time()-3600);

    }
    
    echo '<script>
    alert("Logout successfully")
    
        window.location="home.php"
   
</script>';
    
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
