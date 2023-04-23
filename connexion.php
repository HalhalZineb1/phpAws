<?php
$db="mysql:host=localhost;dbname=aws";
$login="root";
$pw="";
try{
	$dbh = new PDO("sqlsrv:server = tcp:azuresqlserverzh.database.windows.net,1433; Database = aws", "azuresqlserver", "{your_password_here}");
}
catch (PDOException $e){
	print "Error!:".$e->getmessage()."<br/>";
	die();
}

?>
