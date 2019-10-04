<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="modifierSubmit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $nom["id"]; ?>">
        <input type="text" name="titre" placeholder="" value="<?php echo $nom["titre"]; ?>">
        <input type="submit" value="Modifier">
    </form>
</body>
</html>
