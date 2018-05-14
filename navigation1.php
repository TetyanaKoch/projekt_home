<?php
echo'
    <nav class="hauptmenue" id="hauptmenue">
        <ul class="level1">
            <li class="navi_level1"><a class="activ" href="index.php">Über mich</a></li>
            <li class="navi_level1"><a class="activ" href="angebot.php">Angebote</a></li>
                    <ul class="level2">
                        <li class="navi_level2"><a href="#">Ballet classes</a></li>
                        <li class="navi_level2"><a href="#">Barre workout</a></li>
                    </ul>
            <li class="navi_level1"><a class="activ" href="kontakt.php">Kontakt</a></li>
        
        </ul>
        <div class="clearfix"></div>
    </nav>
    
    <script>
    var hamburger = document.getElementById(\'hamburger\');
var hauptmenue = document.getElementById(\'hauptmenue\');


hamburger.addEventListener(\'click\', function (e) {
    e.preventDefault();

if (hamburger.innerHTML===\'X\'){         //wenn Inhalt des hamburger X entspricht
    hauptmenue.style.display=\'none\';    // Menü verstecken
    hamburger.innerHTML=\'&#9776;\'       // Hamburger Icon anzeigen  
}
else {                                     //Wenn Inhalt des HambIcon nicht X entspricht  
    hauptmenue.style.display=\'block\';     // Menü anzeigen
    hamburger.innerHTML=\'X\';              //HambIcon mit einem X ersetzen
}
    }

);
</script>
';