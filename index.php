<?php 
$linkstyle = "<link rel='stylesheet' href='style-catalogue.css'>";
include 'header.php'; ?>

<?php
require 'db.class.php';
?>
        <section>
            <?php $produits = $DB->query('SELECT * FROM produits'); ?>
            <?php foreach($produits as $produit): ?>
                <div class="container">
                <div class="img-aliments"><img src="produits\gouda.png" alt="gouda"></div>
                <div class="container-child">
                    <h3>Gouda</h3>
                    <div class="affiche">
                        <strong class="prix" id="">
                            <?php echo $produit->name;?>
                        </strong> 
                        <span>€</span>
                    </div>
                    <button>+</button>
                </div>
            </div>
            <?php endforeach?>

            
            
            <!--
            <div class="container">
                <div class="img-aliments"><img src="produits\gouda.png" alt="gouda"></div>
                <div class="container-child">
                    <h3>Gouda</h3>
                    <div class="affiche"><strong class="prix" id="">5</strong> <span>€</span></div>
                    <button>+</button>
                </div>
            </div>
            
            <div class="container">
                <div class="img-aliments"><img src="produits\chevre.png" alt="chevre"></div>
                <div class="container-child">
                    <h3>Fromage de chèvre</h3>
                    <div class="affiche"><strong class="prix" id="">4</strong> <span>€</span></div>
                    <button>+</button>
                </div>
            </div>

            <div class="container">
                <div class="img-aliments"><img src="produits\huile.png" alt="huile"></div>
                <div class="container-child">
                    <h3>Lot de 2 bouteilles d'huile d'olive</h3>
                    <div class="affiche"><strong class="prix" id="">9</strong> <span>€</span></div>
                    <button>+</button>
                </div>
            </div>

            <div class="container">
                <div class="img-aliments"><img src="produits\lait.png" alt="lait"></div>
                <div class="container-child">
                    <h3>Lait de chèvre</h3>
                    <div class="affiche"><strong class="prix" id="">4</strong> <span>€</span></div>
                    <button>+</button>
                </div>
            </div>

            <div class="container">
                <div class="img-aliments"><img src="produits\miel.png" alt="miel"></div>
                <div class="container-child">
                    <h3>Miel</h3>
                    <div class="affiche"><strong class="prix" id="">7</strong> <span>€</span></div>
                    <button>+</button>
                </div>
            </div>

            <div class="container">
                <div class="img-aliments"><img src="produits\oeufs.png" alt="oeufs"></div>
                <div class="container-child">
                    <h3>Lot 10 oeufs</h3>
                    <div class="affiche"><strong class="prix" id="">3</strong> <span>€</span></div>
                    <button>+</button>
                </div>
            </div>-->
        </section>



<?php include 'footer.php'; ?>