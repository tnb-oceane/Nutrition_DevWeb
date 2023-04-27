<?php
session_start();

$id=$_SESSION['id'];
$date=$_POST['date'];
$heure=$_POST['time'];
$type=$_POST['meal-type'];
$aliments=trim($_POST['food']);
$quantité=trim($_POST['quantity']);


include "BD_connexion.php";

    $sql = "INSERT INTO alimentaire (ID,DATE,HEURE,TYPE,ALIMENT,QUANTITE) VALUES ( '$id' , '$date' , '$heure' , '$type', '$aliments', '$quantité' )";
    mysqli_query($conn, $sql)
    $conn->close();

    header("Location: AC_journal.php");
    die();
    


?>