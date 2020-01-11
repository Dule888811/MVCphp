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
     /*       var_dump($this->db->prepare("SELECT id from users WHERE username = :username and password = :password"));
              $this->db->exec(array(
            ':username' => $uname,
            ':password' => $password
        ));  */
       
      
     //   $stmtUserCheck = $this->db->prepare("SELECT * FROM `mvc.users` WHERE `user.username` =  {$uname}  and `user.password` = {$password}");
      //  $stmtUserCheck->->bindParam(1, {$uname});
     //   $stmtUserCheck->->bindParam(2, {$password});
	//	$stmtUserCheck->bindParms('user.username',$uname);
     //   $stmtUserCheck->bindParms('user.password',$password);
     //   $stmtUserCheck->execute();
     //   var_dump($stmtUserCheck);
      //  var_dump($stmtUserCheck->execute());
     //   var_dump($stmtUserCheck->execute());
      //  var_dump( $stmtUserCheck->fetchAll(PDO::FETCH_ASSOC));



  /*    $stmtUserCheck = $this->db->prepare('SELECT * FROM mvc.users WHERE username=? AND password=?');
      $stmtUserCheck->bindValue(1, $uname);
      $stmtUserCheck->bindValue(2,$password);
      var_dump($stmtUserCheck);
      $stmtUserCheck->execute(); */

   /*   $data = array($uname, $password); 
        $stmta = $this->db->prepare("SELECT FROM users (username, password) VALUES (?, ?)");
        $stmta->execute($data);
        var_dump($stmta->execute($data)); */

    /*    $stmt = $this->db->prepare("SELECT * FROM users WHERE username=:username and password=:password");
        $stmt->bindParam(":email",  $uname);
        $stmt->bindParam(":email",  $password);
        var_dump($stmt);
        var_dump($stmt->execute()); */
      //  $stmt->fetch(PDO::FETCH_ASSOC);

   /*   $sth = $this->db->prepare('SELECT *
             FROM users
            WHERE username = :username AND password = :password);
        $sth->bindParam(:username, $uname);
        $sth->bindParam(:password, $password);
        var_dump($sth);
        var_dump($sth->execute()); */

     /*   $sql = "SELECT username,password";
            $stmt = $this->$db->prepare($sql);
            $stmt->bindParam(":uesername", $uname, PDO::PARAM_STR);
            $stmt->bindParam(":password", $password, PDO::PARAM_LOB, 0, PDO::SQLSRV_ENCODING_BINARY);
            var_dump($stmt);
            var_dump($stmt->execute()); */


            $sql = "Select `id` FROM `users`  WHERE `username` = :username AND `password` = :password
            ";
    $result = $this->db->prepare($sql);
      
    var_dump($result->execute(array( 'username' => $uname,
    'password' => $password)));
    $result->execute(array( 'username' => $uname,
                            'password' => $password));
     
    }
  
}
    
?>