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
    <div class="container mt-5">
        <?php foreach($query as $q) {?>
            <div class="bg-dark p-5 rounded-lg text-white text-center">
                <h1><?php echo $q['title'];?></h1>
                <div class="d-flex mt-2 justify-content-center align-items-center">
                    <a href="edit_entry.php?id=<?php echo $q['id'];?>" class="btn btn-info btn-sm">bearbeiten</a>
                    <form method="POST">
                        <input type="text" hidden name="id" value="<?php echo $q['id'];?>">
                        <button class="btn btn-danger btn-sm ml-2" name="delete">l??schen</button>
                    </form>
                </div>
            </div>
            <p class="mt-5 border-left border-dark pl-3"><?php echo $q['textcontent'];?></p>
        <?php }?>
    </div>


    <!-- Footer -->
    <?php
            include "footer.html";
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>