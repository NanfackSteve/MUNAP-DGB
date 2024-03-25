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
                $title_page = $lang['speech']['title-page'];
                $head_title = $lang['speech']['title-page'];
                $btn_text = $lang['speech']['btn-title'];
                $doc_type = $lang['speech']['name'];
                $documents  = $lang['speech']['list'];
                $no_document  = $lang['speech']['no-document'];
                require_once('src/views/layouts/speech_report_layout.php');
                break;

            case "reports":
                $title_page = $lang['report']['title-page'];
                $head_title = $lang['report']['title-page'];
                $btn_text = $lang['report']['btn-title'];
                $doc_type = $lang['report']['name'];
                $documents  = $lang['report']['list'];
                $no_document  = $lang['report']['no-document'];
                require_once('src/views/layouts/speech_report_layout.php');
                break;

            default:
                require_once('src/views/layouts/404.php');
                break;
        }
    }
}
