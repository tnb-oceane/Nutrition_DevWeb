<!doctype html>
<html>
<head>
    <title>Se Connecter</title>
    <style>

        /*Carte*/
        .container {
            width: 30%;
            height: 58%;
            padding: 20px;
            background-color: rgb(111, 190, 62,0.9);
            border-radius: 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);
            position: absolute;
            top: 10%;
            left: 34%;
        }

        body{
            background-image: url("IM_background.png");
            background-attachment: fixed;
            background-size: 1000px;
            text-align: center;
            color: rgb(49, 31, 31);
        }

        h1 {
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 45px;
        }
        
        label{
            display: block;
        }

        input[type="text"], input[type="password"] {
            width:  60%;
            padding: 10px;
            border-radius: 5px;
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
            cursor: pointer;
            display: block;
            font-weight: bold;
        }
        input[type="submit"]:hover {
            background-color: #3f2377;
        }

        .inscription {
            background-color: #237726;
            color: #fff;
            text-decoration: none;
            padding: 15px;
            border-radius: 15px;
            font-weight: bold;
        }
        .inscription:hover {
            background-color: #3f2377;
        }

    </style>
</head>

<body>
    <div class="container">
        <h1>CONNEXION</h1>
        <form action="login_check.php" method="post" autocomplete="off">
            <label for="username">Identifiant:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Mot de Passe:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Se Connecter">
        </form>
        <p>*Je n'ai pas encore de compte*</p>
        <a href="inscription1.php" class="inscription">S'inscrire</a>
    </div>
</body>
</html>
