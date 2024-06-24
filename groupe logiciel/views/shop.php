

<div class="container">
<?php include 'header.php'; ?>
<h1>Boutique</h1>

<h2>
Découvrez notre gamme variée de produits
Trouvez tout ce dont vous avez besoin parmi notre sélection de produits de haute qualité.
</h2>
<div class="products">
    <?php foreach ($products as $product): ?>
        <div class="product">
            <h2><?php echo htmlspecialchars($product['name']); ?></h2>
            <p><?php echo htmlspecialchars($product['description']); ?></p>
            <p>Prix: <?php echo htmlspecialchars($product['price']); ?>€</p>
            <?php if (!empty($product['image'])): ?>
                <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</div>
<?php include 'footer.php'; ?>
</div>