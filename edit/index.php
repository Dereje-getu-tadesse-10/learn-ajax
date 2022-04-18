<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$bd= new PDO('mysql:host=localhost;dbname=db_icy', 'root', 'root');
$getUsers = $bd->query('SELECT * FROM users');
while ($getd = $getUsers->fetch(PDO::FETCH_ASSOC)) 
{
   ?>
   <div>
        <h1><?= $getd['prenom']; ?></h1>
        <p><?= $getd['nom']; ?></p>
        <a href="edit-page.php" id=" id="<?= $getd['id']; ?>">Edit</a>
        <button class="btn" id="<?= $getd['id']; ?>">Delete</button>       
    </div> 
    <?php
}
?>
</body>
</html>