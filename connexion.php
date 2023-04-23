<?php
$db="mysql:host=localhost;dbname=aws";
$login="root";
$pw="";
try{
	$dbh = new PDO($db,$login,$pw);
}
catch (PDOException $e){
	print "Error!:".$e->getmessage()."<br/>";
	die();
}

?>