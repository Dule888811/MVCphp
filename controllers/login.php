<?php
class Login extends Controller
{
    public function __construct()
    {
        parent::__construct();
       
    }
    public function index()
    {
        $this->view->render('login/index',0);
    }

   public function run()
   {
       $this->model->run();
       if($this->model->run())
       {
        header('Location: ' . URL);
       }
   }

   public function logout() {
    $this->model->logout();
}

}
?>