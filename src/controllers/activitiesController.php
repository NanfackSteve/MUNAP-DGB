<?php

namespace Application\Controllers\Menu;

require_once('src/models/activitiesModel.php');

use Application\Models\Activities\Activity;
use Exception;

class Activities
{
    public function execute($subMenu)
    {
        session_start();
        include_once('src/models/language/lang.php');

        try {
            if ($subMenu != "AG" && $subMenu != "CA" && $subMenu != "meeting" && $subMenu != "others") {
                require_once('src/views/layouts/404.php');
            } else {
                if (isset($_GET['date']) && $_GET['date'] !== '') {
                    $activity = (isset($_GET['type']) && $_GET['type'] !== '') ? (new Activity())->getActivity($subMenu, $_GET['date'], $lang, $_GET['type']) : (new Activity())->getActivity($subMenu, $_GET['date'], $lang);
                    $title_page = (isset($_GET['type']) && $_GET['type'] !== '') ? "MUNAP - " . $_GET['type'] : "MUNAP - " . $subMenu;
                    require('src/views/layouts/activity_layout.php');
                } else {
                    $title_page = $lang['news']['title-page'];
                    $head_title = $lang['news'][$subMenu]['head-title'];
                    $list_activies = (new Activity())->getActivities($subMenu, $lang);
                    require('src/views/layouts/activities_layout.php');
                }
            }
        } catch (Exception $e) {
            // $errorMessage = $e->getMessage();
            require_once('src/views/layouts/404.php');
        }
    }
}
