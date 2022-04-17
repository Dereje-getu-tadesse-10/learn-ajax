    
<?php

$db_servername = "localhost";
$db_dbname = "db_icy";
$db_username = "root";
$db_password = "root";

try {
    $db = new PDO("mysql:host=$db_servername;dbname=$db_dbname", $db_username, $db_password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";

  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

// $conn = "mysql:host=$host;dbname=$db_name";

// try {

//     $pdo = new PDO($conn, $user,$pass);
//     echo "good";
// } catch (PDOException $e) {
//     print "Erreur !: " . $e->getMessage() . "<br/>";
//     die();
// }


