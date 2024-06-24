# Site de Vente en PHP

Bienvenue dans notre projet de site de vente en ligne développé en PHP avec une architecture MVC (Modèle-Vue-Contrôleur). Ce projet a pour objectif de fournir une plateforme de vente robuste et scalable.

## Architecture MVC

![Architecture MVC](/public/captures/mvc.png)

Notre site utilise le modèle MVC, ce qui signifie que le code est organisé en trois parties principales :
- **Modèle** : Gère la logique de l'application et les interactions avec la base de données.
- **Vue** : Gère la présentation des données à l'utilisateur.
- **Contrôleur** : Gère les demandes de l'utilisateur, appelle les modèles appropriés et retourne les vues correspondantes.

## Fonctionnalités

- **Gestion des produits** : Ajout et suppression de produits.
- **Système d'authentification** : Inscription, connexion et gestion des utilisateurs.
- **Interface utilisateur** : Design responsive et intuitif pour une expérience utilisateur optimale.

## Installation

Pour installer et exécuter ce projet localement avec WAMP, suivez les étapes ci-dessous :

1. **Clonez le dépôt** :
    ```bash
    git clone https://github.com/hombabe/groupe-logiciel.git
    ```

2. **Accédez au répertoire du projet** :
    ```bash
    cd groupe-logiciel
    ```

3. **Copiez les fichiers du projet dans le répertoire `www` de WAMP** :
    ```bash
    xcopy * C:\wamp64\www\votre-projet /E /H /C /I
    ```

4. **Configurez votre base de données** :
    - Démarrez WAMP et ouvrez phpMyAdmin.
    - Créez une nouvelle base de données.
    - Importez le fichier `database.sql` situé dans le dossier `base de donee` dans votre nouvelle base de données.

5. **Modifiez le fichier de configuration de la base de données** :
    - Ouvrez le fichier `config/database.php`.
    - Modifiez les paramètres de connexion à la base de données (nom de la base de données, utilisateur, mot de passe, etc.).

6. **Démarrez le serveur WAMP** :
    - Assurez-vous que WAMP est en cours d'exécution.
    - Ouvrez votre navigateur et allez à `http://localhost/votre-projet`.

## Utilisation

Après avoir installé le projet, vous pouvez commencer à l'utiliser en créant un compte utilisateur et en ajoutant des produits.

-acceder au ficher "add_admin.php" et configuer votre nom d admin et mot de passe

-lancer votreprojet/"add_admin.php" dans l'url de votre projet principal pour ajouter l'admin

-vous pouvez utiliser les informations suivantes par defaut :

- **Admin**: `admin`
- **Mot de passe**: `groupe2`

## Contribution

Les contributions sont les bienvenues ! Si vous souhaitez contribuer à ce projet, veuillez suivre ces étapes :

1. Forkez le dépôt.
2. Créez une branche pour votre fonctionnalité ou correction de bug (`git checkout -b feature/ma-fonctionnalite`).
3. Commitez vos modifications (`git commit -m 'Ajout de ma fonctionnalité'`).
4. Poussez votre branche (`git push origin feature/ma-fonctionnalite`).
5. Ouvrez une Pull Request.

## Captures d'écran

![Capture d'écran 1](/public/captures/header.png)
![Capture d'écran 2](/public/captures/products.png)
![Capture d'écran 3](/public/captures/footer.png)
![Capture d'écran 4](/public/captures/add%20product.png)
![Capture d'écran 5](/public/captures/about.png)

Pour plus d'informations, veuillez contacter [augustehoundjago@gmail.com](mailto:augustehoundjago@gmail.com).
