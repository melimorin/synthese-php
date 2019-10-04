<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TO DO list</title>
</head>
<body>
    <h1>TO DO LIST</h1>

    <?php

        foreach($todos as $todo) { ?>
        <div>
            <p><?php echo $todo["titre"]; ?></p>
            
         </div>
         <?php }
    ?>
</body>
</html>
