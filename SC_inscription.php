<!doctype html>

<head>
    <title>Inscription</title>
    <style>
        body {
            background-image: url('IM_background.png');
            background-attachment: fixed;
            background-size: 1000px;
            text-align: center;
            color: rgb(49, 31, 31);
            font-size: 15px;
        }

        .container {
            width: 35%;
            height: 80%;
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

        input[type="text"], input[type="password"], input[type="number"],select {
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
        <form action="SC_inscriptionForm.php" method="post">

            <label for="username">Identifiant:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>

            <label for="password">Mot de Passe:</label>
            <input type="password" id="password" name="password" required>

            <label for="maladie">Maladie chronique:</label>
            <select id="maladie" name="maladie" required>
                <option value="Aucune">Aucune</option>
                <option value="Diabète">Diabète</option>
                <option value="Asthme">Asthme</option>
                <option value="Cancer">Cancer</option>
                <option value="VIH">VIH</option>
            </select>

            
            <input type="submit" value="S'inscrire">
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            
            const form = document.querySelector('form');

            form.addEventListener("submit", (e) => {
                e.preventDefault()

                const username = document.getElementById('username').value.trim();
                const email = document.getElementById('email').value.trim();
                const password = document.getElementById('password').value;
                const maladie = document.getElementById("maladie").value;

                if (!isValidUsername(username)) {
                    alert('Votre identifiant doit faire entre 4 et 20 caractères');
                    username.focus();
                    exit();
                }

                if (!isValidEmail(email)) {
                    alert('Veuillez entrer un e-mail valide.');
                    email.focus();
                    exit();
                }
                
                if (!isValidPassword(password)) {
                    alert('Le mot de passe doit contenir au moins 8 caractères, un chiffre et une majuscule.');
                    password.focus();
                    exit();
                }

                alert('Inscription reussie !');
                form.submit();
            });
        });

        function isValidEmail(email) {
            const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        }

        function isValidUsername(username) {
            const minLength = 4;
            const maxLength = 20;
            return username.length >= minLength && username.length <= maxLength;
        }

        function isValidPassword(password) {
            const minLength = 8;
            const maxLength = 15;
            const hasNumber = /[0-9]/;
            const hasUpperCase = /[A-Z]/;

            return password.length <= maxLength && password.length >= minLength && hasNumber.test(password) && hasUpperCase.test(password);
        }

    </script>

</body>
</html>
