<?php
     $server='localhost';
     $user='root';
     $pass='';
     $dbs='vehicalmanagement';

     $connt= new mysqli($server,$user,$pass,$dbs);

     if($connt->connect_error)
     {
         die(" <h1>404</h1> <h2>NOT FOUND</h2>".$connt->connect_error);
     }
    //  else
    //  {
    //      echo"<h1>Congratulation Viprant!!!!</h1> YOUR first <h2>DataBase</h2> Connection Is Successful";

    //  }
    session_start();

?>