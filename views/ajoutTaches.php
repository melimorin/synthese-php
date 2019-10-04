<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Page ajout</title>
</head>
<body>
<!-- formulaire d'ajout des actualites -->
    <h1>Page d'ajout</h1>
    <form action="ajoutSucces.php" method="post">
        <input type="text" name="titre" placeholder="Titre de la tache"> <br>
        <label for="priorite">1 = Pas prioritaire 10 = Urgence</label> <br>
        <input type="number" name="priorite" min="1" max="10">
        <input type="submit" value="Enregister">
    </form>
</body>
</html>

