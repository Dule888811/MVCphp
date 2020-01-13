<?php
class Blog_Model extends Model
{
    public function __construct()
    {
        session_start();
        $this->db = new PDO('mysql:host=localhost;dbname=mvc','root','');
        $this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
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
      /*      session_start();
            $item['user_id'] = $_SESSION['id'];
            $item['text'] = $_POST['blogT'];
            if(isset($_FILES['image']) && $_FILES['image']['size'] > 0){
                if($_FILES['image']['type'] == 'image/jpeg' || $_FILES['image']['type'] == 'image/png') {
                    $listaExt = array('png','jpg','jpeg');
                    $ext = $_FILES['image']['name'];
                    $ext = explode(".", $ext);
                    $ext = array_pop($ext);
                    if(in_array($ext,$listaExt)) {
                        $item['image'] = file_get_contents($_FILES['image']['tmp_name']);
                        $item['image'] = base64_encode($item['image']);
                    }
                }
            }     */
          //  echo "<pre>";
           // var_dump( $item['user_id'],$item['text'], $item['image']);        
            $sql ="INSERT INTO `blog` (`user_id`, `text`, `image`)
            VALUES ('{$item['user_id']}', '{$item['text']}','{$item['image']}' ";
                            if ( $this->db->exec($sql) == true  ) {
                                header('Location: ' . URL);
                            } else{
                                echo "blog not save";
                            }
                            
                       
            } 
    
 
}
  ?>