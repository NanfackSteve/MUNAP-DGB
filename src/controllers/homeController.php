<?php

namespace Application\Controllers\HomePage;

class Home
{
    public function index($language)
    {
        // get Stats From API
        $api = json_decode(file_get_contents('src/models/api.json'), true);
        $ch = curl_init($api['link'] . "/api/totalmembres");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $rep = curl_exec($ch);
        $stats = json_decode($rep, true);
        //print_r($data);
        curl_close($ch);

        $langue = $language;
        require_once('src/views/homePage.php');
    }
}
