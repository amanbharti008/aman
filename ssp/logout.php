<?php
session_start();
$_SESSION = array();
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
session_destroy();
?>
<?php
$url= "https://www.ecell.in/ssp/index.php";
echo '<script>
	alert("You have been successfully logged out");
	</script>
	<script>window.location = "'.$url.'";
	</script>';
?>


