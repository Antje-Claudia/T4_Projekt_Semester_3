<?php
    //Verbindung zur DB wird aufgebaut.
    $conn = new mysqli("db", "root", "rootpassword", "testDB");

    //Wenn die Verbindung zur DB nicht aufgebaut werden kann, wird eine Warnung ausgegeben.
    if(!$conn) {
        echo "<h3 class='container bg-dark text-center p-3 text-warning rounded-lg mt-5'> Verbindung zur Datenbank kann nicht hergestellt werden…</h3>";
    }

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



?>