<?php

session_start();

$host = "localhost"; /* host name */
$user = "root"; /* user */
$password = ""; /* password */
$dbname = "local-e"; /* database name */

$con = mysqli_connect($host, $user, $password, $dbname, 3306);

// check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
<?php

session_start();

$host = "localhost"; /* host name */
$user = "root"; /* user */
$password = ""; /* password */
$dbname = "local-e"; /* database name */
$port = 3306; /* port number */

$con = mysqli_connect($host, $user, $password, $dbname, 3306);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
