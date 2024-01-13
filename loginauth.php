<!-- 

include('connect.php');

$email=$_POST['email'];
$password=$_POST['password']; -->

<!-- //sqli injection
// $email=stripcslashes($email);
// $password=stripcslashes($password);
// $email=mysqli_real_escape_string($con,$email);
// $password = mysqli_real_escape_string($con,$password);

// $sql= "select * from signin where email='$email' and password='$password';";

// $result = mysqli_query($con,$sql);
// $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
// $count=mysqli_num_rows($result);

// if($count==1)
// {
//     echo "Login succesfull";
//     header("location:home.html");
// }
// else{
//     echo"Login failed!";
// }

// $con->close(); -->


<?php

include('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password for secure storage and retrieval
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Use prepared statements to prevent SQL injection
    $sql = "select * from signin where email = '$email' and password = '$password';" ;
    
    
 $result = mysqli_query($con,$sql);
 $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 $count=mysqli_num_rows($result);
//     try {
//         // $stmt = $con->prepare($sql);
//         // $stmt->bind_param("s", $email);
//         // $stmt->execute();

//         // $result = $stmt->get_result();
//         // $row = $result->fetch_assoc();

//         if ($row && password_verify($password, $row['password'])) {
//             echo "Login successful";
//             header("Location: home.html");
//             exit(); // Ensure no further output is sent
//         } else {
//             echo "Login failed";
//         }

//         $stmt->close();
//     } catch (Exception $e) {
//         die("Error: " . $e->getMessage());
//     }
// }

if($count==1)
 {
    echo "Login succesfull";
     header("location:home.html");
 }
 else{
     echo"Login failed!";
 }
}
$con->close();
?>
