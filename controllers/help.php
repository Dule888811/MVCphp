<?php
class Help extends Controller
{
    public function __construct()
    {
        parent::__construct();
        
    }

    public function index()
    {
        $this->view->render('help/index');
    }

    public function other($args=false)
    {
      
        require 'models/help_model.php';
        $model = new Help_Model();
        echo $model->getValue();
    }
}
?>