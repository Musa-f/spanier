<?php 
session_start();
include_once "config.php";
$linkstyle = "<link rel='stylesheet' href='style-panier.css'>";
include 'header.php'; 

//Suppression des produits
if(isset($_GET['del'])){
    $id_del = $_GET['del'];
    unset($_SESSION['panier'][$id_del]);
}
?>

<section>

    <table>
        <tr>
            <th></th>
            <th>Nom</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Action</th>
        </tr>

        <?php
        $total = 0;
        $ids = array_keys($_SESSION['panier']); //récupère les valeurs sauvegardées
        if(empty($ids)){
            echo "<div>Votre panier est vide</div>";
        } else{
            $products = mysqli_query($bdd, "SELECT * FROM produits WHERE id IN (".implode(',', $ids).")"); //sélectione uniquement les produits de la session
            foreach($products as $product):
                $total = $total + $product['price'] * $_SESSION['panier'][$product['id']];
                //var_dump($total);
            ?>
            <!--Produits-->
            <tr> 
                <td><img src="produits/<?=$product['img']?>.png" alt="" class="mini"></td>
                <td><?=$product['name']?></td>
                <td><?=$product['price']?><span>€</span></td>
                <td><?=$_SESSION['panier'][$product['id']]?></td> 
                <td><a href="panier.php?del=<?=$product['id']?>"><img src="reseaux/croix.png" alt=""></a></td>
            </tr>
        <?php endforeach ;} ?>

        <tr>
            <th>Total : <?=$total?>€</th>
        </tr>
    </table>

</section>

<?php include 'footer.php'; ?>