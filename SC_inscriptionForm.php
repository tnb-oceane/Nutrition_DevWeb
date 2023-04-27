<?php


echo "<BR><BR><BR>\n";

echo "Merci de vous etre inscrit sur Happy Nutrition !\n";

echo "<BR><BR><BR>\n";

echo "Voici les informations enregistrees :<BR>\n";
echo "<UL>\n";

$id=trim($_POST['username']);
$email=trim($_POST['email']);
$mdp=trim($_POST['password']);
$maladie=trim($_POST['maladie']);

echo "<LI> Votre identifiantest : <EM>$id</EM>\n";
echo "<LI> Votre mot de passeest : <EM>$mdp</EM>.\n";
echo "<LI> Votre maladieest : <EM>$maladie</EM>.\n";
echo "<LI> Votreemailest : <EM>$email</EM>.\n";
echo "</UL>\n";

echo "<BR>\n";



include "BD_connexion.php";

    $sql = "INSERT INTO utilisateur (ID,EMAIL,MDP,MALADIE) VALUES ( '$id' , '$email' , '$mdp' , '$maladie' )";

    if ($conn->query($sql) === TRUE) {
     echo "Vous avez ete ajoute  a notre base de donnee";
    }else {
     echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();



?>