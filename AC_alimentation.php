<?php
session_start();
include "BD_connexion.php";
?>
<!DOCTYPE html>
<head>
    <title>Alimentation</title>
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


        /*Footer */
        footer {
            background-color: #6fbe3e;
            padding: 2px;
            text-align: center;
            color: #fff;  
            border-top-right-radius: 75px;
            border-top-left-radius: 75px;
        }

        /*IMC*/
        .IMC, .alimentation{
            background-color: rgba(141, 222, 147, 0.221);
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            border-radius: 15px;
            padding: 20px;
            margin: 50px;
            text-align: center;
            cursor: pointer;
            transition: all 0.5s;
        }
        .IMC:hover, .alimentation:hover{
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
            font-size: 15px;
            background-color: #237726;
            color: #fff;
            border: none;
            padding: 15px;
            border-radius: 15px;
            cursor: pointer;
            display: block;
            font-weight: bold;
            transition: all 0.5s;
        }
        input[type="submit"]:hover {
            background-color: #3f2377;
        }

        /*Liste*/
        .IMC li, .alimentation li {
            margin: 20px;
            padding: 10px;
            border-radius: 15px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            color: #333;
            text-align: center;
            cursor: pointer;
            transition: all 0.5s;
            
        }
        .IMC li:hover, .alimentation li:hover {
            background-color: rgba(37, 137, 44, 0.221);
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.7);   
        }
        /*Tableau*/
        table {
            margin: 0 auto;
            width: 50%;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #237726;
            font-weight: bold;
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

    <div class="IMC">
        <h2>Qu'est-ce que l'IMC ?</h2>
        <p>L'indice de masse corporelle (IMC) est un indicateur qui permet d'évaluer rapidement la corpulence d'une personne en utilisant son poids et sa taille. Il est utilisé pour évaluer les risques de maladies liées au poids, telles que le diabète, les maladies cardiaques et certains types de cancer.</p><br>

        <div id="imc">

            <h3>Calculer son IMC</h3>
            <form>
                <label for="weight">Poids (kg) :</label><br>
                <input type="number" id="weight" name="weight" required>
                
                <label for="height">Taille (cm) :</label><br>
                <input type="number" step="0.01" id="height" name="height" required>
                
                <input type="submit" value="Calculer"><br>

            </form>

            <form id="calculIMCdonnes" action="">
                <input type="submit" value="Calculer à partir de mes donnees personnelles">
            </form>

            <br><div id="imcResult" class="imcResult"></div><br>


            <h3>Catégories de l'IMC</h3>
            <table>
                <tr>
                    <th>IMC</th>
                    <th>Catégorie</th>
                </tr>
                <tr>
                    <td>moins de 18,5</td>
                    <td>Sous-poids</td>
                </tr>
                <tr>
                    <td>18,5 a 24,9</td>
                    <td>Poids santé</td>
                </tr>
                <tr>
                    <td>25 a 29,9</td>
                    <td>Surpoids</td>
                </tr>
                <tr>
                    <td>30 a 34,9</td>
                    <td>Obésite de classe 1</td>
                </tr>
                <tr>
                    <td>35 a 39,9</td>
                    <td>Obésite de classe 2</td>
                </tr>
                <tr>
                    <td>40 et plus</td>
                    <td>Obésite de classe 3</td>
                </tr>
            </table><br>
    
            <h3>Conseils pour maintenir un poids santé</h3>
            <ul>
                <li>Manger une alimentation équilibrée avec une variété d'aliments sains, comme des fruits, des légumes, des céréales complètes, des protéïnes maigres et des graisses saines</li>
                <li>Faire de l'exercice régulierement</li>
                <li>Boire suffisamment d'eau</li>
                <li>Limiter la consommation d'aliments riches en calories, en gras saturés, en sucre et en sel</li>
                <li>Eviter de manger des repas trop copieux ou de grignoter entre les repas</li>
                <li>Dormir suffisamment pour permettre au corps de récuperer</li>
                <li>Eviter de fumer ou de consommer de l'alcool en excès</li>
            </ul>

            
    
        </div>
    </div>


    <div class="alimentation">

        <h2>Calculer vos besoins journaliers en alimentation</h2>
        <form id="calculBesoinsdonnes" action="">
            <input type="submit" value="Calculer à partir de mes donnees personnelles">
        </form>
        <br><div id="resultat1"></div>

        <h3>Calculer à partir de nouvelles données</h3>
        <p>Remplissez le formulaire ci-dessous pour calculer vos besoins caloriques à partir de nouvelles données.</p>
      
        <form id="form">
            <label for="sexe">Sexe :</label><br>
            <select id="sexe" name="sexe">
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
            </select><br>
        
            <label for="age">Age :</label><br>
            <input type="number" id="age" name="age" required><br>
        
            <label for="poids">Poids (kg) :</label><br>
            <input type="number" id="poids" name="poids" required><br>
        
            <label for="taille">Taille (cm) :</label><br>
            <input type="number" id="taille" name="taille" required><br>
        
            <label for="niveau-activite">Niveau d activite physique :</label><br>
            <select id="niveau-activite" name="niveau-activite" required>
                <option value="1.2">Sédentaire (peu ou pas d'exercice)</option>
                <option value="1.375">Modéré (exercice leger 1 à 3 jours par semaine)</option>
                <option value="1.55">Actif (exercice modere 3 à 5 jours par semaine)</option>
                <option value="1.725">Très actif (exercice intense 6 à 7 jours par semaine)</option>
            </select><br>
        
            <input type="submit" value="Calculer">
        </form>
      
        <br><div id="resultat"></div>

        <h3>Recommandations :</h3>
        <p>Voici quelques aliments sains recommandes pour repondre a vos besoins en nutriments :</p>
        <ul>
            <li>Aliments riches en protéïnes : poulet, poisson, légumineuses, noix, graines.</li>
            <li>Aliments riches en glucides : fruits, légumes, céréales complètes, légumineuses.</li>
            <li>Aliments riches en lipides : avocats, noix, huiles végétales, poissons gras.</li>
        </ul>
    
    </div>    

    
    <div class="alimentation">
        <form id="formPas">
            <h2>Calculer votre nombre de pas</h2>
            <label for="kilometre">Nombre de kilometre :</label><br>
            <input type="number" id="kilometre" name="kilometre" required><br>

            <input type="submit" value="Calculer">

            <br><div id="resultatPas"></div>
        </form>
          
    </div>

    
    <footer>
        <h3>Contacter Nous</h3>
        <p>Cergy, France <br>Phone: +33 123 456 789 <br>Email: Cytech@myhappynutrition.com</p>
        <p>&copy; 2023  CY Tech</p>
    </footer>

          
    <script>
        // Selection des elements du DOM
        const form = document.querySelector('form');
        const imcResult = document.querySelector('#imcResult');

        // Fonction de calcul de l IMC
        function calculateBMI(weight, height) {
            const heightMeters = height / 100;
            return weight / (heightMeters * heightMeters);
        }

        // Fonction de gestion de l evenement de soumission du formulaire
        function handleFormSubmit(event) {
        event.preventDefault(); //empeche lenvoi du formulaire

        const weight = parseFloat(document.querySelector('#weight').value);
        const height = parseFloat(document.querySelector('#height').value);

        const bmi = calculateBMI(weight, height);
        imcResult.textContent = `Votre IMC est de ${bmi.toFixed(2)}`;
        }

        // Ajout d un ecouteur d evenements sur la soumission du formulaire
        form.addEventListener('submit', handleFormSubmit);


    function calculerBesoinsCaloriques(sexe, age, poids, taille, niveauActivite) {
      let bmr;
  
      if (sexe === "homme") {
        bmr = 88.36 + (13.397 * poids) + (4.799 * taille) - (5.677 * age);
      }else {
        bmr = 447.593 + (9.247 * poids) + (3.098 * taille) - (4.330 * age);
      }
  
      return Math.round(bmr * niveauActivite);
    }
  
    document.getElementById("form").addEventListener("submit", function (e) {
       e.preventDefault();
    
        const sexe = document.getElementById("sexe").value;
        const age = parseFloat(document.getElementById("age").value);
        const poids = parseFloat(document.getElementById("poids").value);
        const taille = parseFloat(document.getElementById("taille").value);
        const niveauActivite = parseFloat(document.getElementById("niveau-activite").value);
        const besoinsCaloriques = calculerBesoinsCaloriques(sexe, age, poids, taille, niveauActivite);
        const resultat = document.getElementById("resultat");
        resultat.textContent = `Vos besoins caloriques journaliers sont de ${besoinsCaloriques} calories.`;
    });

  
    document.getElementById("formPas").addEventListener("submit", function (e) {
       e.preventDefault();
        const kilometre = document.getElementById('kilometre').value;
        let pas = kilometre*700;
        const resultatPas = document.getElementById("resultatPas");
        resultatPas.textContent = `Vous avez fait ${pas} pas aujourd'hui.`;
    });


    document.getElementById("calculIMCdonnes").addEventListener("submit", function (e) {
        e.preventDefault();
       const taille = <?php if (isset($_SESSION['taille'])) {echo json_encode($_SESSION['taille']);}else{echo 1;} ?>;
       const poids = <?php if (isset($_SESSION['poids'])) {echo json_encode($_SESSION['poids']);}else{echo 1;} ?>;

        if (taille === 1){
            imcResult.textContent = `Vous n'avez pas de données enregistrées.`;
            exit();
        }
        const IMC= poids/((taille/100)*(taille/100));

        imcResult.textContent = `Votre IMC est de ${IMC.toFixed(2)}`;
    });


    document.getElementById("calculBesoinsdonnes").addEventListener("submit", function (e) {
        e.preventDefault();

        const taille = <?php if (isset($_SESSION['taille'])) {echo json_encode($_SESSION['taille']);}else{echo 1;} ?>;
        const poids = <?php if (isset($_SESSION['poids'])) {echo json_encode($_SESSION['poids']);}else{echo 1;} ?>;
        const sexe = <?php if (isset($_SESSION['sexe'])) {echo json_encode($_SESSION['sexe']);}else{echo json_encode('alala');} ?>;
        const age = <?php if (isset($_SESSION['age'])) {echo json_encode($_SESSION['age']);}else{echo 1;} ?>;
        const activite = <?php if (isset($_SESSION['activite'])) { if ($_SESSION['activite']=='sedentaire'){echo 1.2;}if ($_SESSION['activite']=='modere'){echo 1.375;}if ($_SESSION['activite']=='actif'){echo 1.55;}if ($_SESSION['activite']=='tres-actif'){echo 1.725;}}else{echo json_encode(0);} ?>;

        const resultat = document.getElementById("resultat1");


        if (taille === 1){
            resultat.textContent = `Vous n'avez pas de données enregistrées.`;
            exit();
        }

        const besoinsCaloriques = calculerBesoinsCaloriques(sexe, age, poids, taille, activite);
        resultat.textContent = `Vos besoins caloriques journaliers sont de ${besoinsCaloriques} calories.`;
        
        
        
        

    });

</script>

</body>
</html>
