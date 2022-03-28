<?php
require 'function.php';

$select = new Select();

if(!empty($_SESSION["id"])){
  $user = $select->selectUserById($_SESSION["id"]);
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
          background-image: url("5651988.jpg");
          color: aliceblue;
            justify-content: center;
            align-items: center;
            display: flex;
        }
      
    </style>

 
    
    
  </head>



  <body style="margin: 50px;">
  <div class="beauty">
     
    <h1>Personal Portfolio</h1>
   
      <tr><h2>Name :  <?php echo $user["name"]; ?></h2>
      </tr>
      <tr><h2><p>Gender :<?php echo $user["gender"]; ?></p></h2></tr>

      <tr><h2><p>Age :<?php echo $user["age"]; ?></p></h2></tr>

      <tr>
        <h2>Education :  <?php echo $user["Education"]; ?>
      </tr>

         
      <tr>
         <h2><p>HSLC_Mark :<?php echo $user["hslc_mark"]; ?></p></h2>
    </h2>
      </tr>

      <tr>
        <h2><p>SSLC_Mark :<?php echo $user["sslc_mark"]; ?></p></h2>
      </tr>

      <tr>
         <h2>CGPA :<?php echo $user["cgpa"]; ?></h2>
      </tr>

      <tr>
         <h2>Skills :<?php echo $user["skills"]; ?></h2>
      </tr>

      <tr>
         <h2>Projects :  <?php echo $user["projects"]; ?></h2>
      </tr>

      <tr>
        <h2><p>Languages :<?php echo $user["languages"]; ?></p></h2>
      </tr>








      <i class="fa fa-github" style="font-size:36px"></i><br><i class="fa fa-google-plus-official" style="font-size:36px"></i><br>
      <i class="fa fa-linkedin-square" style="font-size:36px"></i><br>


      <button><a href="logout.php">Logout</a></button>

   
    </div>
   
    
   

    
    
  </body>
</html>