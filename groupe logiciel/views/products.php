<?php include 'header.php'; ?>
<div class="container my-5">
    <!-- Navigation images -->
    <div class="d-flex justify-content-around mb-4">
        <img src="public/images/montre.jpg" alt="Montre" class="img-thumbnail" style="width:200px;height:auto;">
        <img src="public/images/peper.jpg" alt="Sac" class="img-thumbnail" style="width:200px;height:auto;">
        <img src="public/images/soap.png" alt="Savon" class="img-thumbnail" style="width:200px;height:auto;">
    </div>

    <h2 class="text-center mb-4">Produits</h2>
    
    <div class="row">
        <?php foreach ($products as $product): ?>
            <div class="col-md-4 mb-4 ">
            <div class="card h-100">
    <?php if (!empty($product['image'])): ?>
        <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" class="card-img-top" style="height: 200px; object-fit: cover;">
    <?php endif; ?>
    <div class="card-body">
        <h5 class="card-title"><?php echo htmlspecialchars($product['name']); ?></h5>
        <p class="card-text"><?php echo htmlspecialchars($product['description']); ?></p>
        <div class="bas">
        <p class="card-text"><strong>Prix: <?php echo htmlspecialchars($product['price']); ?> CFA</strong></p>
        <a href="https://wa.me/22898576682?text=<?php echo urlencode('Salut, j’aimerais acheter ce produit: ' . $product['name'] . ' - ' . 'https://http://localhost/groupe%20logiciel/index.php?controller=product&action=index' . $product['id']); ?>" target="_blank" class="btn btn-primary">Acheter</a>
        </div>
    </div>
    <?php if (isset($_SESSION['username'])): ?>
        <div class="card-footer">
            <form method="POST" action="index.php?controller=product&action=delete" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?');">
                <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                <button type="submit" class="btn btn-danger btn-block">Supprimer</button>
            </form>
        </div>
    <?php endif; ?>
</div>

            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'footer.php'; ?>
