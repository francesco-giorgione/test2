<?php
$host = 'ilike.database.windows.net';
$username = 'CloudSAe14a0d66';
$password = 'iLike_2022';
$db_name = 'iLike';

//Initializes MySQLi
$conn = mysqli_init();

mysqli_ssl_set($conn,NULL,NULL, "/var/www/html/DigiCertGlobalRootG2.crt.pem", NULL, NULL);

// Establish the connection
mysqli_real_connect($conn, 'ilike.database.windows.net', 'CloudSAe14a0d66', 'iLike_2022', 'quickstartdb', 3306, NULL, MYSQLI_CLIENT_SSL);

//If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>
