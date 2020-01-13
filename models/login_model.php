<?php
class Login_Model extends Model
{
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=mvc','root','');
        $this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
    }
  
    public function run()
    {
        if(isset($_POST['uname'])){
            $uname = $_POST['uname'];
        }
        if(isset($_POST['psw'])){
            $password = $_POST['psw'];
        }
       
if(isset($_POST['uname'])  && isset($_POST['psw'])){
    $sql = "Select `id`,`username`,`password` FROM `users`  WHERE `username` = :username AND `password` = :password";
    $result = $this->db->prepare($sql);
    $result->execute(array( 'username' => $uname,
                            'password' => $password));   
    
    if ($result->rowCount() > 0) {
        $user = $result->fetch(PDO::FETCH_ASSOC);
        session_start();
        $_SESSION['username'] = $user['username'];
        $_SESSION['password'] = $user['password'];
        $_SESSION['id'] = $user['id'];
       return true;
    } else {
         echo "nepostojeci korisnici";
    }
}
  
  
    }

    public  function findCommentById($id)
    {
        $sql = $this->db->query("SELECT `comments.comment` FROM `comments` 
         INNER JOIN `blgos` ON c.comments.id = blog.user_id
         WHERE `id` = '$id'");
        $result = $this->db->query($sql);
        if ($result->rowCount() > 0) {
            $item = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $item;
    } 

  
    public function logout()
    {
        
        session_start();
        session_destroy();
        header('Location:' .$_SERVER['HTTP_REFERER']);

    }
}    
    
?>