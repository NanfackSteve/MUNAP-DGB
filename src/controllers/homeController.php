<?php

namespace Application\Controllers\HomePage;

class Home
{
    public function index($language)
    {
        $lang = $language;
        require_once('src/views/homePage.php');
    }
}
