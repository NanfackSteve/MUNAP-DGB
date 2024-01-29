<?php

namespace Application\Controllers\Menu;

class Profile
{
    public function execute()
    {
        session_start();
        include_once('src/models/language/lang.php');
        include_once('src/models/profile.php');
        require_once('src/views/profilePage.php');
    }
}
