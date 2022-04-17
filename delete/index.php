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
   <div class="menu">
        <h1><?= $getd['prenom']; ?></h1>
        <p><?= $getd['nom']; ?></p>
        <button class="btn" id="<?= $getd['id']; ?>">Delete</button>
       
    </div> 
    <?php
}
?>
<script>
    const btn = document.querySelectorAll('.btn');

    btn.forEach(element => {
        element.addEventListener('click', (e) =>{
            e.preventDefault();

            const data = new FormData();
             // donnée envoyer au PHP pour les ustiliser comme ca : $_POST['id'] 
            data.append('id', element.id);
            let url = 'delete.php';
            const req = {
                
                method:'post',

                //Ajout données a transmettre dans la requete
                
                body: data
            };
       fetch(url,req)
        .then((responses)=>{return responses.json()})
        .then((data)=>{console.log(data);})
        })
    });
    
    
</script>
</body>
</html>