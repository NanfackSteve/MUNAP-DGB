<?php

namespace Application\Controllers\Menu;

class Profile
{
    public function execute()
    {
        session_start();
        // If User is not connected, go to login Page !
        if (!isset($_SESSION['num_adhesion'])) header("Location: index.php?menu=login");

        include_once('src/models/language/lang.php');
        include_once('src/models/profileModel.php');
        require_once('src/views/profilePage.php');
    }
}
