<?php
   
    //Verbindung zur DB wird aufgebaut.
    $conn = new mysqli("db", "root", "rootpassword", "testDB");

    //Wenn die Verbindung zur DB nicht aufgebaut werden kann, wird eine Warnung ausgegeben.
    if(!$conn) {
        echo "<h3 class='container bg-dark text-center p-3 text-warning rounded-lg mt-5'> Verbindung zur Datenbank kann nicht hergestellt werden…</h3>";
    }

    //Login:
//https://www.youtube.com/watch?v=vESwDXV81F0
    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
    
    $select = mysqli_query($conn, "SELECT * FROM login WHERE email = '$email' AND password = '$password'");
    $row = mysqli_fetch_array($select);

    if(is_array($row)) {
        $_REQUEST["email"] = $row ['email'];
        $_REQUEST["password"] = $row ['password'];
    } else {
        header("Location: login_fe.php?login=unsuccessfully");
        exit();
    }
    }
    if(isset($_REQUEST['email'])) {
        header("Location: admin.php?login=successfully");
        exit();
    }

    //_________________________________________________________________________________________________________________________
     // Blog Posts anlegen, anzeigen, ändern und löschen (CRUD):
    $sql = "SELECT * FROM data";
    $query = mysqli_query($conn, $sql);
    
    //Titel und Text aus den Feldern der create_entry.php wird in der DB "data" gespeichert.
    //Nach diesem Vorgang wird auf die uebersicht.php weitergeleitet mit dem Parameter info=added in der URL.
    if(isset($_REQUEST["new_entry"])) {
        $title = $_REQUEST["title"];
        $textcontent = $_REQUEST["textcontent"];

        $sql = "INSERT INTO data(title, textcontent) VALUES('$title', '$textcontent')";
        mysqli_query($conn, $sql);

        header("Location: uebersicht.php?info=added");
        exit();
    }

    if(isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];

        $sql = "SELECT * FROM data WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    //Bearbeiteten Titel und Text in der DB speichern (update)
    if(isset($_REQUEST['update'])) {
        $id = $_REQUEST['id'];
        $title = $_REQUEST["title"];
        $textcontent = $_REQUEST["textcontent"];

        $sql = "UPDATE data SET title = '$title', textcontent = '$textcontent' WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: uebersicht.php?info=updated");
        exit();
    }

    //Blogbeitrag löschen
    if(isset($_REQUEST['delete'])) {
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM data WHERE id = $id";
        $query = mysqli_query($conn, $sql);

        header("Location: uebersicht.php?info=deleted");
        exit();
    }
?>