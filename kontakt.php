<!doctype html>
<?php
if (isset($_POST['submit']) && $_POST['submit'] === 'senden') {
    $vorname = $_POST["vorname"];
    echo "$vorname <br>";
    $nachname = $_POST["nachname"];
    echo "$nachname <br>";
    $birthday = $_POST["birthday"];
    echo "$birthday <br>";
    $mail = $_POST["mail"];
    echo "$mail <br>";
    $handy = $_POST["handy"];
    echo "$handy <br>";
    $class = $_POST['bc'];
    switch ($class) {

        case 'class_a':
            echo "Ballet class Anfänger";
            break;
        case 'class_m':
            echo "Ballet class Mittelstufe";
            break;
        default:
            echo "Ballet class Fortgeschrittene";
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

    mail($empfaenger_email, $betreff, $nachricht);
    mail($mail, $betreff, 'Danke für Ihre Bestellung' . $nachricht);

}

?>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="projekt.css" type="text/css" rel="stylesheet">
    <link href="normalize.css" type="text/css" rel="stylesheet">
    <title>Page </title>
</head>

<body>
<div class ="wrapper">

        <?php include 'header.php';?>

    <nav>
   <?php include 'navigation.php';?>
    </nav>

    <main>



        <div class="content">
            <p> Haben Sie eine Frage oder wünschen eine Auskunft. <br>
Bitte übermitteln Sie uns einige Angaben, damit wir Sie kontaktieren können.</p>
        <form method="post">


            <label class="form1" for="anrede">Anrede</label>
            <select class="form2" id="anrede" name="anrede">
                <?php
                $aAnrede =[
                    ['anrede' => 'Frau'],
                    ['anrede' => 'Herr'],
                    ['anrede' => 'Herr und Frau'],
                    ['anrede' => 'Familie']

                ]
                ?>
                <option value="frau">Frau</option>
                <option value="herr">Herr</option>
            </select>
            <div class="clearfix"></div>
            <label class="form1" for="vorname">Vorname</label> <input class="form3" type="text" id="vorname" name="vorname" placeholder="Your Name">
            <label class="form1" for="nachname">Nachname</label> <input class="form3" type="text" id="nachname" name="nachname" placeholder="Your Lastname">
            <label class="form1" for="birthday">Geburtstag</label> <input class="form3" type="text" id="birthday" name="birthday">
            <label class="form1" for="mail">Ihre E-Mail</label> <input class="form3" type="text" id="mail" name="mail">
            <label class="form1" for="handy">Ihre Telefonnummer</label> <input class="form3" type="number" id="handy" name="handy">
            <div class="clearfix"></div>

            <label class="form1">Für welchen Kurs interessieren Sie sich:</label>
            <div class="sel">
<?php
$aClasses = [
    ['class_a' => 'Ballet class Anfänger'],
    ['class_m' => 'Ballet class Mittelstufe'],
    ['class_f' => 'Ballet class Fortgeschrittene']
];
foreach($aClasses as $aClass) {
    echo '                    <label for="',  key($aClass), '">', $aClass[key($aClass)], '</label> <input value="', key($aClass), '" type="radio" id="', key($aClass), '" name="bc"><br>', PHP_EOL;
}
?>

<!--                <label for="class_a">Ballet class Anfänger</label> <input type="radio" id="class_a" name="bc"><br>-->
<!--                <label for="class_m">Ballet class Mittelstufe</label> <input type="radio" id="class_m" name="bc"><br>-->
<!--                <label for="class_f">Ballet class Fortgeschrittene</label> <input type="radio" id="class_f" name="bc"><br>-->
            </div>
            <div class="clearfix"></div>
            <label class="form1" for="message">Ihre Mitteilung</label> <input class="form3" type="text" id="message" name="message" placeholder="Your message">
            <div class="clearfix"></div>
            <input type="submit" name="submit" value="senden">
        </form>
    <br>
        <h3>Stundenplan</h3>
<br>
<table>
   <tr>
       <th>Unterricht</th>
       <th>Montag</th>
       <th>Dienstag</th>
       <th>Mittwoch</th>
       <th>Donnerstag</th>
       <th>Freitag</th>   
   </tr>
   <tr>
        <td>Ballett Erwachsene</td>
        <td class="lesson">18:00-19:30 Uhr</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
   </tr>
   <tr>
       <td>Kinderballett</td>
       <td></td>
       <td class="lesson">13:00-14:30 Uhr</td>
       <td></td>
       <td></td>
       <td></td>
   </tr>
   <tr>
       <td>Barre Workout</td>
       <td class="lesson">16:00-17:30 Uhr</td>
       <td></td>
       <td></td>
       <td class="lesson">17:00-18:30 Uhr</td>
       <td></td>
   </tr>
   <tr>
       <td>Stretching</td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td class="lesson">20:00-21:30 Uhr</td>
   </tr>
   <tr>
   <td>Point Workout</td>
   <td></td>
   <td></td>
   <td class="lesson">18:00-19:30 Uhr</td>
   <td></td>
   <td></td>
    </tr>
    
</table>

        </div>
        <aside class="sidebar">
           <h3>NEWS</h3>
            <p><img src="../projekt/image/what.jpg" alt="bild" title="BILD" ></p>
           <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,
               vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blanditdolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit</p> 
               <button>Weiterlesen</button>   
               <hr>
               <p><img src="../projekt/image/what.jpg" alt="bild" title="BILD"></p>
           <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,
               vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blanditdolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit</p>  
               <button>Weiterlesen</button> 
            <div class="clearfix"></div>
        </aside>

    </main>
    <div class="clearfix"></div>


    <footer>
        <?php include'footer.php';?>

    </footer>


</div>

</body>

</html>