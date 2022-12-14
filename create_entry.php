<?php
  include "logic.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Neuer Blogbeitrag</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <!-- Header mit Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-5">
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
            <a href="index.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item active">
            <a href="login_fe.php" class="nav-link">Login</a>
          </li>
          <li class="nav-item active">
            <a href="admin.php" class="nav-link">Admin Bereich</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Mainbereich mit Inhalten -->
    <div class="container mt-5 mb-5 ">
        <form method="POST">
            <input type="text" name="title" placeholder="Titel Blogbeitrag" class="form-control bg-dark text-white my-3 text-center">
            <textarea class="form-control bg-dark text-white my-3" name="textcontent"></textarea>
            <button class="btn btn-outline-info" name="new_entry">Beitrag hinzufügen</button>
        </form>
    </div>




    <!-- Footer -->
    <?php
            include "footer.html";
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>