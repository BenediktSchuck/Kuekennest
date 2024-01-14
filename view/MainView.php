<?php

namespace kuekennest2\View;

require_once 'view/View.php';

class MainView extends View
{

    static function home(){
        require_once 'static/home.php';
    }

    static function activities()
    {
        require_once 'static/activities.php';
    }

    static function contact()
    {
        require_once 'static/contact.php';
    }

    static function information()
    {
        require_once 'static/information.php';
    }

    static function parents()
    {
        require_once 'static/parents.php';
    }

}