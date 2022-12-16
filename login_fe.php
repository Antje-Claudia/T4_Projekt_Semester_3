<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP Projekt</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
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
        <div class="container vh-100">
            <div class="row justify-content-center h-100">
                <div class="card ml-3 mr-3 my-auto shadow">
                    <img class="mt-4 mb-4 center mx-auto d-block" src="Logo.png" height="155" width="155" alt="Logo" >
                    <div class="card-header text-center bg-dark text-white">
                        <h2>Login Bereich<h2>
                        </div>
                    <div class="card-body">
                        <form action="login.php" method="post"> <!-- Action führt dazu, dass login.php ausgeführt wird-->
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" id="email" class="form-control mb-3" name="email" placeholder="name@examplemail.com" required autofocus>
                                <label>Passwort</label>
                                <input type="password" id="password" class="form-control mb-3" name="password" placeholder="Passwort" required autofocus>
                                <input type="submit" class="btn btn-info" value="Login">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer bg-dark text-white">
                        <small>&copy; Mein Blog</small>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <?php
            include "footer.html";
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>