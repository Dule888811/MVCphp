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
      
        $stmtUserCheck = $this->db->prepare("SELECT * FROM `mvc.users` WHERE `user.username` =  {$uname}  and `user.password` = {$password}");
      //  $stmtUserCheck->->bindParam(1, {$uname});
     //   $stmtUserCheck->->bindParam(2, {$password});
	//	$stmtUserCheck->bindParms('user.username',$uname);
     //   $stmtUserCheck->bindParms('user.password',$password);
     //   $stmtUserCheck->execute();
        var_dump($stmtUserCheck);
        var_dump($stmtUserCheck->execute());
     //   var_dump($stmtUserCheck->execute());
      //  var_dump( $stmtUserCheck->fetchAll(PDO::FETCH_ASSOC));
    }
  
}
    
?>