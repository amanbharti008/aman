<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

include "mysql_connect.php";
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);

$Company = mysqli_real_escape_string($link, $_REQUEST['Company']);
$servicereq = mysqli_real_escape_string($link, $_REQUEST['servicereq']);
 
// attempt insert query execution
$sql = "INSERT INTO `newservreq`(`Name`, `Email`, `Company`, `Servicereq`) 
VALUES ('$name','$email','$Company','$servicereq')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{ 
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>