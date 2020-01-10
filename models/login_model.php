<?php
class Login_Model extends Model
{
    public function __construct()
    {
 
       
    }
  
    public function run()
    {
        $uname = $_POST['uname'];
        $password = $_POST['psw'];
        $this->db->prepare("SELECT id from users WHERE username = :username and password = :password");
        $this->db->execute(array(
            ':username' => $uname,
            ':password' => $password
        ));
        $data = fatchAll();
        var_dump($data);
    }
  
}
    
?>