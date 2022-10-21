<?php 
$linkstyle = "<link rel='stylesheet' href='style-panier.css'>";
include 'header.php'; ?>

<section>
    <?php
    $ids = array_keys($_SESSION['panier']);
    //$products = $DB->query('SELECT * FROM produits WHERE id IN implode($ids)');
    ?>
    <div id="articles">
    <div class="container">
                <div class="img-aliments"><img src="produits\gouda.png" alt="gouda"></div>
                <div class="container-child">
                    <h3>Gouda</h3>
                    <div class="affiche"><strong class="prix" id="">5</strong> <span>€</span></div>
                    <button>+</button>
                </div>
            </div>
    </div>

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
            <td><img src="" alt=""></td>
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