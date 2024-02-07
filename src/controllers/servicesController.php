<?php

namespace Application\Controllers\Menu;

class Services
{
    public function execute($subMenu)
    {
        session_start();
        include_once('src/models/language/lang.php');

        switch ($subMenu) {
            case "benefits":
                require_once('src/views/templates/services/allowances.php');
                break;

            case "bus":
                require_once('src/views/templates/services/bus.php');
                break;

            case "tools":
                require_once('src/views/templates/services/tools.php');
                break;

            default:
                require_once('src/views/layouts/404.php');
                break;
        }
    }
}
