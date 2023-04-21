<?php
session_start();
include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['maladie'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $maladie = validate($_POST['maladie']);

    if (empty($username)) {
        header("Location: inscription1.php?error=Username is required");
        exit();
    } elseif (empty($email)) {
        header("Location: inscription1.php?error=Email is required");
        exit();
    } elseif (empty($password)) {
        header("Location: inscription1.php?error=Password is required");
        exit();
    } elseif (empty($maladie)) {
        header("Location: inscription1.php?error=Maladie is required");
        exit();
    } else {
        // Check if the email is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: inscription1.php?error=Invalid Email");
            exit();
        }

        // Hash the password
        $password = md5($password);

        // Check if the username or email already exists
        $sql = "SELECT * FROM users WHERE username='$username' OR email='$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            header("Location: inscription1.php?error=The username or email is already taken");
            exit();
        } else {
            $sql2 = "INSERT INTO users(username, email, password, maladie) VALUES('$username', '$email', '$password', '$maladie')";
            $result2 = mysqli_query($conn, $sql2);
            if ($result2) {
                header("Location: inscription1.php?success=Your account has been created successfully");
                exit();
            } else {
                header("Location: inscription1.php?error=An unknown error occurred");
                exit();
            }
        }
    }

} else {
    header("Location: inscription1.php");
    exit();
}
?>
