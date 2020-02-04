<?php

$servername = "project123.mysql.database.azure.com";
$database = project;
$username = malak@project123;
$password = Autoauto12;

try {

$dsn = "mysql:host=$servername;dbname=$database;charset=$charset";
$pdo = new PDO($dsn, $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo “Connection Okay”;

return $pdo

}

catch (PDOException $e)

{
echo “Connection failed: ”. $e->getMessage();
}

?>
