<?php
class Blog_Model extends Model
{
    public function __construct()
    {
      // parent:: __construct();
     
        $this->db = new PDO('mysql:host=localhost;dbname=mvc','root','');
        $this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
    }

    public function getComment($id)
    {
       $sql =("SELECT c.`id`  FROM `comments` c 
               INNER  JOIN `blog` b  ON c.`blog_id` = c.`id` WHERE c.`blog_id` = {$id}");
           $result = $this->db->query($sql);
          $rs =   $result->fetch(PDO::FETCH_ASSOC);
            return  $rs;
            if ($rs->rowCount() > 0) {
                header('Location: ' . URL);
            }

    }

   public  function getAll(){
           $items[] = '';
       $sql = "SELECT * FROM `blog`";
       $result = $this->db->query($sql);
      
       if ($result->rowCount() > 0) {
        while ($rs = $result->fetch(PDO::FETCH_ASSOC)) {
            $items[] = $rs;
        }
       
        return  $items;
    }else {
            echo "no blogs";
        }
   }    
               
      public function add($item) 
      {     
            $sql =("INSERT INTO `blog` (`user_id`, `text`, `image`) VALUES (:user_id,:text,:image)");
            $result = $this->db->prepare($sql);
            $result->execute(array( ':user_id' => $item['user_id'],
                                     ':text' => $item['text'],
                                     ':image' =>  $item['image']));
            if ($result->rowCount() > 0) {
                header('Location: ' . URL);
            }
      }
}
  ?>