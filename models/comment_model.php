<?php
class Comment_Model extends Model
{
    public function __construct()
    {
      
        $this->db = new PDO('mysql:host=localhost;dbname=mvc','root','');
        $this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
    }

    public function add($item)
    {
        echo "<pre>";
        var_dump($item['comment'],$item['blog_id'],$item['user_id']);
      
        $sql = ("INSERT INTO `comments` (`comment`,`blog_id`,`user_id`) VALUES (:comment,:blog_id,:user_id)");
        $result = $this->db->prepare($sql);
        $result->execute(array( 
                                ':comment' => $item['comment'],
                                ':blog_id' =>  $item['blog_id'],
                                ':user_id' =>  $item['user_id']
                            ));   
        
        if ($result->rowCount() > 0) {
        
            header('Location: ' . URL);
        } else {
            echo "nije snimnjem komentar";
        }
    }
        
}

    ?>