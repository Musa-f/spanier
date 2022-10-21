<?php 
$linkstyle = "<link rel='stylesheet' href='style-panier.css'>";
include 'header.php'; ?>

<section>
    <?php
    $ids = array_keys($_SESSION['panier']);
    //$products = $DB->query('SELECT * FROM produits WHERE id IN implode($ids)');
    ?>

    <table>
        <tr>
            <th></th>
            <th>Nom</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Action</th>
        </tr>
        <!--Ajouts de produits-->
        <tr> 
            <td><img src="" alt="" class="mini"></td>
            <td>Gouda</td>
            <td>5€</td>
            <td>2</td>
            <td><img src="" alt=""></td>
        </tr>
        <tr>
            <th>Total : 50€</th>
        </tr>
    </table>

</section>

<?php include 'footer.php'; ?>