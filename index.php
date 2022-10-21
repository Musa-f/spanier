<?php 
$linkstyle = "<link rel='stylesheet' href='style-catalogue.css'>";
include 'header.php'; ?>

        <section>
            <?php $produits = $DB->query('SELECT * FROM produits'); ?>
            <?php foreach($produits as $produit): ?>
                <div class="container">
                <div class="img-aliments"><img src="produits\<?php echo $produit[0];?>.png" alt="<?php echo $produit[1];?>"></div>
                <div class="container-child">
                    <h3><?php echo $produit[1];?></h3>
                    <div class="affiche">
                        <strong class="prix" id="">
                            <?php echo $produit[2];?>
                        </strong> 
                        <span>€</span>
                    </div>
                    <a href="addpanier.php?id=<?php echo $produit[0];?>"><img src="reseaux\panier.png" alt="" class="ajout"></a>
                </div>
            </div>
            <?php endforeach?>
        </section>



<?php include 'footer.php'; ?>