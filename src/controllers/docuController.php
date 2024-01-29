<?php

namespace Application\Controllers\Menu;

class Docu
{
    public function execute($subMenu)
    {
        session_start();
        include_once('src/models/language/lang.php');

        switch ($subMenu) {
            case "statutes":
                require_once('src/views/templates/docu/statutes.php');
                break;

            case "rules":
                require_once('src/views/templates/docu/rules.php');
                break;

            case "speechs":
                echo "Pages des Discours Bientot disponible";
                break;

            case "reports":
                echo "Pages des Rapports Bientot disponible";
                break;

            default:
                require_once('src/views/layouts/404.php');
                break;
        }
    }
}
