<?php
include 'dbconnection.php';
$uid=$_POST["t1"];
$pwd=$_POST["t2"];

try{
	$sql="select * from registered where email='$uid' and password='$pwd'";
$res=$conn->query($sql);
if($res->rowcount()>0)
{
	session_start();
	//$_SESSION['sid']=$uid;
	//echo $_session['sid'];
	include 'org2.html';	
}
else{
	echo "invalid username and password";
}
}
       catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($pdo);
?>