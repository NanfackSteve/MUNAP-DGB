<?php

// Choisis la langue
if (isset($_SESSION['lang']) && $_SESSION['lang'] === 'fr') {
    $lang = json_decode(file_get_contents('./language/fr.json'), true);
} else if (isset($_SESSION['lang']) && $_SESSION['lang'] === 'en') {
    $lang = json_decode(file_get_contents('./language/en.json'), true);
} else {
    $lang = json_decode(file_get_contents('./language/fr.json'), true);
}
