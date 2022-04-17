<?php
    // Verif si $_POST['first_name'] et $_POST['last_name'] existe && different de vide  
    if(isset($_POST['first_name']) && isset($_POST['last_name'])){

        $users= array();

        if(!empty($_POST['first_name']) && !empty($_POST['last_name'])){

            $fName = strip_tags($_POST['first_name']);
            $lName = strip_tags($_POST['last_name']);

            $users= array();

            require_once './../conn.php';
            // insertion dans la bdd 
            $sql = 'INSERT INTO `users` (`prenom`, `nom`) VALUES (:prenom, :nom)';
            $query = $db->prepare($sql);
            $query->bindValue(':prenom', $fName, PDO::PARAM_STR);
            $query->bindValue(':nom', $lName, PDO::PARAM_STR);
            $query->execute();
            $users['validation'] = "bravo";
            json_encode($users);
        }else{
            $users['erreur'] = "Non c'est pas bon  😔";
            json_encode($users);
        }
        echo json_encode($users);
    }
   
   