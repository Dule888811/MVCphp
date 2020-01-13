<?php
class Comment extends Controller
{
    public function __construct()
    {
        parent::__construct();
        session_start();
        
    }

    public function create()
    {
      
        $this->view->render('comment/create');
    }


  
    public function add()
    {
        $item['comment'] = $_POST['commentAdd'];
        $item['user_id'] = $_SESSION['id'];
        $item['blog_id'] = $_POST['blogId']; 
        $this->model->add($item);
    }
}
    ?>