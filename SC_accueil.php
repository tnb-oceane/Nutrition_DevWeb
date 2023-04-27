
<!DOCTYPE html>
<head>
    <title>Accueil</title>
    <style>

        /* Header */
        header {
            background-color: #6fbe3e;
            border-bottom-left-radius: 55px;
            border-bottom-right-radius: 55px;
            color: #fff;
            padding: 20px;
            position: fixed;
            width: 98%;
            top: 0%;
            left: 0%;
            right: 0%;
        }

        h1 {
            font-size: 80px;
            font-weight: bold;
            text-align: center;
            font-family: Georgia,  Times New Roman , Times, serif;
            margin-top: 0%;
            margin-bottom: 0%;
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
            margin-left: 25px;
        }
        
        .connecter-button{
            float: left;
            font-size: 25px;
            margin-right: 15px;
        }

        /*Corps de la page*/
        body{
            background-image: url( IM_background.png );
            background-size: 1000px;
            background-attachment: fixed;
        }

        .texteaccueil{
            background-color: rgb(255, 255, 255,0.9);
            padding: 20px;
            margin-top: 300px;
            margin-bottom: 120px;
            border-radius: 15px;
        }
        .texteaccueil h2{
            text-align: center;
            font-size: 45px;
        }

        .explicationSite{
            text-align: center;
            font-size: 45px;
            font-family: Georgia,  Times New Roman , Times, serif;
        }

        .article-container{
            padding: 20px;
            margin: auto;
            margin-bottom: 200px;
            border-radius: 40px;
            width: 92%;
        }
        .article-container h2{
            text-align: center; 
        }
        .article-container a:hover{
            background-color: rgba(29, 22, 22, 0.7);
        }
        .article-container a{
            text-decoration: none;
            color: #fff;
            background-color: rgba(29, 22, 22, 0.4);
            border-radius: 15px;
            padding: 15px;
        }
        .article{
            background-color: rgb(70, 139, 244);
        }
        .pratique{
            background-color: rgb(220, 220, 7);
        }
        .pratiqueSport{
            background-color: rgba(128, 79, 129);
        }
        .recette{
            background-color: rgb(143, 35, 35);
        }
        .regime{
            background-color: rgb(222, 184, 135);
        }

        /*Carte articles*/
        .card {
            width: 400px;
            height: 300px;
            background: white;
            padding: .4em;
            border-radius: 50px;
            margin: 20px;
            text-align: center;
            font-size: 25px;
            font-weight: bold;
        }

        .card-image {
            background-color: rgb(236, 236, 236);
            margin: auto;
            width: 100%;
            height: 85%;
            border-radius: 50px 50px 0 0;
            object-fit: cover;
        }
        
        table{
            margin: auto;
        }

        /*Footer */
        footer {
            background-color: rgb(111, 190, 62);
            padding: 2px;
            text-align: center;
            color: #fff;  
            border-top-right-radius: 75px;
            border-top-left-radius: 75px;
        }

        /*Site dynamique*/
        @media screen and (max-width: 1200px) {
            header nav{
                display: none;
            }
        }
        @media screen and (max-width: 1450px) {
            .carte3{
                display: none;
            }
        }
        @media screen and (max-width: 1010px) {
            .carte2{
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
                <li><a class="active" href="SC_articles.php">Articles</a></li>
                <li><a href="SC_pratique.php">Pratique nutritionnelle</a></li>
                <li><a href="SC_pratiqueSport.php">Pratique sportive</a></li>
                <li><a href="SC_recettes.php">Recettes</a></li>
                <li><a href="SC_regimes.php">Régimes</a></li>
            </ul>
        </nav>
        <a class="connecter-button" href="SC_connecter.php">Se Connecter</a>
        <a class="connecter-button" href="SC_inscription.php">S'inscrire</a>
    </header>

    <div class="texteaccueil">
        <h2>Pour un meilleur quotidien</h2>
        <p class="explicationSite">
            Le rythme accéléré de notre vie au quotidien ne nous permet pas d’être attentifs à notre santé et à nos aliments.
            Le site « Happy Nutrition » vous présente les bonnes pratiques pour une meilleur hygiène de vie et une meilleure nutrition.
        </p>
    </div>

    <div class="article-container article">
        <table>
            <td>
                <div class="card carte1">
                    <img class="card-image" src="IM_tuberculose.jpg" alt="Tuberculose">
                    <div class="category"> Tuberculose </div>
                </div>
            </td>
            <td>
                <div class="card carte2">
                    <img class="card-image" src="IM_resolution.jfif" alt="Resolution">
                    <div class="category"> Résolutions 2023 </div>
                </div>
            </td>
            <td>
                <div class="card carte3">
                    <img class="card-image" src="IM_grippeAviaire.jpg" alt="Grippe_Aviaire">
                    <div class="category"> Grippe Aviaire </div>
                </div>
            </td>
        </table>
        <h2><a href="SC_articles.php">Voir tous les articles</a></h2>
    </div>

    <div class="article-container pratique">
        <table>
            <td>
                <div class="card carte1">
                    <img class="card-image" src="IM_groupeAliment.jpg" alt="Groupe_Aliment">
                    <div class="category"> Groupe d'Aliments </div>
                </div>
            </td>
            <td>
                <div class="card carte2">
                    <img class="card-image" src="IM_controlePortion.jpg" alt="Controle_des_Portions">
                    <div class="category"> Contrôle des portions </div>
                </div>
            </td>
            <td>
                <div class="card carte3">
                    <img class="card-image" src="IM_mangerExterieur.jpg" alt="Manger_a_Exterieur">
                    <div class="category"> Manger à l'extérieur </div>
                </div>
            </td>
        </table>
        <h2><a href="SC_pratique.php">Voir toutes les pratiques nutritionnelles</a></h2>
    </div>

    <div class="article-container pratiqueSport">
        <table>
            <td>
                <div class="card carte1">
                    <img class="card-image" src="IM_course.jpeg" alt="Course_a_Pied">
                    <div class="category"> Course à Pied </div>
                </div>
            </td>
            <td>
                <div class="card carte2">
                    <img class="card-image" src="IM_swiming.jpg" alt="Natation">
                    <div class="category"> Natation </div>
                </div>
            </td>
            <td>
                <div class="card carte3">
                    <img class="card-image" src="IM_cyclisme.jpg" alt="Cyclisme">
                    <div class="category"> Clyclisme </div>
                </div>
            </td>
        </table>
        <h2><a href="SC_pratiqueSport.php">Voir toutes les pratiques sportives</a></h2>
    </div>

    <div class="article-container recette">
        <table>
            <td>
                <div class="card carte1">
                    <img class="card-image" src="IM_Sandwich.jpg" alt="Grilled_Cheese">
                    <div class="category"> Sandwich au Fromage </div>
                </div>
            </td>
            <td>
                <div class="card carte2">
                    <img class="card-image" src="IM_chickenParmesan.jpg" alt="Chicken_Parmesan">
                    <div class="category"> Poulet à la Parmesane </div>
                </div>
            </td>
            <td>
                <div class="card carte3">
                    <img class="card-image" src="IM_avocado--scaled.jpeg" alt="Avocado_Toast">
                    <div class="category"> Toast à l'Avocat </div>
                </div>
            </td>
        </table>
        <h2><a href="SC_recettes.php">Voir toutes les recettes</a></h2>
    </div>

    <div class="article-container regime">
        <table>
            <td>
                <div class="card carte1">
                    <img class="card-image" src="IM_dash.png" alt="Dash">
                    <div class="category"> DASH </div>
                </div>
            </td>
            <td>
                <div class="card carte2">
                    <img class="card-image" src="IM_vegan.png" alt="Vegan">
                    <div class="category"> Vegan </div>
                </div>
            </td>
            <td>
                <div class="card carte3">
                    <img class="card-image" src="IM_mediterraneen.png" alt="Mediterraneen">
                    <div class="category"> Méditerranéen </div>
                </div>
            </td>
        </table>
        <h2><a href="SC_regimes.php">Voir tous les régimes</a></h2>
    </div>

    <footer>
        <h3>Contacter Nous</h3>
        <p>Cergy, France <br>Phone: +33 123 456 789 <br>Email: Cytech@myhappynutrition.com</p>
        <p>&copy; 2023  CY Tech</p>
    </footer>


</body>
</html>
