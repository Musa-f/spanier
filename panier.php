<?php 
session_start();
include_once "config.php";
$linkstyle = "<link rel='stylesheet' href='style-panier.css'>";
include 'header.php'; ?>

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
        $ids = array_keys($_SESSION['panier']);
        if(empty($ids)){
            echo"Votre panier est vide";
        }else {
            $products = mysqli_query($bdd, "SELECT * FROM produits WHERE id IN (".implode(',', $ids).")");
            //$products = mysqli_query($bdd, "SELECT * FROM produits WHERE id IN (\".implode(\',\', $ids).\")");
            /*$vimp = implode(',', $ids);
            $products = mysqli_query($bdd, "SELECT * FROM produits WHERE Id IN {$vimp}");*/

            foreach($products as $product):
            ?>
            <!--Ajouts de produits-->
            <tr> 
                <td><img src="produits/<?=$product['img']?>" alt="" class="mini"></td>
                <td><?=$product['name']?></td>
                <td><?=$product['price']?></td>
                <td><?=$_SESSION['panier'][$product['id']]?></td>
                <td><img src="" alt=""></td>
            </tr>
        <?php endforeach ;} ?>
        <tr>
            <th>Total : 50€</th>
        </tr>
    </table>

</section>

<?php include 'footer.php'; ?>