<?php

namespace Kuekennest2\Controller;

use kuekennest2\View\MainView;

require_once 'view/MainView.php';

class HomeController
{
    public function actionHome()
    {
        $home_view = new MainView();
        $home_view->title="Startseite";
        $home_view->render_html('home');
    }
}