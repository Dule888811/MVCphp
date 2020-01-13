<?php
class Comment_Model extends Model
{
    public function __construct()
    {
      
        $this->db = new PDO('mysql:host=localhost;dbname=mvc','root','');
        $this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
    }

    public function add()
    {
      
        $sql = ("INSERT INTO `comments` (`comment`,`blog_id`,`user_id`) VALUES (:comment,:blog_id,:user_id)");
        $result = $this->db->prepare($sql);
        $result->execute(array( 
                                ':comment' => $item['comment'],
                                ':blog_id' =>  $item['$blog_id'],
                                ':user_id' =>  $item['$user_id']
                            ));   
        
        if ($result->rowCount() > 0) {
        
        return true;
        } else {
            echo "nije snimnjem komentar";
        }
    }
        
}

    ?>