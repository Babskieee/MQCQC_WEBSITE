<?php

if ($_SERVER['REQUEST_METHOD']=='POST'){
    // Get form data
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $suffix = $_POST['suffix'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $sex = $_POST['sex'];
    $grade = $_POST['grade'];
    $strand = $_POST['strand'];
    $campus = $_POST['campus'];
}

// Connect to the MySQL database
$servername = "localhost";
$username = "root";
$password = "GAMERlvlr23";
$dbname = "student_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Insert data into the table
$sql = "INSERT INTO your_table_name (first_name, middle_name, last_name, suffix, address, email, contact_number, sex, grade, strand, campus)
        VALUES ('$first_name', '$middle_name', '$last_name', '$suffix', '$address', '$email', '$contact_number', '$sex', '$grade', '$strand', '$campus')";

if ($conn->query($sql) === TRUE) {
    echo "<h1>Form Submitted Successfully!</h1>";
    echo "<p>Name: $first_name $middle_name $last_name $suffix</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Contact Number: $contact_number</p>";
    echo "<p>Sex: $sex</p>";
    echo "<p>Grade: $grade</p>";
    echo "<p>Strand: $strand</p>";
    echo "<p>Campus: $campus</p>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the databse connection
$conn->close();

?>