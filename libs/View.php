<?php
    class View
    {
            public function __construct()
        {
                
        }
            public function render($name,$Include = true)
            {
                if($Include == true){
                    require 'views/header.php';
                    require 'views/' . $name . '.php';
                    require 'views/footer.php';
                }else{
                    require 'views/' . $name . '.php';
                }
               
            }
    }
?>