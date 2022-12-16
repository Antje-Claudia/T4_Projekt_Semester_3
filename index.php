<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Projekt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css"/>
  </head>
  <body>
    <!-- Header mit Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a href="#" class="navbar-brand mb-0 h1">
        <img class="d-inline-block align-top ml-3" src="Logo_sm.png" height="108" width="109" alt="Logo"/>
      </a>
      <button type="button"
        data-bs-toggle="collapse" 
        data-bs-target="#navbarNav"
        class="navbar-toggler text-info"
        aria-controls="navbarNav" 
        aria-expanded="false"
        aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a href="#" class="nav-link active">Home</a>
          </li>
          <li class="nav-item active">
            <a href="login_fe.php" class="nav-link">Login</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Mainbereich mit Inhalten -->
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active" style="background-image:url(./berge.jpeg);">
          <div class="container">
            <h1 class="text-white">Winter Wunderland</h1>
            <p class="text-white">Bei meinem Urlaub in den Schweizer Alpen konnte ich<br>die wunderschöne Alpinwelt erleben.</p>
            <a href="#" class="btn btn-lg btn-info">Zum Beitrag</a>
          </div>
        </div>
        <div class="carousel-item" style="background-image:url(./polarlichter.jpeg);">
          <div class="container">
            <h1 class="text-white">Auf den Spuren der Polarlichter</h1>
            <p class="text-white">Im letzten November habe ich mich auf den Weg gemacht<br>die wunderschönen Polarlichter in Norwegen<br>zu besuchen.</p>
            <a href="#" class="btn btn-lg btn-info">Zum Beitrag</a>
          </div>
        </div>
        <div class="carousel-item" style="background-image:url(./kueste.jpeg);">
          <div class="container">
            <h1 class="text-black">Strandurlaub im Winter</h1>
            <p class="text-black">Richtig gelesen: Auch im Winter<br>kann so ein Urlaub am Meer wunderschön sein!<br>Wie bei meinem (Winter-)Urlaub in Island.</p>
            <a href="#" class="btn btn-lg btn-info">Zum Beitrag</a>
          </div>
        </div>
    </div>
    <h1 class="mb-5 mt-5 text-center">Willkommen auf meinem Blog!</h1>
      <!-- Footer -->
        <?php
            include "footer.html";
        ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>