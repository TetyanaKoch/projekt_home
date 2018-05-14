<?php

require_once "DB.php";
// daten eintragen
if (isset($_POST["Vorname"]) &&
    isset($_POST["Nachname"])&&
    isset($_POST["E-Mail"])&&
    isset($_POST["Handy"])) {

    $db =  DB::get();

    $query = "INSERT INTO projekt (vorname, nachname, email, handy, message) VALUES (?, ?, ?, ?, ?);";

    $data = [$_POST["vorname"], $_POST["nachname"], $_POST["mail"], $_POST["handy"], $_POST["message"]];

    $db->prepare($query);
    $db->execute($query, $data);
    echo "Erfolgreich: 1 Benutzer erstellt mit id = " . $db->lastInsertId();
}


