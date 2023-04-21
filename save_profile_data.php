<?php
session_start();

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['username'])) {
    header("Location: SC_connecter.php");
    exit();
}

// Incluez le fichier de connexion à la base de données
include "db_conn.php";

// Récupérez les données soumises à partir du formulaire
$sexe = $_POST['sexe'];
$age = $_POST['age'];
$poids = $_POST['poids'];
$taille = $_POST['taille'];
$niveau_activite = $_POST['niveau-activite'];
$username = $_SESSION['username'];

// Préparez la requête SQL pour insérer les données dans la table `profile_data`
$sql = "INSERT INTO profile_data (username, sexe, age, poids, taille, niveau_activite) VALUES ('$username', '$sexe', '$age', '$poids', '$taille', '$niveau_activite')";

// Exécutez la requête SQL
if (mysqli_query($conn, $sql)) {
    // Si l'insertion réussit, redirigez l'utilisateur vers la page du profil
    header("Location: AC_profil.php");
} else {
    // S'il y a une erreur, affichez un message d'erreur
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Fermez la connexion à la base de données
mysqli_close($conn);
?>
