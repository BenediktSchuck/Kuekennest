<?php

namespace Kuekennest2\Controller;

use kuekennest2\View\MainView;

require_once 'view/MainView.php';

class InformationController
{
    public function actionInformation()
    {
        $home_view = new MainView();
        $home_view->title="Startseite";
        $home_view->render_html('information');
    }
}