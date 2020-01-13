<?php
class Comment_Model extends Model
{
    public function __construct()
    {
      
        $this->db = new PDO('mysql:host=localhost;dbname=mvc','root','');
        $this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
    }

    public function add($blog_id,$user_id)
    {
        if(isset($_POST['commentAdd'])){
            $commentAdd = $_POST['commentAdd'];
        }
       
       
if(isset($_POST['commentAdd']) ){
    $sql = "INSERT INTO `comment`,`blog_id`,`user_id`";
    $result = $this->db->prepare($sql);
    $result->execute(array( 
                            'comment' => $_POST['commentAdd'],
                            'blog_id' => $blog_id,
                            'user_id' => $user_id,
                        ));   
    
    if ($result->rowCount() > 0) {
      
       return true;
    } else {
         echo "nije snimnjem komentar";
    }
}
}
    
}

    ?>