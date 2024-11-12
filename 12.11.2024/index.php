<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .main { display: flex; }
        .left { flex: 1; background-color: lime; padding: 5px;}
        .right{ flex:2; background-color: yellow; padding: 5px;}
    </style>
</head>
<body>
<div class='main'>
    <div class='left'>
        <form method="POST" action='zapisz.php'>
            <input name='miasto' />
            <input type='submit' name='sub' value='Dodaj'/>
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