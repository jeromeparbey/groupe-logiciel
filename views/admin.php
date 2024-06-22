<?php include 'header.php'; ?>
<h2>Ajouter un produit</h2>
<form method="POST" action="index.php?controller=product&action=create" enctype="multipart/form-data">
    <label for="name">Nom:</label>
    <input type="text" name="name" required>
    <br>
    <label for="description">Description:</label>
    <textarea name="description" required></textarea>
    <br>
    <label for="price">Prix:</label>
    <input type="text" name="price" required>
    <br>
    <label for="image">Image:</label>
    <input type="file" name="image" required>
    <br>
    <button type="submit">Ajouter</button>
</form>
<?php include 'footer.php'; ?>
