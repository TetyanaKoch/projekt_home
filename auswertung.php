<?php

    $vorname = $_POST["vorname"];
    echo "$vorname <br>";
    $nachname = $_POST["nachname"];
    echo "$nachname <br>";
    $birthday = $_POST["birthday"];
    echo "$birthday <br>";
    $mail = $_POST["mail"];
    echo "$mail <br>";
    $handy =$_POST["handy"];
    echo "$handy <br>";

    switch($_POST['bc']){

        case 'class_a':
            echo"Ballet class Anfänger";
            break;
        case 'class_m':
            echo "Ballet class Mittelstufe";
            break;
        default:
            echo "Ballet class Fortgeschrittene";
    }



$empfaenger_email = "tkoch@bluewin.ch";
$betreff = "Erste php-formular-auswertung";
$nachricht = "";
$from = "mail";


mail($empfaenger_email, $betreff, $nachricht, $from );



