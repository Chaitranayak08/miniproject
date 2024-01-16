<?php

include('connect.php');

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the required fields are set in $_POST
    if (isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['phone'])) {
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];

        // SQL injection prevention using prepared statements
        $stmt = $con->prepare("INSERT INTO signup (email, username, password, phone) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $email, $username, $password, $phone);

        try {
            if ($stmt->execute()) {
                echo "Registration successful";
                $insert = true;
                header("location: home.html");
                exit(); // Ensure script stops here to prevent further output after the header
            }
        } catch (Exception $e) {
            echo "Something went wrong: " . $e->getMessage();
        }

        $stmt->close();
    } else {
        echo "One or more required fields are missing in the form data.";
    }
} else {
    echo "Form not submitted.";
}

$con->close();

?>
