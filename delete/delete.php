<?php
require_once './../conn.php';
if(isset($_POST['id']) && !empty($_POST['id']))
{
    $idUsers = $_POST['id'];

    $sql = 'DELETE FROM `users` WHERE `id` = :id;';
    $query = $db->prepare($sql);
    $query->bindValue(':id', $idUsers, PDO::PARAM_INT);
    $query->execute();
  
}

