<?php
 include('connection.php');
 if (!isset($_COOKIE['email'])) {
     if (!isset($_SESSION['user'])) {
         echo "
                 <script>
                     window.location='sinup.php';
                 </script>
             ";
     }
 }

     $id=$_GET['q'];
     if(isset($_GET['q']))
     {
        $vip="DELETE FROM mycontacts WHERE userid=$id";
        if($connt->query($vip)===TRUE)
        {
            echo'<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
    
            echo'<script>

           swal("DELETE successfully!!")
             .then((value) => {
             window.location="dashboard.php";
 
});
    </script>
    ';
    
        }
     }
     else {
         
     }
     
   ?>