<?php



?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP / MySQL, notre Formulaire</title>
    <link rel="stylesheet" href="./design/default.css" />
</head>
<body>
    <header>
        <h1>Incription</h1>
    </header>
    <div class="container">
        <p>BIenvenue sur mon site, pour en voir plus, inscrivez-vous. Sinon, <a href="connection.php">connectez-vous</a>.</p>
        <form method="post" action="index.php">
            <table>
                    <tr>
                        <td>Pseudo</td>
                        <td><input type="text" name="pseudo" placeholder="Ex: Nicolas" /></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" placeholder="Ex: google@gmail.com" /></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" placeholder="Ex:****" /></td>
                    </tr>
                    <tr>
                        <td>Confirmation password</td>
                        <td><input type="password" name="password_confirm"   placeholder="Ex:****" /></td>
                    </tr>
            </table>
            <button type="submit" name="">Valider inscription</button>
        </form>
    </div>
</body>
</html>