<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <style>
        body {
            background-image: url("IM_background.png");
            background-attachment: fixed;
            background-size: 1000px;
            text-align: center;
            color: rgb(49, 31, 31);
            font-size: 15px;
        }

        .container {
            width: 35%;
            height: 85%;
            padding: 20px;
            background-color: rgb(111, 190, 62,0.9);
            border-radius: 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);
            position: absolute;
            top: 7%;
            left: 30%;
        }

        h1 {
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 45px;
        }

        label {
            display: block;
        }

        input[type="text"], input[type="password"], input[type="number"], input[type="email"] {
            width: 60%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            margin-bottom: 40px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
        }

        input[type="submit"] {
            display: block;
            margin: auto;
            background-color: #237726;
            color: #fff;
            border: none;
            padding: 15px;
            border-radius: 15px;
            cursor: pointer;
            font-weight: bold;
        }
        input[type="submit"]:hover {
            background-color: #3f2377;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>INSCRIPTION</h1>
        <form action="inscription.php" method="post" autocomplete="off">
            <label for="username">Identifiant:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required>

            <label for="maladie">Maladie:</label>
            <input type="text" id="maladie" name="maladie" required>

            <input type="submit" value="S'inscrire">
</form>
        <p> je n'ai pas de compte encore </p>
        <a href="SC_connecter.php">connecter</a>
    </div>
</body>
</html>

