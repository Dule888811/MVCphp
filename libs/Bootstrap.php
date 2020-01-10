<?php
class Bootstrap
{
    public function __construct()
    {
        $url =  isset($_GET['url']) ?  $_GET['url'] : null;
        $url = rtrim($url,'/');
        $url = explode('/',$url);
        $file = 'controllers/' . $url[0] . '.php';
        if(file_exists( $file))
        {
            require  $file;
            $controler = new $url[0];
            $controler->loadModel($url[0]);
            $controler->index();
            if(isset($url[2]))
            {
                $controler->{$url[1]}($url[2]);
            }
            else
            if(isset($url[1]) && method_exists($controler,$url[1]))
            {
                $controler->{$url[1]}();
            }
        }else 
        {
            require 'controllers/index.php';
            $controler = new Index();
            $controler->index();
        }
        
       
    }
}

?>