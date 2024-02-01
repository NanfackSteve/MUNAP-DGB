<?php

require_once('src/controllers/homeController.php');
require_once('src/controllers/munapController.php');
require_once('src/controllers/servicesController.php');
require_once('src/controllers/activitiesController.php');
require_once('src/controllers/docuController.php');
require_once('src/controllers/profileController.php');

use Application\Controllers\HomePage\Home;
use Application\Controllers\Menu\Munap;
use Application\Controllers\Menu\Services;
use Application\Controllers\Menu\Activities;
use Application\Controllers\Menu\Docu;
use Application\Controllers\Menu\Profile;

try {
    if (isset($_GET['menu']) && $_GET['menu'] !== '') {
        switch ($_GET['menu']) {
            case "munap":
                (new Munap())->execute($_GET['sub']);
                break;

            case "services":
                (new Services())->execute($_GET['sub']);
                break;

            case "activities":
                (new Activities())->execute($_GET['sub']);
                break;

            case "docu":
                (new Docu())->execute($_GET['sub']);
                break;

            case "profile":
                (new Profile())->execute();
                break;

            case "login":
                include_once('src/models/language/lang.php');
                require_once('src/views/loginPage.php');
                break;

            case "admin":
                require_once('src/views/adminPage.php');
                break;

            default:
                throw new Exception("La page que vous recherchez n'existe pas.");
                break;
        }
    } else {
        $lang = (isset($_GET['lang']) && $_GET['lang'] !== '') ? $_GET['lang'] : 'fr';
        (new Home())->index($lang);
    }
} catch (Exception $e) {
    session_start();
    include_once('src/models/language/lang.php');
    // $errorMessage = $e->getMessage();
    require_once('src/views/layouts/404.php');
}
