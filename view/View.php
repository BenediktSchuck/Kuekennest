<?php

namespace kuekennest2\View;

class View
{

    private string $title;

    public function __set(string $name, string $value)
    {
        if ($name == 'title') {
            error_log("Das ist aber ein schöner Name: $value");
        }
        $this->title = $value;
    }

    final function render_html($callback, $params = [])
    {
        $this->render_header();
        $this->render_navbar();
        $this->$callback($params);
        $this->render_footer();
    }


    final function render_header()
    {
        $title = $this->title;
        require_once 'static/partials/header.php';
    }

    final function render_navbar()
    {
        $title = $this->title;
        require_once 'static/partials/navbar.php';
    }

    final function render_footer()
    {
        require_once 'static/partials/footer.php';
    }

}