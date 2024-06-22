<?php

/**
 * Stocke l'image uploadée dans le dossier spécifié
 * @param array $file Le fichier uploadé ($_FILES['image'])
 * @return string|false Le nom du fichier stocké ou false en cas d'erreur
 */
function storeUploadedImage($file) {
    $targetDir = $_SERVER['DOCUMENT_ROOT'] . "/groupe logiciel/public/productsPics/";
    
    // Créer le dossier s'il n'existe pas
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $fileName = basename($file["name"]);
    $targetFile = $targetDir . $fileName;
    
    // Vérifier le type de fichier
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Seuls les fichiers JPG, JPEG, PNG & GIF sont autorisés.";
        return false;
    }

    // Upload du fichier
    if (move_uploaded_file($file["tmp_name"], $targetFile)) {
        return "public/productsPics/" . $fileName;
    } else {
        echo "Désolé, une erreur est survenue lors de l'upload de votre fichier.";
        return false;
    }
}

/**
 * Récupère le chemin de l'image pour l'affichage
 * @param string $fileName Le nom du fichier image
 * @return string Le chemin de l'image pour l'affichage
 */
function getImagePath($fileName) {
    return "public/productsPics/" . $fileName;
}