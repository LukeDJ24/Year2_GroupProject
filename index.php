<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT ID FROM logins WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         
         header("location: site/site.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cardiff University LC</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script> 
    <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styling.css" rel="stylesheet">
    <script src="js/script.js"></script>
    <link rel="shortcut icon" href="favicon.ico" /> 
   </head>
   
      <div align = "center">
         <div>
            <div><b>Cardiff University Login</b></div><br>
            <div>
               <form action = "" method = "post">
                  <label>UserName  :</label> <input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label> <input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
            </div>
         </div>
      </div>
   </body>
</html>