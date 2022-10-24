<?php
include_once "config.php";
//Vérifie s'il y a une session existante
if(!isset($_SESSION)){
    session_start(); //si non démarre une session
}

if(!isset($_SESSION['panier'])){
    $_SESSION['panier'] = array(); //tableau qui contient les produits ajoutés au panier
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $product = mysqli_query($bdd, "SELECT * FROM produits WHERE id=$id");
    if(empty(mysqli_fetch_assoc($product))){
        die("Ce produit n'existe pas");
    }

    if(isset($_SESSION['panier'][$id])){
        $_SESSION['panier'][$id]++;
    }else{
        $_SESSION['panier'][$id]= 1;
    }

    header("Location:index.php");
}

?>