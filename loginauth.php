<?php

include('connect.php');

// Check if form is submitted with 'email' and 'password' keys
if (isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // SQL injection prevention using prepared statements
    $lowercaseEmail = strtolower($email);

    // Prepare statement for signup table
    $stmtSignup = $con->prepare("SELECT * FROM signup WHERE LOWER(email) = LOWER(?)");

    // Check for statement preparation error
    if (!$stmtSignup) {
        echo "Error during statement preparation: " . $con->error;
        exit();
    }

    // Bind parameters for signup table
    $stmtSignup->bind_param("s", $lowercaseEmail);

    // Execute statement for signup table
    $stmtSignup->execute();

    // Check for execution error for signup table
    if ($stmtSignup->error) {
        echo "Error during statement execution: " . $stmtSignup->error;
        $stmtSignup->close();
        $con->close();
        exit();
    }

    $resultSignup = $stmtSignup->get_result();

    // Output the SQL query for debugging

    if ($resultSignup->num_rows == 1) {
        // User found in signup table

        // Fetch user data from signup table
        $userData = $resultSignup->fetch_assoc();

        // Insert user data into signin table
        $stmtInsert = $con->prepare("INSERT INTO signin (email, password) VALUES (?, ?)");
        $stmtInsert->bind_param("ss", $userData['email'], $userData['password']);
        $stmtInsert->execute();

        if ($stmtInsert->error) {
            if ($stmtInsert->errno == 1062) {
                // Duplicate entry (email already exists in signin table)
                echo "Login failed. Duplicate entry.<br>";
            } else {
                // Other error
                echo "Error during insertion into signin table: " . $stmtInsert->error;
                $stmtInsert->close();
                $stmtSignup->close();
                $con->close();
                exit();
            }
        } else {
            echo "Login successful and data moved to signin table<br>";
            header("location: home.html");
            // exit(); // Ensure script stops here to prevent further output after the header
        }
    } else {
        echo "Login failed. User not found.<br>";
    }

    $stmtSignup->close();
} else {
    echo "Login failed. Email or password not provided.<br>";
}

$con->close();

?>
