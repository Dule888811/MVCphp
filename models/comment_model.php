<?php
class Comment_Model extends Model
{
    public function __construct()
    {
      
        $this->db = new PDO('mysql:host=localhost;dbname=mvc','root','');
        $this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
    }

  
    
}

    ?>