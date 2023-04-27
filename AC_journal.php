<!DOCTYPE html>
<head>
    <title>Journal</title>
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
                <li><a href="AC_alimentation.php">Alimentation</a></li>
            </ul>
        </nav>
        <a class="connecter-button" href="SC_accueil.php">Accueil</a>
        <a class="connecter-button" href="AC_deconnecter.php">Deconnexion</a>
    </header>

    <div class="journal">
        <h2>Journal alimentaire</h2>
        <p>Utilisez notre journal alimentaire pour suivre ce que vous mangez chaque jour. Cela vous permettra de detecter vos habitudes alimentaires, d ameliorer vos repas et de faire des ajustements pour atteindre vos objectifs nutritionnels.</p>
        
        <form action="AC_journalAlimentationForm.php" method="post" >
            <h3>Ajouter un repas</h3>
            <label for="date">Date :</label><br>
            <input type="date" name="date" id="date">

            <label for="time">Heure :</label><br>
            <input type="time" name="time" id="time">

            <label for="meal-type">Type de repas :</label><br>
            <select name="meal-type" id="meal-type">
                <option value="petit-dejeuner">Petit-dejeuner</option>
                <option value="dejeuner">Dejeuner</option>
                <option value="gouter">Goûter</option>
                <option value="diner">Dîner</option>
                <option value="collation">Collation</option>
            </select>

            <div class="aliment">
                <label for="food">Aliments consommes :</label>
                <input type="text" name="food" id="food">

                <label for="quantity">Quantite (g) :</label>
                <input type="number" name="quantity" id="quantity">

            </div>

            
            
            <input type="submit" value="Ajouter">
        </form>

        <br><br>

        <a href="AC_profil.html">Voir les Jours precedents</a>
    </div>

    <div class="journal">
        <h2>Journal des activites</h2>
        <p>Utilisez notre journal des activites pour suivre vos activites physique au fil des jours. Cela vous permettra de detecter vos habitudes, d amelioreret de faire des ajustements pour atteindre vos objectifs sportifs.</p>
        <form action="AC_journalActiviteForm.php" method="post" >
            <h3>Ajouter une activite</h3>
            <label for="date">Date :</label><br>
            <input type="date" name="date" id="date">

            <label for="time">Heure :</label><br>
            <input type="time" name="time" id="time">

            <label for="type">Type d activite :</label><br>
            <select name="type" id="type">
                <option value="">Athletisme (course, marche, corde à sauter...)</option>
                <option value="">Natation</option>
                <option value="">Sport en equipe (basket, football, handball...)</option>
                <option value="">Sport en salle</option>
                <option value="">Danse</option>
                <option value="">Pilate ou Yoga</option>
            </select><br>

            <label for="food">Temps d activite :</label><br>
            <input type="time" name="temps" id="temps">
            
            <input type="submit" value="Ajouter">
        </form>

        <br><br>

        
    </div>

    <div class="journal">
        <form id="formconsult">
            <label for="date">Consulter mes activités :</label><br>
            <input type="date" name="date" id="dateconsult"> 
            
            <input type="submit" value="Consulter">
        </form>

        <br><div id="consult"></div>
    </div>

    
    <footer>
        <h3>Contacter Nous</h3>
        <p>Cergy, France <br>Phone: +33 123 456 789 <br>Email: Cytech@myhappynutrition.com</p>
        <p>&copy; 2023  CY Tech</p>
    </footer>

    <script>

        const form = document.querySelector('form');
        const dateInput = document.querySelector('input[type="date"]');

        document.addEventListener('DOMContentLoaded', () => {

        form.addEventListener("submit", (e) => {
            e.preventDefault();

            const currentDate = new Date();
            const enteredDate = new Date(dateInput.value);

            if (enteredDate > currentDate) {
                alert("La date ne peut pas etre dans le futur");
                exit();
            } 
           else {
                form.submit(); 
            }

        })
    });

    document.getElementById("formconsult").addEventListener("submit", function (e) {
        e.preventDefault();

    <?php 
        session_start();
        include "BD_connexion.php";

        $id= $_SESSION['id'];
        $date=$_POST['dateconsult'];

        $sql = "SELECT * FROM alimentation WHERE ID='$id'AND DATE='$date' ";
        $result = mysqli_query($conn, $sql);
        echo $result;

        $_SESSION['consult']=$result;

        $conn->close();
       ?>
       oui = <?php echo json_encode($_SESSION['consult'])?>;
       const resultat = document.getElementById("consult");
        resultat.textContent = `Vos besoins caloriques journaliers sont de ${oui} calories.`;
    });
    </script>
    
</body>
</html>