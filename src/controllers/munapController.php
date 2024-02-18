<?php

namespace Application\Controllers\Menu;

class Munap
{
    public function execute($subMenu)
    {
        session_start();
        include_once('src/models/language/lang.php');

        switch ($subMenu) {
            case "word_of_DE":
                require_once('src/views/templates/munap/words_of_DE.php');
                break;

            case "missions":
                require_once('src/views/templates/munap/missions.php');
                break;

            case "organes":
                require_once('src/views/templates/munap/organes.php');
                break;
            case "team_BE":
                require_once('src/views/templates/munap/team_BE.php');
                break;
            case "team_CA":
                require_once('src/views/templates/munap/team_CA.php');
                break;
            case "team_CF":
                require_once('src/views/templates/munap/team_CF.php');
                break;
            case "team_DR":
                require_once('src/views/templates/munap/team_DR.php');
                break;

            case "is_member":
                require_once('src/views/templates/munap/is_member.php');
                break;

            case "historic":
                $years = json_decode(file_get_contents('src/models/historic.json'), true);
                require_once('src/views/templates/munap/historic.php');
                break;

            case "stats":
                // get Stats From API
                $api = json_decode(file_get_contents('src/models/api.json'), true);
                $ch = curl_init($api['link'] . "/api/totalmembres");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $rep = curl_exec($ch);
                $stats = json_decode($rep, true);
                //print_r($stats);
                curl_close($ch);

                require_once('src/views/templates/munap/stats.php');
                break;

            default:
                require_once('src/views/layouts/404.php');
                break;
        }
    }
}
