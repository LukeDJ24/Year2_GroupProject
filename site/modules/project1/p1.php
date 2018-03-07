<!DOCTYPE html>
<?php
  session_start();
  if($_SESSION['login'] != "OK") 
  {
    header('Location: ../../../index.php');
    exit();
  }
?> 
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Cardiff University LC</title>
    
   <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link href="../../../css/styling.css" rel="stylesheet">
    <script src="../../../js/script.js"></script>
    <link rel="shortcut icon" href="../../../favicon.ico" />
  </head>

  <body>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="site.php"><img src="../images/lclogo.png" alt="learning central logo" width="200px" height="30px"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="site.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../../logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">

      <h1 class="mt-4 mb-3">Cardiff University
        <small>Learning Central</small>
      </h1>

    </div>

    <div id="live-chat"> <!-- Start chat bot integration -->
      <button id="tutor-collapse" type="button" class="btn btn-info collapsed" data-toggle="collapse" data-target="#bot">TutorBot</button>
      <div id="bot" class="collapse">
        <iframe
            width="300"
            height="400"
            src="https://console.dialogflow.com/api-client/demo/embedded/2df684ab-3175-4cd8-9bd4-d0f6ecfa5bac">
        </iframe>
      </div>
    </div> <!-- end live-chat integration -->

    <!-- cardiff footer -->
    </div>
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Learning Central - Cardiff University - 2018</p>
      </div>
    </footer>
    
  </body>

</html>
