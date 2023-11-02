<?php 
session_start();
require_once 'config.php';

unset($_SESSION["auto"]);
unset($_SESSION['token']);
$client->revokeToken();
session_destroy();
header('Location: ' . filter_var($redirectURI, FILTER_SANITIZE_URL));