<?php
$baza = new mysqli('localhost','root', '', 'komis24');
if(@$_POST['sub']){
    $m = $_POST['miasto'];
    $sql = "INSERT INTO oddzial (miasto)  VALUES ('{$m}')";
    $baza->query($sql);
    header('location:index.php');
    exit();
}