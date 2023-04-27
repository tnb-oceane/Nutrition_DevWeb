<!DOCTYPE html>
<head>
    <title>Pratiques Nutritionnelle</title>
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
            margin-left: 10px;
        }
    
        .connecter-button{
            font-size: 25px;
            margin-right: 15px;
        }

        /*Corps de la page*/
        body {
            font-family: Arial, sans-serif;
            background-image: url( IM_background.png );
            background-size: 1000px;
            background-attachment: fixed;
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

        /*Pratiques*/
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            font-size: 20px;
            color: #333;
            margin: 40px;
            text-align: center;
        }
        .container li {
            margin: 20px;
            padding: 10px;
            background-color: rgba(141, 222, 147, 0.221);
            border-radius: 15px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            font-size: 22px;
            color: #333;
            text-align: center;
            cursor: pointer;
            transition: all 0.5s;
            
        }
        .container li:hover {
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
            background-color: rgba(141, 222, 147, 0.3);
            font-weight: bold;
        }

        /*Site dynamique*/
        @media screen and (max-width: 860px) {
            header nav{
                display: none;
            }
        }

    </style>
</head>

<body>
    <header>
        <h1> Happy Nutrition </h1>
        <nav>
            <ul>
                <li><a href="SC_articles.php">Articles</a></li>
                <li><a href="SC_pratique.php">Pratique nutritionnelle</a></li>
                <li><a href="SC_pratiqueSport.php">Pratique sportive</a></li>
                <li><a href="SC_recettes.php">Recettes</a></li>
                <li><a href="SC_regimes.php">Régimes</a></li>
            </ul>
        </nav>
        <a class="connecter-button" href="SC_accueil.php">Accueil</a>
    </header>

    <div class="container">
        <h2>Groupes d’aliments</h2>
        <p>Il existe cinq principaux groupes d’aliments qui sont importants pour maintenir une alimentation saine:</p>
        <ul>
            <li>Fruits</li>
            <li>Légumes</li>
            <li>Céréales</li>
            <li>Proteïnes</li>
            <li>Laiterie</li>
        </ul>
        <p>Il est recommandé que les adultes consomment un certain nombre de portions de chaque groupe alimentaire chaque jour. Voici une ligne directrice générale :</p>
        <table>
            <tr>
                <th>Groupe alimentaire	</th>
                <th>Portions par jour</th>
            </tr>
            <tr>
                <td>Fruits</td>
                <td>2 tasses</td>
            </tr>
            <tr>
                <td>Légumes</td>
                <td>2.5 tasses</td>
            </tr>
            <tr>
                <td>Céréales</td>
                <td>6 ounces</td>
            </tr>
            <tr>
                <td>Protein</td>
                <td>5.5 ounces</td>
            </tr>
            <tr>
                <td>Laiterie</td>
                <td>3 tasses</td>
            </tr>
        </table>
    </div>

    <div class="container">
        <h2>Contrôle des portions</h2>
        <p>Le contrôle des portions est une partie importante d’une alimentation saine. Voici quelques conseils :</p>
        <ul>
            <li>Utilisez des assiettes et des bols plus petits pour contrôler la taille de vos portions.</li>
            <li>Mesurez vos aliments pour vous assurer que vous mangez la bonne portion.</li>
            <li>Ne mangez pas directement du sac ou du contenant. Étalez votre nourriture dans une assiette ou un bol.</li>
            <li>Mangez lentement et savourez votre nourriture. Cela vous aidera à vous sentir rassasié et satisfait.</li>
        </ul>
    </div>
    
    <div class="container">
        <h2>Manger à l’extérieur</h2>
        <p>Manger à l’extérieur peut être un défi lorsque vous essayez de manger sainement, mais c’est possible. Voici quelques conseils :</p>
        <ul>
            <li>Recherchez des options saines au menu, telles que des viandes grillées ou rôties, des légumes et des salades.</li>
            <li>Demandez des vinaigrettes et des sauces sur le côté afin de pouvoir contrôler la quantité que vous mangez.</li>
            <li>Évitez les aliments frits et les plats avec beaucoup de fromage ou de crème.</li>
            <li>Partagez votre repas avec un ami ou emportez-en la moitié à la maison pour plus tard.</li>
        </ul>
    </div>
    
    <div class="container">
        <h2>Avantages</h2>
        <p>Une alimentation saine présente de nombreux avantages:</p>
        <ul>
            <li>Aide à maintenir un poids santé</li>
            <li>Réduit le risque de maladies chroniques, telles que les maladies cardiaques et le diabète</li>
            <li>Fournit des nutriments essentiels pour la santé globale</li>
            <li>Améliore l’humeur et les niveaux d’énergie</li>
            <li>Vous aide à vous sentir et à paraître à votre meilleur</li>
        </ul>
    </div>
    
    <div class="container">
        <h2>Snacks</h2>
        <p>Les snacks peuvent aussi faire partie d'une alimentation saine, il suffit de choisir les bons snacks et en bonne quantité. Voici quelques options saines:</p>
        <ul>
            <li>Fruits ou légumes avec du beurre de cacahuète ou du houmous</li>
            <li>Yaourt à la grec avec des fraises et des noix</li>
            <li>Popcorns</li>
            <li>Oeufs dur</li>
            <li>Noix et fruits secs</li>
        </ul>
    </div>

    <footer>
        <h3>Contacter Nous</h3>
        <p>Cergy, France <br>Phone: +33 123 456 789 <br>Email: Cytech@myhappynutrition.com</p>
        <p>&copy; 2023  CY Tech</p>
    </footer>

</body>
</html>