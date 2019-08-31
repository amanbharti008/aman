<?php
session_start();
ini_set('display_errors', 1);
require_once 'sso_handler.php';
$required_fields = array('username', 'email', 'roll_number');
$CLIENT_ID='cGbH31txxrfwlUxbCC89eSO67UIkoaEInQtp9i1g';
$CLIENT_SECRET='QVfhHasPTaqcA810AFAO0Jpyd2eD9LXZGRgzZcAeC7V1PmJKTzdnuuxZsmfCEsA31uKs0AFLsbzfSIXNYG76vwqpr7fNszs8yved6NJbmv5LncuyBokjOXWHEbr1sQSK';
$required_scopes=array('basic');
$REDIRECT_URI='https://www.ecell.in/ssp/index.php';
$sso_handler = new SSOHandler($CLIENT_ID, $CLIENT_SECRET);
if ($sso_handler->validate_code($_GET)) {
  $response = $sso_handler->default_execution($_GET, 'https://www.ecell.in/ssp/sso.php',$required_scopes,$required_fields);
}
// echo $response['access_information'];
 if (!isset($response['error']) && isset($response['user_information'])&& isset($response['access_information'])) {
        $user_information_response=$response['user_information'];
        $_SESSION["ldap"]=$user_information_response['username'];
        include "db_config.php";
        $ldap=$_SESSION['ldap'];

      include "db_config.php";
      $sql = "INSERT INTO session_info (ldap) 
VALUES
      ('$ldap'
      )";

if (mysqli_query($conn, $sql)) {
    echo '';
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
        $result = mysqli_query($conn, "SELECT * FROM student WHERE username = '$ldap'");
		$num_rows = mysqli_num_rows($result);

		// if ($num_rows > 1){
		// session_destroy();
		// echo '<script>alert("Due to bad behaviour your account has been blocked. Please contact fcof@ecell.in to retrive your account.");</script>';
		// }

		// if ($num_rows == 1){
		// $_SESSION["first_login"] = 0;
		// header("Location: startup.php");
		// }

		// else{
		//$sql =	"UPDATE student SET status = '0' WHERE  username = '$ldap'";
		// if (mysqli_query($conn, $sql)) {
			// $_SESSION["first_login"] = 1;
			$_SESSION["roll_number"] = $user_information_response['username'];
			$_SESSION['email'] = $user_information_response['email'];
			header("Location: index.php");
		// } 
		// else {
	 //    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		// }
		// }

		mysqli_close($conn); 
  }
else header("Location: index.php");
//echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
?>
