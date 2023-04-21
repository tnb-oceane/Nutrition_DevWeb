<?php 
session_start();

session_unset();
session_destroy();

header("Location: SC_connecter.php");
exit();
