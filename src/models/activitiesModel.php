<?php

namespace Application\Models\Activities;

class MyActivity
{
    public String $type;
    public String $date;
    public String $location;
    public String $title;
    public String $text;
    public String $imgSrc;
}

class Activity
{

    public function getActivities($subMenu, $datas): ?array
    {
        $list_activities = [];
        if ($subMenu === 'others') {
            foreach ($datas['news']['others'] as $key => $value) {
                if (is_array($value)) $list_activities[$key] = $value;
            }
        } else {
            $list_activities = $datas['news']["$subMenu"]["contents"];
        }
        return $list_activities;
    }

    public function getActivity($subMenu, $date, $datas, $category = null): MyActivity
    {

        $myActivity = new MyActivity();
        $activities = ($category != "") ? $datas['news']["$subMenu"]["$category"] : $datas['news']["$subMenu"]["contents"];
        $myActivity->imgSrc = ($category != "") ? "img/activities/" . $subMenu . "/" . "$category" . "/" . $date : "img/activities/" . $subMenu . "/" . $date;

        foreach ($activities as $activity) {
            if ($activity['date'] === "$date") {
                $myActivity->date = $activity['date'];
                $myActivity->location = $activity['place'];
                $myActivity->title = $activity['title'];
                $myActivity->text = $activity['text'];
            }
        }
        return $myActivity;
    }
}
