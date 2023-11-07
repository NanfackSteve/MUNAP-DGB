<?php

// ----------------------------------------------------------------------------
// Ce Script Sert retirer les "\r", "\n" et espaces inutiles du fichier JSON  |
// ----------------------------------------------------------------------------


// Lire le contenu du fichier JSON d'entrée
$jsonFile = 'sortie.json';
$jsonData = file_get_contents($jsonFile);

// Décoder le JSON en un tableau associatif
$data = json_decode($jsonData, true);

// Fonction de remplacement des caractères encodés par des accents
function replaceAccents($matches)
{
    return utf8_encode(json_decode('"' . $matches[1] . '"'));
}

// Fonction de nettoyage des espaces inutiles et caractères spéciaux "\r" et "\n"
function cleanData($data)
{
    if (is_array($data)) {
        foreach ($data as $key => $value) {
            $data[$key] = cleanData($value);
        }
    } elseif (is_string($data)) {
        // Remplacer les caractères spéciaux "\r" et "\n" par des espaces
        $data = str_replace(["\r", "\n"], ' ', $data);
        // Supprimer les espaces inutiles
        $data = trim($data);
    }
    return $data;
}

// Parcourir les données pour rechercher et remplacer les caractères encodés
array_walk_recursive($data, function (&$value, $key) {
    $value = preg_replace_callback('/\\\\u(\w{4})/', 'replaceAccents', $value);
});

// Nettoyer les espaces inutiles et les caractères spéciaux "\r" et "\n"
$data = cleanData($data);

// Convertir le tableau associatif modifié en JSON
$jsonDataModified = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

// Sauvegarder le résultat dans un nouveau fichier JSON
$jsonFileModified = 'sortie-clean.json';
file_put_contents($jsonFileModified, $jsonDataModified);

echo "Les caractères encodés ont été remplacés, les espaces inutiles et les caractères spéciaux ont été supprimés, et le résultat a été sauvegardé dans '$jsonFileModified'.";
