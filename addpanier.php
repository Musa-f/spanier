<?php require 'config.php';
if(isset($_GET['id'])){
    $product = "SELECT * FROM produits WHERE id =". $_GET['id'];
    //$product = $DB->query('SELECT id FROM produits WHERE id=:id', array('id' => $_GET['id'])); //requête préparée
    if(empty($product)){
        die("Ce produit n'existe pas.");
    }
    $panier->add($product[0]);
    die("Le produit a bien été ajouté au panier <a href='index.php'>Retourner au catalogue</a>");
}else{
    die("Vous n'avez pas selectionné de produit à ajouter au produit");
}
?>