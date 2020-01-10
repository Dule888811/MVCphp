<?php
class Login_Model extends Model
{
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=mvc','root','');
        
    }
  
    public function run()
    {
        $uname = $_POST['uname'];
        $password = $_POST['psw'];
     /*   $this->db->prepare("SELECT id from users WHERE username = :username and password = :password");
        $this->db->exec(array(
            ':username' => $uname,
            ':password' => $password
        )); */
        $stmtUserCheck = $this->db->prepare("SELECT * FROM mvc.users WHERE username=? AND password=?");
		$stmtUserCheck->bindValue(1,$uname);
        $stmtUserCheck->bindValue(2,$password);
        $stmtUserCheck->execute();
        var_dump($stmtUserCheck);
    }
  
}
    
?>