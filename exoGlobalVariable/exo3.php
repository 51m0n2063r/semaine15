<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action=".php" method="POST">
    <label>Login : </label><input type="text" name="login">
    <label>Mot de Passe : </label><input type="password" name="mdp">
    <input type="submit" value="OK">
</form>
<?php
    setcookie("login", $_POST["login"]);
    setcookie("mdp", $_POST["mdp"]);
?>
</body>
</html>