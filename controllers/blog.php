<?php
class Blog extends Controller
{
    public function __construct()
    {
        parent::__construct();
       
        
    }

    public function create()
    {
        $this->view->render('blog/create',1);
    }
    
   
    public function getAll()
    {
        
        $blogs = $this->model->getAll();
       
        foreach($blogs as $blog)
        {
            if(isset($blog['id']))
            {
            if($this->model->getComment($blog['id']))
            {
                $blog['comment'] = $this->model->getComment($blog['id']);
               
            } 
            var_dump($this->model->getComment($blog['id']));
           }   
        }
     
        
       $this->view->blogs = $blogs;
       $this->view->render('blog/index',0);
    }

    public function add()
    {
        session_start();
        $item = array();
        $item['user_id'] = $_SESSION['id'];
        $item['text'] = $_POST['blogT'];
        $item['image'] = !empty($_FILES['image']['name']) ? $_FILES['image']['name'] : '';
        if (!empty($_FILES['image']['tmp_name']) && $_FILES['image']['error'] == 0 && $_FILES['image']['size'] > 0) {
            $listaExt = array('png','jpg','jpeg');
            var_dump($_FILES['image']);
            $ext = $_FILES['image']['name'];
            $ext = explode(".", $ext);
            $ext = array_pop($ext);
            if(in_array($ext,$listaExt)) {
                $item['image']  = file_get_contents($_FILES['image']['tmp_name']);
                $item['image'] = base64_encode($item['image']);
                 $this->model->add($item);
            }
        }    
    }
}
   


?>