<?php

// ----------------------------------------------------------------------------------------------
// Ce Script Sert transformer les encodages de type \u002 du JSON par les accent correspondants |
// ----------------------------------------------------------------------------------------------

// Lire le contenu du fichier JSON d'entrée
$jsonFile = 'rules-extract.json';
$jsonData = file_get_contents($jsonFile);

// Décoder le JSON en un tableau associatif
$data = json_decode($jsonData, true);

// Fonction de remplacement des caractères encodés par des accents
function replaceAccents($matches)
{
    return utf8_encode(json_decode('"' . $matches[1] . '"'));
}

// Parcourir les données pour rechercher et remplacer les caractères encodés
array_walk_recursive($data, function (&$value, $key) {
    $value = preg_replace_callback('/\\\\u(\w{4})/', 'replaceAccents', $value);
});

// Convertir le tableau associatif modifié en JSON
$jsonDataModified = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

// Sauvegarder le résultat dans un nouveau fichier JSON
$jsonFileModified = 'sortie.json';
file_put_contents($jsonFileModified, $jsonDataModified);

echo "Les caractères encodés ont été remplacés et le résultat a été sauvegardé dans '$jsonFileModified'.";