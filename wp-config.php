<?php

$connectstr_dbhost = 'project123.mysql.database.azure.com';
$connectstr_dbname = 'project';
$connectstr_dbusername = 'malak';
$connectstr_dbpassword = 'Autoauto12';

$value = getenv('MYSQLCONNSTR_bridgesConnection');

 $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
 $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
 $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
 $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $connectstr_dbname);

/** MySQL database username */
define('DB_USER', $connectstr_dbusername);

/** MySQL database password */
define('DB_PASSWORD', $connectstr_dbpassword);

/** MySQL hostname : this contains the port number in this format host:port . Port is not 3306 when using this feature*/
define('DB_HOST', $connectstr_dbhost);

?>
