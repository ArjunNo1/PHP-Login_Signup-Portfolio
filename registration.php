<?php
require 'function.php';

if(!empty($_SESSION["id"])){
  header("Location: index.php");
}

$register = new Register();

if(isset($_POST["submit"])){
  $result = $register->registration($_POST["name"], $_POST["username"], $_POST["email"], $_POST["password"], $_POST["confirmpassword"],$_POST['Education'],$_POST['projects'],$_POST['cgpa'],$_POST['skills'],$_POST['languages'],$_POST['age'],$_POST['gender'],$_POST['sslc_mark'],$_POST['hslc_mark']);

  if($result == 1){
    echo
    "<script> alert('Registration Successful'); </script>";
  }
  elseif($result == 10){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  elseif($result == 100){
    echo
    "<script> alert('Password Does Not Match'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <style>

body {
   
  
     display: flex; 
    justify-content: center;
    align-items: center;
    color: aliceblue;
    background: radial-gradient(#ff3399, #ffb366);
     
    width: 100%;   
}
form {
            display: flex;
            width: 25rem;
            height: auto;
            flex-direction: column;
            
            box-shadow: 0 8px 32px 0 rgba(31,38,135,.37);
            border-radius: 30px;
            flex-direction: column;
            border-left: 1px solid rgba(255,255,255,.3);
        }
        h2 {
            text-align: center;
            font-size: 40px;
            color: whitesmoke;
            margin-bottom: 5%;
            letter-spacing: 2px;
        }

a {
    margin-top: 135px;
    /* margin-left: auto; */
    color: black;
}
label {
          font-size: 20px;
          color: white;
         margin-left: 10%;
         opacity: .8;
         text-shadow: 2px 2px 4px rgba(0, 0,0, .2);
      }
      input {
          width: 70%;
          margin: 5% auto;
          margin-bottom: 8%;
          border: none;
          outline:auto;
        
          background: transparent;
          color: white;
          border-bottom: 1px solid rgba(255, 255, 255, 0,6);
          opacity: .8;
      }
      button {
            width: 50%;
            margin: 3% auto;
            /* color: white; */
            font-size: 15px;
            opacity: .7;
            background: rgba(255, 255, 255, 06);
            padding: 10px 20px;
        }
   
        


</style>
    
  </head>
  <body>
    
    <div class="register">
    <form class="" action="" method="post" autocomplete="off">
      <h2>Registration</h2>
      <label for="">Name : </label><br>
      <input type="text" name="name" required value=""> <br><br>

      <label for="">Username : </label><br>
      <input type="text" name="username" required value=""> <br><br>

      <label for="">Age : </label><br>
      <input type="text" name="age" required value=""> <br><br>

      <label for="">Gender : </label><br>
      <input type="text" name="gender" required value=""> <br><br>

      <label for="">SSLC Mark : </label><br>
      <input type="text" name="sslc_mark" required value=""> <br><br>

      <label for="">HSLC Mark : </label><br>
      <input type="text" name="hslc_mark" required value=""> <br><br>



      
      <label for="">Email : </label><br>
      <input type="email" name="email" required value=""> <br><br>
      <label for="">Password : </label><br>
      <input type="password" name="password" required value=""> <br><br>
      <label for="">Confirm Password : </label><br>
      <input type="password" name="confirmpassword" required value=""> <br><br>
      <label for="">Education :</label><br>
      <textarea name="Education" id="" cols="30" rows="10"></textarea><br><br>
      <label for="">Projects :</label><br>
     <textarea name="projects" id="" cols="30" rows="10"></textarea><br><br>
      <label for="">CGPA : </label><br>
      <input type="text" name="cgpa" required value=""> <br><br>
      <label for="">Skills :</label><br>
      <textarea name="skills" id="" cols="30" rows="10"></textarea><br><br>
      <label for="">Languages Known :</label><br>
      <textarea name="languages" id="" cols="30" rows="10"></textarea><br><br>
      <button type="submit" name="submit">Register</button>
      <button><a href="login.php">Login</a></button>
    </form></div>
    <br> 
    
  </body>
</html>
