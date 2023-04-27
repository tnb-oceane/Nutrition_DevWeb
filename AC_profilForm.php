<?php

session_start();

// Verifier si l utilisateurest connecter
if (!isset($_SESSION['id'])) {
    header("Location: SC_connecter.php");
   exit();
}

// Recupération des donnees du formulaire
$sexe=trim($_POST['sexe']);
$age=trim($_POST['age']);
$poids=trim($_POST['poids']);
$taille=trim($_POST['taille']);
$niveauactivite=trim($_POST['niveau-activite']);
$id=$_SESSION['id'];

//Connection à la base de données
include "BD_connexion.php";

//On supprime les informations précedentes
$sql1 = "DELETE FROM profil WHERE ID='$id'";
$conn->query($sql1);

$sql = "INSERT INTO profil (SEXE,AGE,POIDS,TAILLE,ACTIVITE,ID) VALUES ( '$sexe' , $age , $poids , $taille , '$niveauactivite' , '$id' )";
$conn->query($sql);

$_SESSION['sexe']=$sexe;
$_SESSION['age']=$age;
$_SESSION['poids']=$poids;
$_SESSION['taille']=$taille;
$_SESSION['activite']=$niveauactivite;


header("Location: AC_profil.php");


// Fermez la connexion  a la base de donnees
mysqli_close($conn);
?>