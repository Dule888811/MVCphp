<?
class Comment extends Controller
{
    public function __construct()
    {
        parent::__construct();
        session_start();
        
    }

    public function create()
    {
        $this->view->render('comment/create',1);
    }

}
    ?>