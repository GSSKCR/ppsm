<?php
include 'dbconnection.php';
//session_start();
$email=$_SESSION['sid'];
$org=$_SESSION['org'];
$msg =	'Email: ' .$email."\n"
	'Comment: ' ."\n" .$_POST['ta'];
try {
    
    $sql = "INSERT INTO problem (email,org,msg)
    VALUES ('$email','$org','$msg')";
    // use exec() because no results are returned
    $conn->exec($sql);
	mail('chaitanyareddy6688@gmail.com', $msg);
    echo "New record created successfully";
}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>

