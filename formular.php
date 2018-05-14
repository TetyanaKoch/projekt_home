


<form method="post" action="auswertung.php">

            <label class="form1" for="anrede">Anrede</label>
            <select class="form2" id="anrede" name="anrede" value="<?php echo htmlspecialchars($aAnrede);?>">
                <?php
                $aAnrede =[
                    ['anrede' => 'Frau'],
                    ['anrede' => 'Herr'],
                    ['anrede' => 'Herr und Frau'],
                    ['anrede' => 'Familie']
                ];
                foreach ($aAnrede as $aSex) {
                    echo '<label for="', key($aSex), '">', $aSex[key($aSex)],'</label>';
                }?>
<option value="frau">Frau</option>
<option value="herr">Herr</option>
<option value="herr">Herr und Frau</option>
<option value="herr">Familie</option>

            </select>

<div class="clearfix"></div>
<label class="form1" for="vorname">Vorname</label> <input class="form3" type="text" id="vorname" name="vorname"
                    placeholder="Your Name" value="<?php echo htmlspecialchars($vorname);?>">
<label class="form1" for="nachname">Nachname</label> <input class="form3" type="text" id="nachname" name="nachname"
                    placeholder="Your Lastname" value="<?php echo htmlspecialchars($nachname);?>">
<label class="form1" for="birthday">Geburtstag</label> <input class="form3" type="text" id="birthday" name="birthday">
<label class="form1" for="mail">Ihre E-Mail</label> <input class="form3" type="text" id="mail" name="mail"
                     value="<?php echo htmlspecialchars($mail);?>">
<label class="form1" for="handy">Ihre Telefonnummer</label> <input class="form3" type="number" id="handy" name="handy"
                     value="<?php echo htmlspecialchars($handy);?>">
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
        echo '<label for="',  key($aClass), '">', $aClass[key($aClass)], '</label> <input value="', key($aClass), '" type="radio" id="', key($aClass), '" name="bc"><br>', PHP_EOL;
    }
    ?>

    <!--                <label for="class_a">Ballet class Anfänger</label> <input type="radio" id="class_a" name="bc"><br>-->
    <!--                <label for="class_m">Ballet class Mittelstufe</label> <input type="radio" id="class_m" name="bc"><br>-->
    <!--                <label for="class_f">Ballet class Fortgeschrittene</label> <input type="radio" id="class_f" name="bc"><br>-->
</div>
<div class="clearfix"></div>
<label class="form1" for="message">Ihre Mitteilung</label> <textarea class="form3" type="text" id="message" name="message"
                      placeholder="Your message" value="<?php echo htmlspecialchars($message);?>"></textarea>
<div class="clearfix"></div>
<input type="submit" name="submit" value="senden">
</form>