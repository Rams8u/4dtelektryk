<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {background-color: black;}
        .main { display: flex; }
        .left { flex: 1; background-color: grey; padding: 5px;}
        .right{ flex:2; background-color: darkgrey; padding: 5px;}
        
    </style>
</head>
<body>
<div class='main'>
    <div class='left'>
        <form method="POST" action='zapisz.php'>
            <input name='miasto' />
            <input type='submit' name='sub' value='Dodaj'/>
        </form>
        <form class="car" method="POST" action="zapisz.php"><br>
            <select name="marka"><br>
                <option value="audi">Audi</option>
                <option value="bmw">BMW</option>
                <option value="mazda">Mazda</option>
                <option value="fiat">Fiat</option>
            </select><br>
            <select name="kolor">
                <option value="zielony">Zielony</option>
                <option value="czerwony">Czerwony</option>
                <option value="niebieski">Niebieski</option>
            </select><br>
            <input type="text" name="nr_rej" placeholder="nr_rej"><br>
            <input type="text" name="przebieg" placeholder="przebieg"><br>
            <input type="text" name="cena_pln" placeholder="cena_pln"><br>
            <input type="text" name="cena_eu" placeholder="cena_eu"><br>
            <input type="text" name="rok_prod" placeholder="rok_prod"><br>
            <input type="text" name="pojemnosc" placeholder="pojemnosc"><br>
            <select name="paliwo">
                <option value="diesel">Diesel</option>
                <option value="benzyna">Benzyna</option>
            </select><br>
            <input type='submit' name='sub2' value='Dodaj'/><br>
        </form>
    </div>
    <div class='right'>
 
    <?php
    $baza = new mysqli('localhost','root', '', 'komis24');
    $sql = "select * from oddzial";
    $wyn = $baza->query($sql);
    echo "<table><tr>";
    foreach($wyn as $w){
        echo "<tr>";
	echo "<td>", $w['miasto'], "</td>";
        echo "</tr>";
    }
    echo "</table>";
?>
    </div>
</div>
</body>
</html>
