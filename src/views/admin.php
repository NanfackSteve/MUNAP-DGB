<?php

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Récupérer les données du formulaire
    $titre = $_POST["titre"];
    $contenu = $_POST["contenu"];
    $date = (new DateTime($_POST["date"]))->format("d-m-Y");
    $lieu = $_POST["lieu"];
    $categorie = $_POST["categorie"];

    // Si la catégorie est "Autres", utiliser la sous-catégorie
    if ($categorie == "others") {
        $sousCategorie = $_POST["autre"];
        $dossierImages = "img/activities/$categorie/$sousCategorie/$date/";
    } else {
        $dossierImages = "img/activities/$categorie/$date/";
    }

    // Créer le dossier s'il n'existe pas
    if (!file_exists($dossierImages)) {
        mkdir($dossierImages, 0777, true);
    }

    // Gérer le téléchargement des images
    if (!empty($_FILES["images"]["name"][0])) {
        $nombreImages = count($_FILES["images"]["name"]);

        for ($i = 0; $i < $nombreImages; $i++) {
            $nomFichier = ($i + 1) . ".jpg";
            $cheminFichier = $dossierImages . $nomFichier;
            move_uploaded_file($_FILES["images"]["tmp_name"][$i], $cheminFichier);
        }
    }

    // Charger le fichier JSON existant
    $cheminFichier = "src/models/language/test-admin.json";
    $jsonContent = file_get_contents($cheminFichier);
    $data = json_decode($jsonContent, true);

    // Ajouter les nouvelles données 
    $nouvelleDonnee = [
        "date" => $date,
        "place" => $lieu,
        "title" => $titre,
        "text" => $contenu
    ];

    // Vérifier la catégorie et sous-catégorie
    if ($categorie === "others") {
        // Vérifier si la sous-catégorie existe, sinon la créer
        if (!isset($data["news"]["others"][$sousCategorie])) {
            $data["news"]["others"][$sousCategorie] = [];
        }
        // Ajouter la nouvelle donnée à la sous-catégorie
        $data["news"]["others"][$sousCategorie][] = $nouvelleDonnee;
        echo "Données ajoutées avec succès.";
        // Rediriger l'utilisateur après le traitement
        header("Location: index.php");
    } else if ($categorie === "AG" || $categorie === "CA" || $categorie === "meeting") {
        // Vérifier si la sous-catégorie existe, sinon la créer
        if (!isset($data["news"][$categorie])) {
            $data["news"][$categorie] = [];
        }
        // Ajouter la nouvelle donnée à la sous-catégorie
        $data["news"][$categorie]["contents"][] = $nouvelleDonnee;
        echo "Données ajoutées avec succès.";
        // Rediriger l'utilisateur après le traitement
        header("Location: index.php");
    } else {
        echo "Catégorie ou sous-catégorie invalide.";
    }

    // Réécrire le fichier JSON avec les nouvelles données
    file_put_contents($cheminFichier, json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Administration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">
    <h1 class="mb-4">Formulaire d'Administration</h1>
    <form action="adminPage.php" method="post" enctype="multipart/form-data">

        <div class="mb-3">
            <label for="titre" class="form-label">Titre :</label>
            <input type="text" id="titre" name="titre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="contenu" class="form-label">Contenu :</label>
            <textarea id="contenu" name="contenu" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Date :</label>
            <input type="date" id="date" name="date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="lieu" class="form-label">Lieu de l'activité :</label>
            <input type="text" id="lieu" name="lieu" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="categorie" class="form-label">Catégorie :</label>
            <select id="categorie" name="categorie" class="form-select">
                <option value="AG">Assemblée Générale</option>
                <option value="CA">Conseil d'administration</option>
                <option value="meeting">Réunions</option>
                <option value="others">Autres</option>
            </select>
        </div>

        <div id="autreCategorie" style="display:none;">
            <div class="mb-3">
                <label for="autre" class="form-label">Autre Catégorie :</label>
                <select id="autre" name="autre" class="form-select">
                    <option value="donations">Dons</option>
                    <option value="bus">Bus</option>
                    <option value="sports">Sports</option>
                    <option value="retirements">Retraite</option>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <label for="images" class="form-label">Télécharger des images (jpg) :</label>
            <input type="file" id="images" name="images[]" class="form-control" accept="image/jpeg" multiple>
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Afficher ou masquer la catégorie "Autres" en fonction du choix
        document.getElementById('categorie').addEventListener('change', function() {
            var autreCategorie = document.getElementById('autreCategorie');
            autreCategorie.style.display = this.value === 'others' ? 'block' : 'none';
        });
    </script>
</body>

</html>