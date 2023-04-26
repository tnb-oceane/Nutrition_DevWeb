<?php
session_start();
include 'db_conn.php';

// Vérifiez si la session 'username' est définie
if (!isset($_SESSION['username'])) {
    die("Erreur : l'utilisateur n'est pas connecté.");
}

// Ajouter un repas
if (isset($_POST['add_meal'])) {
    $date = $_POST['date_meal'];
    $time = $_POST['time_meal'];
    $meal_type = $_POST['meal-type'];
    $food = $_POST['food'];
    $quantity = $_POST['quantity'];

    // Insérer les données dans la base de données
    $stmt = $conn->prepare("INSERT INTO meals (username, date, time, meal_type, food, quantity) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $_SESSION['username'], $date, $time, $meal_type, $food, $quantity);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Repas ajouté avec succès";
        header("Location: AC_journal.php");
        exit();
    } else {
        $_SESSION['error'] = "Erreur lors de l'ajout du repas";
        header("Location: AC_journal.php");
        exit();
    }
}

// Ajouter une activité
if (isset($_POST['add_activity'])) {
    $date = $_POST['date_activity'];
    $time = $_POST['time_activity'];
    $activity_type = $_POST['type'];
    $duration = $_POST['temps'];

    // Insérer les données dans la base de données
    $stmt = $conn->prepare("INSERT INTO activities (username, date, time, activity_type, duration) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $_SESSION['username'], $date, $time, $activity_type, $duration);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Activité ajoutée avec succès";
        header("Location: AC_journal.php");
        exit();
    } else {
        $_SESSION['error'] = "Erreur lors de l'ajout de l'activité";
        header("Location: AC_journal.php");
        exit();
    }
}

?>
