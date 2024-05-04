<?php
// Configuration
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'student_database';

// Create connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if (isset($_POST['save']    )) {
    $firstName = $_POST['FirstName'];
    $middleName = $_POST['MiddleName'];
    $lastName = $_POST['LastName'];
    $suffix = $_POST['Suffix'];
    $address = $_POST['Address'];
    $dateOfBirth = $_POST['dob'];
    $email = $_POST['email'];
    $contactNo = $_POST['contactNo'];
    $sex = $_POST['sex'];
    $grade = $_POST['grade'];
    $strand = $_POST['strand'];
    $campus = $_POST['campus'];

    // Insert data into database
    $sql = "INSERT INTO students (first_name, middle_name, last_name, suffix, address, date_of_birth, email, contact_no, sex, grade, strand, campus)
            VALUES ('$firstName', '$middleName', '$lastName', '$suffix', '$address', '$dateOfBirth', '$email', '$contactNo', '$sex', '$grade', '$strand', '$campus')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>