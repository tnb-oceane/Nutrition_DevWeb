<?php
session_start();

$id=$_SESSION['id'];
$date=$_POST['date'];
$heure=$_POST['time'];
$type=$_POST['type'];
$temps=$_POST['temps'];


include "BD_connexion.php";

    $sql = "INSERT INTO activite (ID,DATE,HEURE,TYPE,TEMPS) VALUES ( '$id' , '$date' , '$heure' , '$type', '$temps' )";
    $conn->query($sql);
    $conn->close();

    header("Location: AC_journal.php");
    die();
    
?>