<?php
class Comment extends Controller
{
    public function __construct()
    {
        parent::__construct();
      
        
    }

    public function create()
    {
      
        $this->view->render('comment/create');
    }
    

  
    public function add($blog)
    {
        session_start();
        $item = array();
        $item['comment'] = $_POST['commentAdd'];
        $item['user_id'] = $_SESSION['id'];
        $item['blog_id'] = $blog; 
        $this->model->add($item);
    }
}
    ?>