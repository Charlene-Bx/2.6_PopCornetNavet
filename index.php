<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./asset/node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./asset/node_modules/normalize.css/normalize.css">
    <link rel="stylesheet" href="./asset/style/style.css">
</head>
<body>
    <article>
        <form action="./asset/authentification.php" method="POST">
            <div>
                <label for="eMail">Adresse e-mail:</label>
                <input type="text" name="eMail" id="eMail">
            </div>
            <div>
                <label for="MdP">Mot de passe:</label>
                <input type="text" name="MdP" id="MdP">
            </div>
            <div>
                <button type="submit">Me connecter</button>
            </div>
        </form>
        <div>
            <ul>
                <li><a href="newAccount.php">Créer un nouveau compte</a></li>
                <li><a href="newPassword.php">Mot de passe oublié?</a></li>
            </ul>
        </div>
    </article>
<script src="./asset/js/index.js"></script>
</body>
</html>