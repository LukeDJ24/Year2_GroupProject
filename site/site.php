<!DOCTYPE html>
<?php
  session_start();
  if($_SESSION['login'] != "OK") 
  {
    header('Location: ../index.php');
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

    <link href="../css/styling.css" rel="stylesheet">
    <script src="../js/script.js"></script>
    <link rel="shortcut icon" href="../favicon.ico" />
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
              <a class="nav-link" href="../logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">

      <h1 class="mt-4 mb-3">Cardiff University
        <small>Learning Central</small>
      </h1>

      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Announcements</a>
              </h4>
              <p class="card-text">
                > CM2303 Coursework Information - "Hello all, I have some information about..."
                <br> >  CM2203 Guest Lecture - "Hello all, I have some information about..."
                <br> > CM2303 Coursework Information - "Hello all, I have some information about..."
                <br> >  CM2203 Guest Lecture - "Hello all, I have some information about..."
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://www.validatum.com/media/images/Algorithm.png" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">CM2303 - Algorithms and Data Structures</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="https://www.extremetech.com/wp-content/uploads/2015/09/quantum-dots-head.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">CM2203 - Informatics</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://www.engineersjournal.ie/wp-content/uploads/2013/10/Netework.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">CM2302 - Networks and Pervasive Computing</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="https://i.ytimg.com/vi/FKs7DND1kkg/maxresdefault.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">CM2105 - Data Processing and Visualisation</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="https://lifeboat.com/blog.images/technology-becomes-us-the-age-of-human-computer-interaction.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">CM2101 - Human Computer Interaction</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo, voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo, esse.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="https://gs-post-images.grdp.co/img1453964930134-90.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">CM2207 - Intro to Theory of Computation</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://www.washington.edu/news/files/2017/09/group-work-photo.jpg" alt=""></a>
              <div class="card-body">
              <h4 class="card-title">
                <a href="#">CM2305 - Group Project</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
            </div>
        </div>
      </div>

  <div class="modal-overlay"> </div>

  <div class="modal">
    <header>
      <h2>Personal Tutor Chatbot</h2>
    </header>
    <section>
        <p>Hello I am your personal tutor chatbot!
          <br><br>if you would like to utilise my capabilities, 
        then please accept the terms and conditions.
        <br> <a href="termsandconditions.php" target="_blank">Terms and Conditions </a></p>
    </section>
  <button type="button" class="btn modal-toggle-no" onclick="ToggleNo()"> No </button>
  <button type="button" class="btn modal-toggle-yes" onclick="ToggleYes()"> Yes </button>
  </div>


    <div id="live-chat"> <!-- Start chat bot integration -->
     <div class="num_notifs">
        !!!
      </div>
      <button id="tutor-collapse" type="button" class="btn btn-info collapsed toggle-modal" data-toggle="collapse" data-target="#bot" onclick="ToggleModal()">TutorBot</button>
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
