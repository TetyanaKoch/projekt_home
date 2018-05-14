<!doctype html>

<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="app/css/main.css">
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

            <?require_once 'formular.php'?>
    <br>

            <?php include 'timetable.php'?>

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