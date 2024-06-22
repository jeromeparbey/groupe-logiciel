



<?php include 'header.php'; ?>
<h2>Produits</h2>
<div class="container" > 
    <ul class="separation" >


    <?php foreach ($products as $product): ?>
      
      <div class="produitCadre" >
          <div class="image">
          <h3><?php echo htmlspecialchars($product['name']); ?></h3>
      <p><?php echo htmlspecialchars($product['description']); ?></p>
      
      <div class="imageCadre">
      <?php if (!empty($product['image'])): ?>
          <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" style="width:100px;height:auto;">
      <?php endif; ?>
      </div>
      <span class="price" >Prix: <?php echo htmlspecialchars($product['price']); ?> cfa</span>
      
      <a href="https://www.youtube.com" target="_blank">Acheter</a>

          </div>
      </div>
      
  
    <?php endforeach; ?>

</ul>
</div>



<?php include 'footer.php'; ?>
