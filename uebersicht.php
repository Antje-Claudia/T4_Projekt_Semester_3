<?php
  include "logic.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Bereich</title>
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
            <a href="admin.php" class="nav-link active">Admin Bereich</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Mainbereich mit Inhalten -->
    <!-- Wenn ein Beitrag erfolgreich angelegt wurde, wird eine Erfolgsmeldung ausgegeben-->
    <div class="text-center">
      <?php if(isset($_REQUEST['info'])) {?>
        <?php if($_REQUEST['info'] == "added") {?>
          <div class="alert alert-success" role="alert">
          Der Blog Post wurde erfolgreich angelegt und gespeichert.
        </div>
    <!-- Wenn ein Beitrag erfolgreich geändert wurde, wird eine Erfolgsmeldung ausgegeben-->
        <?php } elseif($_REQUEST['info'] == "updated") {?>
          <div class="alert alert-success" role="alert">
            Die Änderungen wurden erfolgreich gespeichert.
          </div>
        <?php } elseif($_REQUEST['info'] == "deleted") {?>
          <div class="alert alert-danger" role="alert">
            Der Blogbeitrag wurde erfolgreich gelöscht.
          </div>
          <?php }?>
      <?php }?>
        <h1>Admin Bereich - Post Übersicht</h1>
        <p>Hier siehst du all deine gespeicherten Blogbeiträge.</p>
    </div>
    <div class="row">
      <!-- For-each-Schleife mit dem Parameter $query (definiert in der logic.php) und dem Wert $q -->
      <?php foreach($query as $q) {?>
        <div class="col-4 d-flex justify-content-center align-items-center">
          <div class="card text-white bg-dark mt-5">
            <div class="card-body" style="width: 18rem;">
              <h5 class="card-title"><?php echo $q['title'];?></h5>
              <p class="card-text"><?php echo $q['textcontent'];?></p>
              <a href="view.php?id=<?php echo $q['id'];?>" class="btn btn-info">Mehr anzeigen<span class="text-danger">&rarr;</span></a>
            </div>
          </div>
        </div>
      <?php }?>
    </div>
    <!-- Footer -->
    <?php
            include "footer.html";
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>