



    <div class="container">
        <?php include 'header.php'; ?>

        <!-- Hero Section -->
        <div class="hero-image">
            <div class="hero-text">
                <h1>Bienvenue sur IRT Shop</h1>
                <p>Vos meilleurs produits en un seul endroit</p>
                <a href="#products" class="btn btn-primary">Découvrir nos produits</a>
            </div>
        </div>

        <!-- Featured Products Section -->
        <section id="products" class="my-5">
            <div class="text-center">
                <h2>Produits en vedette</h2>
                <p>Découvrez nos produits les plus populaires</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="public/productsPics/party-wear-1.jpg" class="card-img-top" alt="Product 1">
                        <div class="card-body">
                            <h5 class="card-title">Chaussure pour dame</h5>
                            <p class="card-text">Chaussure elegante pour demoiselle</p>
                            <a href="index.php?controller=shop&action=index" class="btn btn-primary">Voir les détails</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="public/productsPics/watch-1.jpg" class="card-img-top" alt="Product 2">
                        <div class="card-body">
                            <h5 class="card-title">Smart Watch</h5>
                            <p class="card-text">Montre connecter 24h/24</p>
                            <a href="index.php?controller=shop&action=index" class="btn btn-primary">Voir les détails</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="public/productsPics/shampoo.jpg" class="card-img-top" alt="Product 3">
                        <div class="card-body">
                            <h5 class="card-title">Shampoin Old spice</h5>
                            <p class="card-text">Shampoin de marque</p>
                            <a href="index.php?controller=shop&action=index" class="btn btn-primary">Voir les détails</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


        <?php include 'footer.php'; ?>
    </div>

