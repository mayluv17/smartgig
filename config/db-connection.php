<?
// PHPLOCKITOPT NOENCODE
session_start();
error_reporting(0);
$db="smartgig";

$smartgig_con = new mysqli('localhost','root','admin',$db);
if(mysqli_connect_error()) echo mysqli_connect_error();
?>