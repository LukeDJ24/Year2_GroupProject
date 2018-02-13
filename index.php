<?php
   include("config.php");
   session_start();
   
   	if($_SERVER["REQUEST_METHOD"] == "POST") 
   	{
		$myusername = mysqli_real_escape_string($db,$_POST['username']);
		$mypassword = mysqli_real_escape_string($db,$_POST['password']); 

		$sql = "SELECT ID FROM logins WHERE username = '$myusername' and password = '$mypassword'";
		$result = mysqli_query($db,$sql);
		$count = mysqli_num_rows($result);

		if($count == 1) 
		{
     		$_SESSION['login'] = "OK";
			$_SESSION['username'] = $myusername;
			header("location: site/site.php");
		}
	  	else 
	  	{
			echo("The username/password you entered is incorrect.");
	  	}
	}
?>
<html>
   
   <head>
     <meta charset="utf-8">
    <title>Cardiff University LC</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link href="css/styling.css" rel="stylesheet">
    <script src="js/script.js"></script>
    <link rel="shortcut icon" href="favicon.ico" /> 
   </head>
   
      <div align = "center">
         <div>
            <div><b>Cardiff University Login</b></div><br>
            <div>
               <form action = "" method = "post">
                  <label>Username  :</label> <input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label> <input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
            </div>
         </div>
      </div>
   </body>
</html>