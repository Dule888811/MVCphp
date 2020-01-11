<?php
class Index extends Controller
{
    public function __construct()
    {
      parent::__construct();  
      session_start();
     
    }
    public function index()
    {
        $this->view->render('index/index');
    }
}


?>