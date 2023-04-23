<?php
$db="mysql:host=localhost;dbname=aws";
$login="root";
$pw="";
try{
	$dbh = new PDO("sqlsrv:server = tcp:azuresqlserverzh.database.windows.net,1433; Database = aws", "azuresqlserver", "Azure123456789.");
}
catch (PDOException $e){
	print "Error!:".$e->getmessage()."<br/>";
	die();
}

?>
