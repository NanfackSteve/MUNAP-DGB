<?php

// ------------------------------------------------------------------------------------
// Ce Script Sert a extraire le contenu des balises <p> et les reseigner dans un JSON |
// ------------------------------------------------------------------------------------

// Lisez le contenu du fichier PHP
$html_content = file_get_contents("rules.php");

// Utilisez une expression régulière pour extraire le contenu entre les balises <p></p>
$pattern = '/<p>(.*?)<\/p>/s';
preg_match_all($pattern, $html_content, $matches);

// $matches[1] contiendra le contenu des balises <p>
$paragraphs = $matches[1];

// Créez un tableau associatif pour stocker le contenu des balises <p> avec des clés "article-"
$paragraphsData = array();
foreach ($paragraphs as $index => $paragraph) {
    $paragraphsData["article-" . ($index + 1)] = $paragraph; // Clé au format "article-"
}

// Créez un tableau JSON avec les données
$jsonData = array("status" => $paragraphsData);

// Convertissez le tableau en JSON
$jsonContent = json_encode($jsonData, JSON_PRETTY_PRINT);

// Écrivez le JSON dans un fichier
file_put_contents("rules-extract.json", $jsonContent);

echo "Extraction terminée. Le fichier JSON a été créé : output.json";
