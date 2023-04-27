<?php

$host= "localhost";
$username= "tenebayoce";
$password = "tahthi9ezaid";

$dbname = "Nutrition_DevWeb";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
   echo "Connection failed!";
}

?>
