<?php
    echo $_ENV["USER"] 
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
        <h1>Connexion</h1>
    </header>
    <div class="container">
        <p>BIenvenue sur mon site, si vous n'etes pas inscrit, inscrivez-vous <a href="index.php">inscrivez-vous</a>.</p>
        <form method="post" action="connection.php">
            <table>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" placeholder="Ex: google@gmail.com" /></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" placeholder="Ex:****" /></td>
                    </tr>
            </table>
            <button type="submit" name="">Connexion</button>
        </form>
    </div>
</body>
</html>