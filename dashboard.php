<?php
 include('connection.php');
 if (!isset($_COOKIE['email'])) {
     if (!isset($_SESSION['user'])) {
         echo "
                 <script>
                     window.location='login.php';
                 </script>
             ";
     }
 }

 if(isset($_POST['submit']))
   {
     $name=$_POST['userName'];
     $email=$_POST['userEmail'];
     $mobile=$_POST['userMobaile'];
     $address=$_POST['userAddress'];
     $path="img/Simg/".$filename;
     
     if (isset($_COOKIE['email'])) {
      $authEmail=$_COOKIE['email'];
       
     }
     else
    {
        $authEmail=$_SESSION['user']['emailid'];
    }


    //  $dir="upload/profile/";
    //  $path=$dir.$_FILES['myFile']['name'];

      $XYZ=" INSERT INTO mycontacts(userProfile,userName,userEmail,userMobaile,userAddress,authEmail,creata)
                      VALUES('$path','$name','$email','$mobile','$address','$authEmail',now())";

       if($connt->query($XYZ)) 
       {
        if (move_uploaded_file($tempname, $path))  {
          $msg = "Image uploaded successfully";
          $flag=8;
      }
      else{
          $msg = "Failed to upload image".$conn->error;
       echo'<script>
       alert("Account created succefully!!!!")
       window.location="dashboard.php";
       </script>';
      }
        
       }
       else
       {
         echo" ERROR!!!!".$connt->error;
       }
    }
  
?>
<!--
    ?> -->



<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("component/head.php ") ?>
</head>

<body>
  <?php include("component/header.php ") ?>
  <h2 class="text-center">Hello , <?php echo $_SESSION['user']['Sfullname'] ?></h2> 
  <div class="text-center">
 <button type="button" class=" btn mt-1 mb-2 btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Book slot</button>
  </div>
  <hr>


  <!-- ****************************************************************************************************************************************************************************** -->
                       <!-- modle ADD contact start -->
  <form  action="" method="POST" enctype="mutipart/form-data">
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">AddContact:-</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST" enctype="mutipart/form-data"  >
        <div class="mb-3">
            <label  class="col-form-label">Photo:-</label>
            <input type="file" class="form-control" name="userphoto" >
          </div>
          <div class="mb-3">
            <label class="col-form-label">Name:-</label>
            <input type="text" class="form-control" name="userName"   placeholder="name" required maxlength="20" minlength="5" >
          </div>
          <label  class="col-form-label">Emailid:</label><br>
          <div class="input-group mb-3">
              <input type="text" class="form-control" name="userEmail" placeholder="Recipient's username"  required maxlength="30" minlength="5" >
         <button class="btn btn-danger" type="button"  id="addEmail">+</button>
          </div>

          <div id="emailAll">
                
            </div>

          
          <label  class="col-form-label">MobaileNo:</label><br>
          <div class="input-group mb-3">
              <input type="text" class="form-control" name="userMobaile" placeholder="Recipient's username" required maxlength="20" minlength="5" >
         <button class="btn btn-success" type="button"   id="addMobaile">+</button>
          </div>

          <div id="mobileAll">
                
            </div>
          

          <div class="mb-3">
            <label  class="col-form-label">Vehical no:</label>
            <textarea type="text" class="form-control" name="userAddress" name="userAddress" required maxlength="20" minlength="5"></textarea>
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="reset" name="submit" class="btn btn-warning">Reset</button>
        <button type="submit" name="submit" class="btn btn-success">Add</button>
      </div>
    </div>
  </div>
</div>
</form>
<!-- ****************************************************************************************************************************************** -->

                                         <!-- model Contact ended -->
<div class="container align-items-center ">
<div class="row align-items-center ml-10 mt-3 ">

<?php
   if (isset($_COOKIE['email'])) {
    $authEmail=$_COOKIE['email'];
     # code...
   }
   else
  {
      $authEmail=$_SESSION['user']['emailid'];
  }
   $abc="SELECT * FROM mycontacts WHERE authemail='$authEmail'";
   $result=$connt->query($abc);

   if ($result->num_rows>0) 
   {
       while ($row=$result->fetch_assoc()) {
        echo
        '<div class="col-md-2 ">
        <div class="card h-50 w-100" >
            <div class="card-body d-flex flex-column align-items-center ">
            <h4><b>Name : </b>'.$row['userName'].'</h4>
            <p><b>Mobaile : </b>'.$row['userMobaile'].'</p>
            <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop'.$row['userid'].'">
      View
    </button>
    
    <!-- Modal 1 -->
    <div class="modal fade" id="staticBackdrop'.$row['userid'].'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel"><img class="inline " src="https://img.icons8.com/color/60/000000/business-contact.png"/><b>SLOT INFORMATION</b></h6>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <h3 class="mb-4"><b><img class="inline" src="https://img.icons8.com/fluency/48/000000/name.png"/>Name: </b>'.$row['userName'].'</h3>
          <p class="mb-4"><b><img class="inline" src="https://img.icons8.com/bubbles/48/000000/email--v1.png"/>Email :   </b><a class="text-decoration-none" href="mailto:">'.$row['userEmail'].'</a></p>
          <p class="mb-4" ><b><img class="inline" src="https://img.icons8.com/emoji/48/000000/mobile-phone.png"/>Mobaile : </b><a class="text-decoration-none" href="tel:">'.$row['userMobaile'].'</a></p>
          <p class="mb-4" ><b><img class="inline mr-2" src="https://img.icons8.com/emoji/48/000000/sport-utility-vehicle.png"/>Vehical no :   </b>'.$row['userAddress'].'</p>';
          if($row['updateta']!=null)
          {
             $date1=date_create($row['updateta']);
             echo "<i>Contact Updated on <b>".date_format($date,'d-M-y h:i A')."</b></i>";
          }
          $date=date_create($row['creata']);
          echo "<i>Contact Created on <b>".date_format($date,'d-M-y h:i A')."</b></i>";

          echo'</div>
          <div class="modal-footer">
             <button onclick="alertdelete()" type="button" class="btn btn-success" data-bs-dismiss="modal">Update</button>
            <a href="delete.php?q='.$row['userid'].'" ><button type="button" class="btn btn-primary">Delete</button></a>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>';
    
    
       }
       }
   else {
     echo'<h1 class="text-center">REsult Not FOund</h1>';
   }
?>

</div>
</div>

  <?php include("component/footer.php ") ?>

  <?php include("component/script.php ") ?>
  <!-- constum script -->
  <script >
    function alertdelete()
    {
      console.log("I am delete")
    }
  </script>

<
</body>

</html>