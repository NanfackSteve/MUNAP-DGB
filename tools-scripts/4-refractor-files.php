<?php

// ------------------------------------------------------------------------------
// Ce Script Sert a faire des remplacement dans le fichier original PHP fourni  |
// ------------------------------------------------------------------------------

// Ouvrir le fichier PHP
$phpFile = 'rules.php';
$phpContent = file_get_contents($phpFile);

$articleNumber = 1;

// Utiliser une expression régulière pour trouver le contenu entre les balises <p>
$phpContent = preg_replace_callback('/<p>(.*?)<\/p>/s', function ($matches) use (&$articleNumber) {
    $replacement = "<?= \$lang['rules']['article-$articleNumber']?>";
    $articleNumber++;
    return "<p>$replacement</p>";
}, $phpContent);

// Écrire le contenu modifié dans le fichier d'origine
file_put_contents($phpFile, $phpContent);

echo 'Remplacement effectué avec succès !';
