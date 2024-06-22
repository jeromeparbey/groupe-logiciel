



<?php include 'header.php'; ?>
<div class=" container" ></div>
<h2>Produits</h2>
<div class="containerArticle" > 
    <ul class="separation" >


    <?php foreach ($products as $product): ?>
      
      <div class="produitCadre" >
          <div class="image">
          <h3 class="nom" ><?php echo htmlspecialchars($product['name']); ?></h3>

      <div class="imagecadre2" >
      <p class="description"><?php echo htmlspecialchars($product['description']); ?></p>
      
      <div class="imageCadre">
      <?php if (!empty($product['image'])): ?>
          <img class="pic" src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" style="width:300px;height:auto;">
      <?php endif; ?>


      </div>

      </div>

      <div class="buy" >
      <span class="price" >Prix: <?php echo htmlspecialchars($product['price']); ?> cfa</span>
      
      <a href="https://www.youtube.com" target="_blank">Acheter</a>

      <?php if (isset($_SESSION['username'])): ?>
            <form method="POST" action="index.php?controller=product&action=delete" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?');">
                <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                <button type="submit">Supprimer</button>
            </form>
        <?php endif; ?>


      </div>

   
          </div>
      </div>
      
  
    <?php endforeach; ?>

</ul>
</div>
</div>


<?php include 'footer.php'; ?>
