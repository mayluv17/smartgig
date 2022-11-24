<?
session_unset($_SESSION['userid']);
$_SESSION['signedout'] = 1;
header("location: ./signin");
?>