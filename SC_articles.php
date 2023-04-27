<?php 
    session_start();
?>
<!DOCTYPE html>
<head>
    <title>Articles</title>
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

        /*Actualite*/
        .card, .maladie {
            display: flex;
            align-items: center;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0px 2px 10px rgba(0,0,0,0.3);
            width: 800px;
            margin: 30px auto;
            transition: all 0.3s;
        }
        .card:hover {
            box-shadow: 0px 2px 25px rgba(0,0,0,0.7);
        }

        .card img {
            width: 300px;
            height: 250px;
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;
            object-fit: cover;
        }

        .details {
            padding: 20px;
        }

        .details a, .maladie a {
            padding: 10px 20px;
            background-color: #2a33d5;
            color: #fff;
            font-size: 16px;
            text-decoration: none;
            border-radius: 10px;
            margin: 25px;
            transition: all 0.3s;
        }
        .details a:hover {
            background-color: #0c1393;
        }

        /*Plus d articles*/
        .plusArticle{
            text-align: center;
            margin: 100px;
        }
        .plusArticle a{
            text-decoration: none;
            font-weight: bold;
            background-color: #2a33d5;
            color: #fff;
            padding: 15px;
            border-radius: 15px;
            transition: all 0.3s;
        }
        .plusArticle a:hover{
            background-color: #0c1393;
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

    <div class="maladie">
    <?php 

        $maladie= $_SESSION['maladie'];

        if ($maladie=='Asthme'){
            echo "<h3>Vous êtes Asthmatique ! Nous vous conseillons cette article :</h3><br>";
            echo "<a href='https://www.santepubliquefrance.fr/maladies-et-traumatismes/maladies-et-infections-respiratoires/asthme'>Voir l'article</a>";
        }
        if ($maladie=='Cancer'){
            echo "<h3>Vous êtes atteint du Cancer ! Nous vous conseillons cette article :</h3><br>";
            echo "<a href='https://www.santepubliquefrance.fr/maladies-et-traumatismes/cancers'>Voir l'article</a>";
        }
        if ($maladie=='Diabète'){
            echo "<h3>Vous êtes Diabétique ! Nous vous conseillons cette article :</h3><br>";
            echo "<a href='https://www.santepubliquefrance.fr/les-actualites/2021/le-diabete-en-france-les-chiffres-2020'>Voir l'article</a>";
        }
        if ($maladie=='VIH'){
            echo "<h3>Vous êtes atteint du VIH ! Nous vous conseillons cette article :</h3><br>";
            echo "<a href='https://www.santepubliquefrance.fr/presse/2022/journee-mondiale-de-lutte-contre-le-sida-le-depistage-reste-indispensable-pour-lutter-contre-le-vih'>Voir l'article</a>";
        }

       ?>

    </div>

    <h2> Actualité Santé</h2>
    <div class="card">
        <img src="IM_grippeAviaire.jpg" alt="Grippe_Aviaire">
        <div class="details">
            <h3>Grippe Aviaire</h3>
            <p>Quelles est la situation actuelle en France ?</p>
            <a href="https://www.santepubliquefrance.fr/les-actualites/2023/grippe-aviaire-quelle-est-la-situation-en-france-et-dans-le-monde">Voir l'article</a>
        </div>
    </div>


    <div class="card">
        <img src="IM_tuberculose.jpg" alt="Tuberculose">
        <div class="details">
            <h3> Tuberculose </h3>
            <p>Les chiffres de 2021.</p>
            <a href="https://www.santepubliquefrance.fr/les-actualites/2023/tuberculose-en-france-les-chiffres-2021">Voir l'article</a>
        </div>
    </div>


    <div class="card">
        <img src="IM_resolution.jfif" alt="Résolutions">
        <div class="details">
            <h3>Les résolutions 2023</h3>
            <p>Conseils et astuces pour adopter les bons gestes.</p>
            <a href="https://www.santepubliquefrance.fr/les-actualites/2023/les-bonnes-resolutions-2023-conseils-et-astuces-pour-adopter-les-bons-gestes">Voir l'article</a>
        </div>
    </div>
    

    <div class="card">
        <img src="IM_santePublique.jpg" alt="Santé_Publique">
        <div class="details">
            <h3>Santé publique France</h3>
            <p>Rétrospective de l'année 2022.</p>
            <a href="https://www.santepubliquefrance.fr/les-actualites/2023/sante-publique-france-retrospective-de-l-annee-2022">Voir l'article</a>
        </div>
    </div>


    <div class="plusArticle">
        <a href="https://www.santepubliquefrance.fr/les-actualites">RETROUVER PLUS D'ARTICLES ICI</a>
    </div>

    <footer>
        <h3>Contacter Nous</h3>
        <p>Cergy, France <br>Phone: +33 123 456 789 <br>Email: Cytech@myhappynutrition.com</p>
        <p>&copy; 2023  CY Tech</p>
    </footer>

</body>
</html>