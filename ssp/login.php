<?php
require_once 'sso_handler.php';
$CLIENT_ID='cGbH31txxrfwlUxbCC89eSO67UIkoaEInQtp9i1g';
$CLIENT_SECRET='QVfhHasPTaqcA810AFAO0Jpyd2eD9LXZGRgzZcAeC7V1PmJKTzdnuuxZsmfCEsA31uKs0AFLsbzfSIXNYG76vwqpr7fNszs8yved6NJbmv5LncuyBokjOXWHEbr1sQSK';
$response_type = 'code';
$permissions = 'ldap';
$sso_handler = new SSOHandler($CLIENT_ID, $CLIENT_SECRET);
$url = $sso_handler->gen_auth_url($response_type, $state, $permissions);
header("location:".$url); 
?>
