<?php


class View
{

    public $title;

    public function __construct()
    {
        $this->title = 'Визитка';
    }

    function generate($content_view, $data = null, $template_view = 'template.php')
    {
        include 'application/views/' . $template_view;
    }

}
