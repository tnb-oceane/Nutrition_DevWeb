<?php
session_start();
include 'db_conn.php';

// Ajouter un repas
if (isset($_POST['add_meal'])) {
    $date = $_POST['date_meal'];
    $time = $_POST['time_meal'];
    $meal_type = $_POST['meal-type'];
    $food = $_POST['food'];
    $quantity = $_POST['quantity'];

    // Insérer les données dans la base de données
    $stmt = $conn->prepare("INSERT INTO meals (user_id, date, time, meal_type, food, quantity) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issssi", $_SESSION['user_id'], $date, $time, $meal_type, $food, $quantity);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Repas ajouté avec succès";
        header("Location: AC_journal.html");
        exit();
    } else {
        $_SESSION['error'] = "Erreur lors de l'ajout du repas: " . $stmt->error;
        header("Location: AC_journal.html");
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
    $stmt = $conn->prepare("INSERT INTO activities (user_id, date, time, activity_type, duration) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issss", $_SESSION['user_id'], $date, $time, $activity_type, $duration);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Activité ajoutée avec succès";
        header("Location: AC_journal.html");
        exit();
    } else {
        $_SESSION['error'] = "Erreur lors de l'ajout de l'activité: " . $stmt->error;
        header("Location: AC_journal.html");
        exit();
    }
}

$conn->close();
?>
