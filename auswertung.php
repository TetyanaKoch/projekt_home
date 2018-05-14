<?php

//Formulardaten
$aAnrede = htmlspecialchars($aAnrede);
$vorname = htmlspecialchars($vorname);
$nachname = htmlspecialchars($nachname);
$birthday = htmlspecialchars($birthday);
$mail = htmlspecialchars($mail);
$handy = htmlspecialchars($handy);
$message = nl2br(htmlspecialchars($message));

//if(isset($_POST["anrede"]) && !empty($_POST["anrede"])){
  //  $aAnrede = $_POST["anrede"];
//}
//if(isset($_POST["vorname"]) && !empty($_POST["vorname"])){
//    $vorname = $_POST["vorname"];
//}

// Formular wurde mit Submit übermittelt
if (isset($_POST['submit']) && $_POST['submit'] === 'senden') {

    if(isset($_POST["anrede"]) && !empty($_POST["anrede"])){
        $aAnrede = $_POST["anrede"];
        echo "Anrede: $aAnrede</br>";

    }
    if(isset($_POST["vorname"]) && !empty($_POST["vorname"])){
        $vorname = $_POST["vorname"];
        echo "Vorname: $vorname</br>";
    }
    if(isset($_POST["nachname"]) && !empty($_POST["nachname"])){
        $nachname = $_POST["nachname"];
        echo "Nachname: $nachname</br>";
    }
    if(isset($_POST["birthday"]) && !empty($_POST["birthday"])){
        $birthday = $_POST["birthday"];
        echo "Geburtstag: $birthday</br>";
    }
    if(isset($_POST["handy"]) && !empty($_POST["handy"])){
        $handy = $_POST["handy"];
        echo "Telefonnummer: $handy</br>";
    }
    if(isset($_POST["mail"]) && !empty($_POST["mail"])){
        $mail = $_POST["mail"];
        echo "E-Mail: $mail</br>";
    }
    $class = $_POST['bc'];
    switch ($class) {

        case 'class_a':
            echo "Anmeldung Ballet class Anfänger </br>";
            break;
        case 'class_m':
            echo "Anmeldung Ballet class Mittelstufe </br>";
            break;
        default:
            echo "Anmeldung Ballet class Fortgeschrittene </br>";
    }
    if(isset($_POST["message"]) && !empty($_POST["message"])){
        $message = $_POST["message"];
        echo "Ihre Mitteilung: $message</br>";
    }

    $empfaenger_email = "tkoch@bluewin.ch";
    $betreff = "Erste php-formular-auswertung";
    $nachricht = "Bestellung eingegangen
        Vorname: $vorname
        Nachname: $nachname
        Birthday: $birthday
        Email: $mail
        Mobile: $handy
        Class: $class";
    $from = "From: $mail";

    $debug = mail($empfaenger_email, $betreff, $nachricht);
    mail($mail, $betreff, 'Danke für Ihre Kontaktaufnahme' . $nachricht);

 //   require_once "DB.php";

    // daten eintragen
    //$db =  DB::get();

//    $query = "INSERT INTO mails (vorname, nachname, email, handy, message) VALUES (?, ?, ?, ?, ?);";

//    $data = [$_POST["vorname"], $_POST["nachname"], $_POST["mail"], $_POST["handy"], $_POST["message"]];

    //var_dump($_POST, $data, $query, $db);

//    $statement = $db->prepare($query);
//    $statement->execute($data);
//    echo "Erfolgreich: 1 Benutzer erstellt mit id = " . $db->lastInsertId();

// Formular wurde nicht übermittelt, also schicken wir den Browser auf das Kontaktformular
} else {
    header('Location: http://localhost/hallo/projekt/kontakt.php');
    exit;
}

// var_dump($_POST);



