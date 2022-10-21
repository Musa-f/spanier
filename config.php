<?php 
$bdd = mysqli_connect("localhost", "root", "", "spanier");
if(!$bdd) die('Erreur:'.mysqli_connect_error());


//$req = $DB->query('SELECT * FROM produits');
//var_dump($req->fetchAll(PDO::FETCH_OBJ));


//$DB = new PDO('mysql:host=localhost;dbname=spanier', 'root', '');
/*$user = 'root';
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
}*/
?>