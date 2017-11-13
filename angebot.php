<!doctype html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
        <h1>Ballet open classes</h1>
         <div class="content">
    <p>In unseren Ballet classes wird klassisches Ballett nach Waganova-Methode für Erwachsene aller Niveaus angeboten.

        Der Ballettunterricht besteht aus der Erarbeitung der korrekten Balletttechnik an der Stange, aus Stretching, Balanceübungen, Choreographien und Sprungkombinationen.

        Durch regelmässiges und konsequentes Balletttraining verbessern Sie Ihre Haltung, Beweglichkeit, Konzentration und Ausdauer.

        Natürlich kommt auch der Spass am Tanzen nicht zu kurz.</p>
        </div>
       
    <div class="flex-container">

    <article class="bk1">

                <img src="../projekt/image/kinder.jpg" alt="ballet beginner" title="ballet beginner">

        <div class="bk1_txt">
        <h2>Kinderballett</h2>
            <p><b>Lernen</b> Sie die Basis und die Technik des klassischen Balletts. Für alle mit und ohne Vorkenntnissen.</p>
        </div>
    </article>

    <article class="bk1">

            <img src="../projekt/image/mittel.jpg" alt="ballet open class" title="ballet beginner">

        <div class="bk1_txt">
        <h2>Ballet open class</h2>
            <p><b>Verbessern </b>Sie Ihre Technik, Koordination und Choreographie mit neuen Schritten und Kombinationen.

            Für alle, die schon Ballett getanzt haben und für Anfänger mit Vorkenntnissen.</p>
        </div>
    </article>
    <article class="bk1">

            <img src="../projekt/image/erwachsene.jpg" alt="ballet profi" title="ballet beginner">

        <div class="bk1_txt">
        <h2>Point Workout</h2>
        <p>
            <b>Perfektionieren</b> Sie Ihre Bewegungen und Ihre Choreographie durch elegante Pirouetten, grosse Sprünge und schnelles Tempo.
        </p>
        </div>
    </article>

        <article class="bk1">

            <img src="../projekt/image/stretching.jpg" alt="ballet profi" title="ballet beginner">

            <div class="bk1_txt">
                <h2>Stretching</h2>
                <p>
                    <b>Stretching</b> fördert die Beweglichkeit und beugt Verspannungen sowie Muskelverkürzungen vor, am Besten in Verbindung mit Kraftübungen und Mobilisieren. 
                </p>
            </div>
        </article>
    </div>


        <h2>Preise</h2>
        <div class="flex-preise">
                    <div class="p1"><img src="../projekt/image/ballerina.jpg" class="icon1">
                        <div class="ptxt">Probelektion CHF XX.-</div>
                        <div class="clearfix"></div>
                    </div>


            <div class="p1"><img src="../projekt/image/ballerina.jpg" class="icon1">
                <div class="ptxt">Einzellektion CHF XX.-</div>
                <div class="clearfix"></div>

            </div>

            <div class="p1"><img src="../projekt/image/ballerina.jpg" class="icon1">
                <div class="ptxt">10-er Abo CHF XXX.-</div>
                <div class="clearfix"></div>

            </div>

           <div class="p1"><img src="../projekt/image/ballerina.jpg" class="icon1">
                <div class="ptxt">20-er Abo CHF XXX.-</div>
                <div class="clearfix"></div>

            </div>
                   
 
           <h2>Ballet studios</h2>
         
            <a href="https://www.google.com/maps/place/Villa+Egli/@47.356714,8.545286,15z/data=!4m5!3m4!1s0x0:0x6ae2fcf07ef8c7a2!8m2!3d47.3560457!4d8.5501353?hl=de-DE" target="_blank">
                <img src="../projekt/image/Villa-Egli.jpg" alt="Ballet Studio Villa Egli" title="Ballet Studio Villa Egli" ></a>
            <p> Ballet Studio Villa Egli </p> 
                
               <hr>
               <a href="https://www.google.com/maps/place/Seefeldstrasse+303,+8008+Z%C3%BCrich,+Schweiz/@47.3478,8.5632107,17z/data=!3m1!4b1!4m5!3m4!1s0x479aa73c2bbee231:0x64865dbf1a06eda5!8m2!3d47.3478!4d8.5653994?hl=de-DE" target="_blank"><img src="../projekt/image/studio-teifenbrunnen.jpg" alt="Ballet Studio Star Education" title="Ballet Studio Star Education"></a>
           <p>Ballet Studio Star Education</p>  
              
            <div class="clearfix"></div>
       
        </div>

    </main>
    <div class="clearfix"></div>

        <footer>
            <?php include'footer.php';?>

        </footer>

</div>
</body>
</html>
