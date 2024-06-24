<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Site de Vente</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

     
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">
    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        
        .navbar-custom {
            background-color: #343a40;
        }

        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-nav .nav-link {
            color: white;
        }
    </style>
    <script>
        function openModal(modalId) {
            document.getElementById(modalId).style.display = "block";
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = "none";
        }

        let prevScrollPos = window.pageYOffset;
        window.addEventListener('scroll', function() {
            const currentScrollPos = window.pageYOffset;
            if (prevScrollPos > currentScrollPos) {
                document.querySelector('.navbar').classList.remove('show');
                document.querySelector('.logo').classList.remove('up');
            } else {
                document.querySelector('.navbar').classList.add('show');
                document.querySelector('.logo').classList.add('up');
            }
            prevScrollPos = currentScrollPos;
        });
    </script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
            <a class="navbar-brand" href="#">
                <img src="public/images/irt-shop-high-resolution-logo-transparent.svg" width="40" height="40" class="d-inline-block align-top" alt="icon">
                IRT2_shop
            </a>

         
            <img class="logo" src="public/images/irt-shop-high-resolution-logo.svg" alt="logo">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=home&action=index">
                    <i class="fas fa-home"></i> Accueil
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=product&action=index">
                    <i class="fas fa-box"></i> Produits
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=shop&action=index">
                    <i class="fas fa-shopping-cart"></i> Boutique
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=services&action=index">
                    <i class="fas fa-concierge-bell"></i> Services
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=about&action=index">
                    <i class="fas fa-info-circle"></i> À propos
                </a>
            </li>
        </ul>
                <?php if (isset($_SESSION['username'])): ?>
                    <button class="btn btn-outline-light my-2 my-sm-0" onclick="openModal('createProductModal')">Créer un produit</button>
                    <a class="btn btn-outline-light my-2 my-sm-0 ml-2" href="index.php?controller=user&action=logout">Déconnexion</a>
                <?php else: ?>
                    <button class="btn btn-outline-light my-2 my-sm-0" onclick="openModal('loginModal')">Admin</button>
                <?php endif; ?>

            </div>
        </nav>
    </header>
    <hr>
    <!-- Formulaire de connexion  -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('loginModal')">&times;</span>
            <h2>Connexion</h2>
            <form method="POST" action="index.php?controller=user&action=login">
                <div class="form-group">
                    <label for="username">Nom d'utilisateur:</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe:</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Connexion</button>
            </form>
        </div>
    </div>

    <!-- Formulaire de création de produit  -->
    <div id="createProductModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('createProductModal')">&times;</span>
            <h2>Ajouter un produit</h2>
            <form class="add" method="POST" action="index.php?controller=product&action=create" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Nom:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Prix:</label>
                    <input type="text" name="price" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" name="image" class="form-control-file" required>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </div>
    


