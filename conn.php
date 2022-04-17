    
<?php

$host = "localhost";
$db_name = "db_icy";
$user = 'root';
$pass = 'root';

$conn = "mysql:host=$host;dbname=$db_name";

try {

    $pdo = new PDO($conn, $user,$pass);
    echo "good";
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>
