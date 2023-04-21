<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include "db_conn.php";
echo 'Received data:<br>';
echo 'Username: ' . $_POST['username'] . '<br>';
echo 'Password: ' . $_POST['password'] . '<br>';


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
    } else if (empty($password)) {
        header("Location: SC_connecter.php?error=Password is required");
        exit();
    } else {
        $password = md5($password);

        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['username'] = $row['username'];
                header("Location: AC_profil.php");
                exit();
            } else {
                header("Location: SC_connecter.php?error=Incorrect username or password");
                exit();
            }
        } else {
            header("Location: SC_connecter.php?error=Error in SQL query: " . mysqli_error($conn));
            exit();
        }
        
    }
} else {
    header("Location: SC_connecter.php");
    exit();
}
