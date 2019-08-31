<?php
$ldap = $_SESSION["ldap"];
define( 'DBHOST', 'localhost' );// //give host name
define( 'DBUSER', 'admin' ); //give your user name
define( 'DBPASS', 'adminadmin2012#' );	//give your password
define( 'DBNAME', 'ssp' );  // supply your database name

$conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>