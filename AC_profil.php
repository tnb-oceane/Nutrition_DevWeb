<!DOCTYPE html>
<head>
    <title>Profil</title>
    <style>
        /* Header */
        header {
            background-color: #6fbe3e;
            border-bottom-left-radius: 55px;
            border-bottom-right-radius: 55px;
            color: #fff;
            padding: 20px;
            height: 110px;
        }

        h1 {
            font-size: 50px;
            font-weight: bold;
            text-align: center;
            font-family: Georgia,  Times New Roman , Times, serif;
            margin: 0;
            text-align: center;
        }

        header a {
            color: white;
            text-decoration: none;
            border-radius: 15px;
            padding: 15px;
            background-color: #237726;
            font-family:  Franklin Gothic Medium ,  Arial Narrow , Arial, sans-serif;
        }
        header a:hover {
            background-color: #3f2377;
        }

        nav {
            float: right;    
        }
      
        nav li {
            display: inline-block;
            margin-left: 15px;
        }
    
        .connecter-button{
            font-size: 25px;
            margin-right: 15px;
        }

        /*Corps de la page*/
        body {
            font-family: Arial, sans-serif;
            font-size: 20px;
        }

        .donnees{
            background-color: rgba(141, 222, 147, 0.221);
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            border-radius: 15px;
            padding: 20px;
            margin: 50px;
            text-align: center;
            cursor: pointer;
            transition: all 0.5s;
        }
        .donnees:hover{
            background-color: rgba(37, 137, 44, 0.221);
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.7); 
        }
        .donnees li {
            margin: 20px;
            padding: 10px;
            border-radius: 15px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            color: #333;
            text-align: center;
            cursor: pointer;
            transition: all 0.5s;
            
        }

        /*Footer */
        footer {
            background-color: #6fbe3e;
            padding: 2px;
            text-align: center;
            color: #fff;  
            border-top-right-radius: 75px;
            border-top-left-radius: 75px;
        }

        /*Formulaire*/
        label{
            display: block;
        }

        input[type="text"], input[type="number"],input[type="time"], input[type="date"], select{
            width:  40%;
            padding: 10px;
            border-radius: 10px;
            border: none;
            margin-bottom: 40px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
        }
        
        input[type="submit"] {
            margin: auto;
            background-color: #237726;
            color: #fff;
            border: none;
            padding: 15px;
            border-radius: 15px;
            font-size: 15px;
            cursor: pointer;
            display: block;
            font-weight: bold;
            transition: all 0.5s;
        }
        input[type="submit"]:hover {
            background-color: #3f2377;
        }

    </style>
</head>

<body>
    <header>
        <h1> Happy Nutrition </h1>
        <nav>
            <ul>
                <li><a href="AC_profil.html">Profil</a></li>
                <li><a href="AC_journal.php">Journal</a></li>
                <li><a href="AC_alimentation.php">Alimentation</a></li>
            </ul>
        </nav>
        <a class="connecter-button" href="SC_accueil.php">Accueil</a>
        <a class="connecter-button" href="AC_deconnecter.php">Deconnexion</a>
    </header>

    <div class="donnees" >
       <?php 
        session_start();
        include "BD_connexion.php";

        $id= $_SESSION['id'];

        echo "<h2>Vos Données personnelles sont :</h2>";
        $sql = "SELECT * FROM profil WHERE ID='$id' ";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            $sexe=$row["SEXE"];
            $age=$row['AGE'];
            $poids=$row['POIDS'];
            $taille=$row['TAILLE'];
            $act=$row['ACTIVITE'];

            echo "<ul>";
            echo "<li>Votre sexe est : $sexe </li>";
            echo "<li>Votre age est : $age ans</li>";
            echo "<li>Votre poids est : $poids kg</li>";
            echo "<li>Votre taille est : $taille cm</li>";
            echo "<li>Votre niveau activité est : $act</li>";
            echo "</ul>";
        }
        else{
            echo "Vous n'avez pas encore enregistré de données";
        }

        $conn->close();
       ?>
    </div>
        
    <div class="donnees">
        <h2>Enregistrer vos données personnelles</h2>
        
        <form action="AC_profilForm.php" method="post">
            <label for="sexe">Sexe :</label><br>
            <select id="sexe" name="sexe">
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
            </select>

            <label for="age">Âge :</label><br>
            <input type="number" id="age" name="age" required>
      
            <label for="poids">Poids (kg) :</label><br>
            <input type="number" id="poids" name="poids" required>
      
            <label for="taille">Taille (cm) :</label><br>
            <input type="number" id="taille" name="taille" required>
        
            <label for="niveau-activite">Niveau d'activité physique :</label><br>
            <select id="niveau-activite" name="niveau-activite" required>
                <option value="sedentaire">Sedentaire (peu ou pas d'exercice)</option>
                <option value="modere">Modére (exercice léger 1 a 3 jours par semaine)</option>
                <option value="actif">Actif (exercice modére 3 à 5 jours par semaine)</option>
                <option value="tres-actif">Tres actif (exercice intense 6 à 7 jours par semaine)</option>
            </select>
      
            <input type="submit" value="Enregistrer">
        </form>

    </div>

    
    <footer>
        <h3>Contacter Nous</h3>
        <p>Cergy, France <br>Phone: +33 123 456 789 <br>Email: Cytech@myhappynutrition.com</p>
        <p>&copy; 2023  CY Tech</p>
    </footer>

</body>
</html>