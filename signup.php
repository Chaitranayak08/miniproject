<?php

include('connect.php');

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$phone=$_POST['phone'];

$sql="insert into registeration_form(username,email,password,phone ) values('$username','$email','$password','$phone');";
// $result=mysqli_query($con,$sql);
try{
    if($con->query($sql)==true)
    {
        echo"Register succesfull";
        $insert=true;
        header("location:home.html");
    }
}
catch(Exception $e)

{
    echo "Something went wrong";
}

$con->close();
?>