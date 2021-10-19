<?php
   include('connection.php');
    $flag=2;
   
   if(isset($_POST['Csubmit']))
   {
     $name=$_POST['Name'];
     $email=$_POST['Email'];
     $massage=$_POST['Message'];

    $XYZ="INSERT INTO contactus(Cname,Cmail,Cmassage,Ccreata)
                 VALUE('$name','$email','$massage',now())";
       if ($connt->query($XYZ)) 
       {
        echo'<script>
        alert(" Massage submited succefully!!!!")
        .then((value) => {
     window.location="index.php";
    });
        </script>';
       }
       else
       {
         echo" ERROR!!!!".$connt->error;
       }
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    include('component/head.php')
    ?>
</head>
<body>
<?php include("component/header.php ") ?>
<form action="" method="POST" enctype="multipart/form-data" >
<div class="container">
<section class="text-gray-600  rounded body-font relative">
  <div class="absolute inset-0 bg-gray-300">
    <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3722.0079232382977!2d79.0726070494326!3d21.112250290232193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4bf7b2d5ac2c3%3A0x8e599d92190fcbf6!2sGajanan%20Nagar%2C%20Nagpur%2C%20Maharashtra%20440015!5e0!3m2!1sen!2sin!4v1632559231867!5m2!1sen!2sin" <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3722.0079232382977!2d79.0726070494326!3d21.112250290232193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4bf7b2d5ac2c3%3A0x8e599d92190fcbf6!2sGajanan%20Nagar%2C%20Nagpur%2C%20Maharashtra%20440015!5e0!3m2!1sen!2sin!4v1632559231867!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>
  <div class="container px-5 py-24 mx-auto flex">
    <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
      <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">ContactUS</h2>
      <p class="leading-relaxed mb-3 text-gray-600">Our team is contact Us as soon as possible</p>
      <div class="relative mb-2">
        <label class="leading-7 text-sm text-gray-600">Name</label>
        <input type="text" id="email" name="Name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-2">
        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
        <input type="email" id="email" name="Email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-2">
        <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
        <textarea id="message" name="Message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
      </div>
      <button name="Csubmit" class="text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit</button>
      
      <h3 class="text-xl inline  mt-3"><b>OR</b><a href="mailto:" ><img class="" src="https://img.icons8.com/color/48/000000/gmail-new.png"/> ContactApp@gmail.com</a></h3>
    </div>
  </div>
</section>
</div>

</form>



<?php include("component/footer.php ") ?>

<?php include("component/script.php ") ?>
</body>
</html>