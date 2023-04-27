<?php
session_start();

$id=trim($_POST['username']);
$mdp=trim($_POST['password']);

include "BD_connexion.php";

$sql = "SELECT * FROM utilisateur WHERE ID='$id'  AND MDP='$mdp' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);
    $_SESSION['id'] = $row['ID'];
    $_SESSION['email'] = $row['EMAIL'];
    $_SESSION['maladie'] = $row['MALADIE'];

    $conn->close();


    header("Location: AC_profil.php");
    die();
} 
else {
    sleep(1);
    header("Location: SC_connecter.php?error=Invalid Username or Password");
    die();
}

$conn->close();

?>