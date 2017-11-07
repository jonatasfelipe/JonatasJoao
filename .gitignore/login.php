<?php
 $user =  trim($_POST['username']);
 $pswd =  trim($_POST['password']);
 $pwdmd5 = md5($pswd);
 //echo $user . " - " . $pswd . " - " . $pwdmd5;
 require_once "conexao.php"; 
 $con = open_database();
 selectDb();
 $sql = "SELECT * FROM usuarios where usuario like '$user'";
 $rs = mysql_query($sql);
 close_database($con);
 $row = mysql_fetch_array($rs);
 echo $row['usuario'] . " - " . $row['senha'] . "<BR/><br/>";
 if(md5($pswd) == $row['senha']){
  session_start();

$_SESSION['user'] = $user; 
$_SESSION['pswd'] = $pswd;
Header("Location: menu.html");
}
else Header ("Location: index.html");
?>