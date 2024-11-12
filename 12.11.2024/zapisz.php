<?php
$baza = new mysqli('localhost','root', '', 'komis24');
if(@$_POST['sub']){
    $m = $_POST['miasto'];
    $sql = "INSERT INTO oddzial (miasto)  VALUES ('{$m}')";
    $baza->query($sql);
    header('location:index.php');
    exit();
}
if(@$_POST['sub2']){
    $mar = $_POST['marka'];
    $kol = $_POST['kolor'];
    $nr = $_POST['nr_rej'];
    $prz = $_POST['przebieg'];
    $pln = $_POST['cena_pln'];
    $eu = $_POST['cena_eu'];
    $rok = $_POST['rok_prod'];
    $poj = $_POST['pojemnosc'];
    $pal = $_POST['paliwo'];
    $sql = "INSERT INTO auto (marka, kolor, nr_rej, przebieg, cena_pln, cena_eu, rok_prod, pojemnosc, paliwo)  VALUES ('{$mar}', '{$kol}', '{$nr}', '{$prz}', '{$pln}', '{$eu}', '{$rok}', '{$poj}', '{$pal}')";
    $baza->query($sql);
    header('location:index.php');
    exit();
}
