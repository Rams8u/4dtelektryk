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
    $sql = "INSERT INTO auto (marka)  VALUES ('{$mar}')";
    $baza->query($sql);
    header('location:index.php');
    exit();
}
if(@$_POST['sub2']){
    $kol = $_POST['kolor'];
    $sql = "INSERT INTO auto (kolor)  VALUES ('{$kol}')";
    $baza->query($sql);
    header('location:index.php');
    exit();
}
if(@$_POST['sub2']){
    $nr = $_POST['nr_rej'];
    $sql = "INSERT INTO auto (nr_rej)  VALUES ('{$nr}')";
    $baza->query($sql);
    header('location:index.php');
    exit();
}
if(@$_POST['sub2']){
    $prz = $_POST['przebieg'];
    $sql = "INSERT INTO auto (przebieg)  VALUES ('{$prz}')";
    $baza->query($sql);
    header('location:index.php');
    exit();
}
if(@$_POST['sub2']){
    $pln = $_POST['cena_pln'];
    $sql = "INSERT INTO auto (cena_pln)  VALUES ('{$pln}')";
    $baza->query($sql);
    header('location:index.php');
    exit();
}
if(@$_POST['sub2']){
    $eu = $_POST['cena_eu'];
    $sql = "INSERT INTO auto (cena_eu)  VALUES ('{$eu}')";
    $baza->query($sql);
    header('location:index.php');
    exit();
}
if(@$_POST['sub2']){
    $rok = $_POST['rok_prod'];
    $sql = "INSERT INTO auto (rok_prod)  VALUES ('{$rok}')";
    $baza->query($sql);
    header('location:index.php');
    exit();
}
if(@$_POST['sub2']){
    $poj = $_POST['pojemnosc'];
    $sql = "INSERT INTO auto (pojemnosc)  VALUES ('{$poj}')";
    $baza->query($sql);
    header('location:index.php');
    exit();
}
if(@$_POST['sub2']){
    $pal = $_POST['paliwo'];
    $sql = "INSERT INTO auto (paliwo)  VALUES ('{$pal}')";
    $baza->query($sql);
    header('location:index.php');
    exit();
}
