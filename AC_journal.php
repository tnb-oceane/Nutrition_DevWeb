<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un repas et une activité</title>
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
            font-family: Georgia, 'Times New Roman', Times, serif;
            margin: 0;
            text-align: center;
        }

        header a {
            color: white;
            text-decoration: none;
            border-radius: 15px;
            padding: 15px;
            background-color: #237726;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
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

        a {
            background-color: #237726;
            color: #fff;
            text-decoration: none;
            padding: 15px;
            border-radius: 15px;
            font-weight: bold;
            transition: all 0.5s;
        }
        a:hover {
            background-color: #3f2377;
        }

        .journal{
            background-color: rgba(141, 222, 147, 0.221);
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            border-radius: 15px;
            padding: 20px;
            margin: 50px;
            text-align: center;
            cursor: pointer;
            transition: all 0.5s;
        }
        .journal:hover{
            background-color: rgba(37, 137, 44, 0.221);
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.7); 
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

        .aliment label {
            display: inline;
            padding: 25px;
        }
        .aliment input[type="text"],
        .aliment input[type="number"] {
            width:  20%;
            padding: 10px;
            border-radius: 10px;
            border: none;
            margin-bottom: 40px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
        }
        .aliment input[type="button"] {
            background-color: #237726;
            color: #fff;
            text-decoration: none;
            margin: 50px;
            padding: 5px 10px;
            border-radius: 15px;
            font-weight: bold;
            transition: all 0.5s;
        }
        .aliment input[type="button"]:hover {
            background-color: #3f2377;
        }

        /*Aliment ajoutés*/
        .ajout {
            display: none;
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

    </style>
</head>
<body>
    <header>
        <h1> Happy Nutrition </h1>
        <nav>
            <ul>
                <li><a href="AC_profil.php">Profil</a></li>
                <li><a href="AC_journal.php">Journal</a></li>
                <li><a href="AC_alimentation.html">Alimentation</a></li>
            </ul>
        </nav>
        <a class="connecter-button" href="SC_accueil.html">Accueil</a>
    </header>

    <div class="journal">
        <h2>Journal alimentaire</h2>
        <p>Utilisez notre journal alimentaire pour suivre ce que vous mangez chaque jour. Cela vous permettra de détecter vos habitudes alimentaires, d'améliorer vos repas et de faire des ajustements pour atteindre vos objectifs nutritionnels.</p>
        
        <form>
            <h3>Ajouter un repas</h3>
        <form action="Jdata.php" method="post">
        <label for="date_meal">Date:</label>
        <input type="date" id="date_meal" name="date_meal" required>

        <label for="time_meal">Heure:</label>
        <input type="time" id="time_meal" name="time_meal" required>

        <label for="meal-type">Type de repas:</label>
        <input type="text" id="meal-type" name="meal-type" required>

        <label for="food">Nourriture:</label>
        <input type="text" id="food" name="food" required>

        <label for="quantity">Quantité:</label>
        <input type="number" id="quantity" name="quantity" required>
        <input type="submit" name="add_meal" value="Ajouter un repas">
    </form>
    
    <div class="journal">
        <h2>Journal des activités</h2>
        <p>Utilisez notre journal des activités pour suivre vos activités physique au fil des jours. Cela vous permettra de détecter vos habitudes, d'améliorer et de faire des ajustements pour atteindre vos objectifs sportifs.</p>
        <form>
            <h3>Ajouter une activité</h3>
    <form action="Jdata.php" method="post">
        <label for="date_activity">Date:</label>
        <input type="date" id="date_activity" name="date_activity" required>
    
        <label for="time_activity">Heure:</label>
        <input type="time" id="time_activity" name="time_activity" required>
    
        <label for="type">Type d'activité:</label>
        <input type="text" id="type" name="type" required>
    
        <label for="temps">Durée:</label>
        <input type="time" id="temps" name="temps" required>
    
        <input type="submit" name="add_activity" value="Ajouter une activité">
    </form>

    <footer>
        <h3>Contacter Nous</h3>
        <p>Cergy, France <br>Phone: +33 123 456 789 <br>Email: Cytech@myhappynutrition.com</p>
        <p>&copy; 2023  CY Tech</p>
    </footer>
    
    <script>


</body>
</html>

