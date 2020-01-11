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
        $uname = $_POST['uname'];
        $password = $_POST['psw'];
    
    $sql = "Select `id` FROM `users`  WHERE `username` = :username AND `password` = :password";
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
    
?>