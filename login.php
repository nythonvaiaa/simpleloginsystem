<?php
/*Here is DataBase Stored Info*/
$dbMail="alnoman14926@gmail.com";
$dbPass="Nomex14926";

/*Here is user given Info*/
$userMail=$_POST['email'];
$userPass=$_POST['password'];


/*Condition to login*/
if($dbMail==$userMail && $dbPass==$userPass){
 echo "<h1>Login Successfull</h1>";
}else{
  echo "<h1>Login Failed!</h1>";
}

?>