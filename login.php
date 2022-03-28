<?php
require 'function.php';

if(!empty($_SESSION["id"])){
  header("Location: index.php");
}

$login = new Login();

if(isset($_POST["submit"])){
  $result = $login->login($_POST["usernameemail"], $_POST["password"]);

  if($result == 1){
    $_SESSION["login"] = true;
    $_SESSION["id"] = $login->idUser();
    header("Location: index.php");
  }
  elseif($result == 10){
    echo
    "<script> alert('Wrong Password'); </script>";
  }
  elseif($result == 100){
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <style>

body {
   
  
     display: flex; 
    justify-content: center;
    align-items: center;
    color: aliceblue;
    background: radial-gradient(#ff3399, #ffb366);
     height: 100vh;
    width: 100%;   
}
form {
            display: flex;
            width: 25rem;
            height: 28rem;
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
    <div class="attract">
    <h2>Login</h2>
    <form class="" action="" method="post" autocomplete="off">
      <label for="">Username or Email : </label><br>
      <input type="text" name="usernameemail" required value=""> <br>
      <label for="">Password:</label><br>
      <input type="password" name="password" required value=""> <br><br>
      <button type="submit" name="submit">Login</button>
       <button><a href="registration.php" >Registration</a><br></button>
    </form></div>
    <br>
   
  </body>
</html>
