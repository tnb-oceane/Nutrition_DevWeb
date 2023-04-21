<!doctype html>
<form action="inscription.php" method="post">


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

        input[type="text"], input[type="password"], input[type="number"] {
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

        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>
        
        


            <label for="username">Identifiant:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>

            <label for="password">Mot de Passe:</label>
            <input type="password" id="password" name="password" required>

            <label for="height">Maladie: </label>
            <input type="number" id="height" name="maladie" required>

            
            
            <input type="submit" value="S'inscrire">
        </form>
    </div>
</body>
</html>
