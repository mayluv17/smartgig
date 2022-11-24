<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'xircuitr_access');    // DB username
define('DB_PASSWORD', 'accessplus123');    // DB password
define('DB_DATABASE', 'xircuitr_smart');      // DB name
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die( "Unable to connect");
$database = mysql_select_db(DB_DATABASE) or die( "Unable to select database");
?>