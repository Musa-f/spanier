<?php

$user = 'root';
$pass = '';

try{
    $DB = new PDO('mysql:host=localhost;dbname=spanier', $user, $pass);
    foreach($DB->query('SELECT * FROM produits') as $row) {
        print_r($row);
    }
    $DB = null;
} catch (PDOException $e){
    print "Erreur !:" . $e->getMessage() . "<br/>";
    die();
}

?>



