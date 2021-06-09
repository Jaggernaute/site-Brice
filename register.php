<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>USN 76</title>
</head>
<body>
<form action="core/function/register-core.php" method="post">

    <label for="fname">Prénom :</label><br>
    <input type="text" id="fname" name="fname" ><br>

    <label for="lname">Nom :</label><br>
    <input type="text" id="lname" name="lname"><br><br>

    <label for="mail">mail :</label><br>
    <input type="text" id="mail" name="mail"><br><br>

    <label for="password">Mot de passe :</label><br>
    <input type="password" id="password" name="password"><br><br>

    <input type="radio" id="admin" name="privileges" value="1">
    <label for="admin">admin</label><br>
    <input type="radio" id="user" name="privileges" value="2">
    <label for="user">user</label><br>

    <input type="submit" value="Submit">
</form>
</body>
</html>

