<?php
session_start();
include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if (empty($username)) {
        header("Location: SC_connecter.php?error=Username is required");
        exit();
    } elseif (empty($password)) {
        header("Location: SC_connecter.php?error=Password is required");
        exit();
    } else {
        $password = md5($password); // Hash the password

        // Check if the user exists in the database
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['maladie'] = $row['maladie'];
            header("Location: AC_profil.php?success=Vous êtes connecté(e) !");
            exit();
        } else {
            header("Location: SC_connecter.php?error=Invalid Username or Password");
            exit();
        }
    }
} else {
    header("Location: SC_connecter.php");
    exit();
}
?>
