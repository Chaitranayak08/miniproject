<?php
include('connect.php');
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    // Hash the password for secure storage and retrieval
    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    // Use prepared statements to prevent SQL injection
    $sql = "insert into signup(email,username,password,phone) values ('$email','$username','$password','$phone');";
    
    try {
        //   $stmt = $con->prepare($sql);
        //   $stmt->bind_param("ssss", $email,$username, $hashedPassword, $phone);

        if ($con->query($sql)==true) {
            echo "Registration successful";
            $insert=true;
            header("Location: home.html");
        //       exit(); // Ensure no further output is sent
        // }
        //  else {
        //      echo "Error: " . $stmt->error;
        //  }

       
         } // $stmt->close();
    }
     catch (Exception $e) {
        echo "Something went wrong";
    }


$con->close();
?>
