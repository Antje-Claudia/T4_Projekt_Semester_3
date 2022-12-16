<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    /* Test, ob die Verbindung zwischen den Dateien login.html und login.php funktioniert:*/
    echo $email; 
    echo $password; 

    //Aufbau einer Verbindung zur Datenbank
    $con = new mysqli("localhost", "root", "rootpassword", "testDB");
?>