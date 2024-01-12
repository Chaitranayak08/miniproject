<?php

session_start();
$host = "localhost";/*host name*/
$user = "root"; /*user*/
$password = ""; /*password*/
$dbname = "local";/*database name*/

$con = mysqli_connect($host,$user,$password,$dbname);
//check connection

if($con){
    die("Connection succesfull : ". mysqli_connect_error());
}
else{
    die(mysqli_error($con));
}
?>
