<?
$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$params = explode('.', $url);
$isIP = (bool)ip2long($_SERVER['HTTP_HOST']);

if($params[0] != 'www' and $_SERVER['HTTP_HOST'] !='localhost' and !$isIP):
	header("Location: http://www.$url");
elseif(!$_SERVER['HTTPS'] and $_SERVER['HTTP_HOST'] !='localhost' and !$isIP):
	header("Location: https://$url");
endif;
?>