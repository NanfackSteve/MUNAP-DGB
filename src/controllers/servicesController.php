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
                // get All Events Calendar From API
                $api = json_decode(file_get_contents('src/models/api.json'), true);
                $ch = curl_init($api['link'] . "/api/getreservationbus");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $rep = curl_exec($ch);
                $bus_datas = json_decode($rep, true);
                $bus_datas = isset($bus_datas) ? $bus_datas : array();
                //print_r($bus_datas);
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
