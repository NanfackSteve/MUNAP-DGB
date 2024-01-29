<?php

if (isset($_SESSION['lang']) && $_SESSION['lang'] === 'en') {
    $lang = json_decode(file_get_contents('src/models/language/en.json'), true);
} else {
    $lang = json_decode(file_get_contents('src/models/language/fr.json'), true);
}
