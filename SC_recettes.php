<!DOCTYPE html>
<head>
    <title>Recettes</title>
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
        h2 {
            width: fit-content;
            margin: 50px auto;
            padding: 15px;
            background-color: rgb(255, 255, 255,0.9);
            border-radius: 15px;
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

        /*Recette du Jour*/
        .recipe-card {
            display: flex;
            align-items: center;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0px 2px 10px rgba(0,0,0,0.3);
            width: 800px;
            margin: auto;
            transition: all 0.3s;
        }
        .recipe-card:hover {
            box-shadow: 0px 2px 25px rgba(0,0,0,0.7);
        }

        .recipe-card img {
            width: 300px;
            height: 250px;
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;
            object-fit: cover;
        }

        .recipe-details {
            padding: 20px;
        }

        .recipe-details a {
            padding: 10px 20px;
            background-color: #E42D2D;
            color: #fff;
            font-size: 16px;
            text-decoration: none;
            border-radius: 10px;
            margin: 25px;
            transition: all 0.3s;
        }

        .recipe-details a:hover {
            background-color: #971c1c;
        }

        /*Plus de recette*/
        .plusRecettes{
            text-align: center;
            margin: 100px;
        }
        .plusRecettes a{
            text-decoration: none;
            font-weight: bold;
            background-color: #E42D2D;
            color: #fff;
            padding: 15px;
            border-radius: 15px;
            transition: all 0.3s;
        }
        .plusRecettes a:hover{
            background-color: #971c1c;
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


    <h2>Recette du Jour</h2>
    <div class="recipe-card">
        <img src="IM_Sandwich.jpg">
        <div class="recipe-details">
            <h3>Sandwich au fromage</h3>
            <p>Un sandwich simple et délicieux qui plaira à tous.</p>
            <a href="https://www.papillesetpupilles.fr/2016/05/grilled-cheese-ou-sandwich-au-fromage-fondu.html/">Voir la Recette</a>
        </div>
    </div>


    <h2>Recette d'hier</h2>
    <div class="recipe-card">
        <img src="IM_saladeNicoise.jpeg">
        <div class="recipe-details">
            <h3> Salade Niçoise </h3>
            <p>Une salade légère mais bien rempli.</p>
            <a href="https://www.marmiton.org/recettes/recette_salade-cesar_32442.aspx">Voir la Recette</a>
        </div>
    </div>


    <h2>Autres recettes</h2>
    <div class="recipe-card">
        <img src="IM_chickenParmesan.jpg">
        <div class="recipe-details">
            <h3>Poulet à la Parmesane</h3>
            <p>Un plat italien classique, parfait pour toutes les occasion.</p>
            <a href="https://chefcuisto.com/recette/poulet-parmesan-la-meilleure/">Voir la Recette</a>
        </div>
    </div>
    <br>

    <div class="recipe-card">
        <img src="IM_avocado--scaled.jpeg">
        <div class="recipe-details">
            <h3>Toast à l'avocat</h3>
            <p>Petit-déjeuner sain et rapide ou snack facile à préparer.</p>
            <a href="https://www.papillesetpupilles.fr/2016/05/grilled-cheese-ou-sandwich-au-fromage-fondu.html/">Voir la Recette</a>
        </div>
    </div>


    <div class="plusRecettes">
        <a href="https://www.marmiton.org/recettes">RETROUVER PLUS DE RECETTES ICI</a>
    </div>

    <footer>
        <h3>Contacter Nous</h3>
        <p>Cergy, France <br>Phone: +33 123 456 789 <br>Email: Cytech@myhappynutrition.com</p>
        <p>&copy; 2023  CY Tech</p>
    </footer>

</body>
</html>