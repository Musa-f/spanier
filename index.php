<?php 
session_start();
$linkstyle = "<link rel='stylesheet' href='style-catalogue.css'>";
include 'header.php'; 
?>

        <section>
            <?php 
            $produits = mysqli_query($bdd, "SELECT * FROM produits"); 
            foreach($produits as $produit):
            ?>
                <div class="container">
                <div class="img-aliments"><img src="produits\<?=$produit['img'];?>.png" alt=""></div>
                <div class="container-child">
                    <h3><?=$produit['name'];?></h3>
                    <div class="affiche">
                        <strong class="prix" id="">
                            <?=$produit['price'];?>
                        </strong> 
                        <span>€</span>
                    </div>
                    <a href="addpanier.php?id=<?=$produit['id'];?>"><img src="reseaux\panier.png" alt="" class="ajout"></a>
                </div>
            </div>
            <?php endforeach;?>
        </section>

<?php include 'footer.php'; ?>