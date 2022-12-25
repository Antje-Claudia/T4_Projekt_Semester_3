<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    //Test, ob die Verbindung zwischen den Dateien login.html und login.php funktioniert:*/
    //echo $password;
    $con = new mysqli("db", "root", "rootpassword", "testDB", 3306);
    if($con->connect_error) {
      die("Failed to connect : " .$con->connection_error);
    } else {
      $stmt = $con->prepare("select * from login where email = ?");
      $stmt->bind_param("s", $email);
      $stmt->execute();
      $stmt_result = $stmt->get_result();
      if($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        if($data['password'] === $password) {
          echo "<h2>Login successful!!!</h2>";
        } 
      } else {
        echo "<h2>Invalid Email or password</h2>";
      }
    }

 
 
    /*if ($email  === "test@test.de" && $password === "123") {
        echo $email;
        header('Location: admin.php');
        exit();
    }
    else {
        header('Location: login_failed.php');
        exit();
    }
    //Aufbau einer Verbindung zur Datenbank
    //$con = mysqli_connect("localhost", "root", "rootpassword", "testDB", 3306);*/

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
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
                  <a href="#" class="nav-link active">Login</a>
                </li>
              </ul>
            </div>
          </nav>
        <!-- Mainbereich mit Inhalten -->

        <!-- Footer -->
        <?php
            include "footer.html";
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
