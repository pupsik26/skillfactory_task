<?php


class Controller_Main extends Controller {

    public function action_index() {
        $this->view->generate('index.php');
    }

    public function action_gd()
    {
        $this->view->title = 'GD';
        $this->view->generate('gd.php');
    }

    public function action_about()
    {
        $model = new Model_Portfolio();
        $this->view->title = 'Наша команда';
        $this->view->generate('about.php', $model->get_data());
    }

    public function action_products()
    {
        $this->view->generate('products.php');
    }

}

?>

