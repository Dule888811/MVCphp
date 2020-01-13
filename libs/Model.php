<?php
    class Model extends PDO
    {
            public function __construct()
        {
               $this->db = new Database();
        }
          
    }
?>