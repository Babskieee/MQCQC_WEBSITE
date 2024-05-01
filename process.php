<?php
// Database credentials
$servername = "localhost"; // Change to your server's hostname if needed
$username = "id22107938_abundant_spools"; // Your MySQL username
$password = "@GAMERlvlr23!"; // Your MySQL password
$dbname = "d22107938_babs"; // The name of your MySQL database

// Create a new connection to MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Variables to insert into the database (assuming they come from POST data)
$first_name = $_POST['first-name'];
$middle_name = $_POST['middle-name'];
$last_name = $_POST['last-name'];
$suffix = $_POST['suffix'];
$address = $_POST['address'];
$date_of_birth = $_POST['dob'];
$email = $_POST['email'];
$contact_number = $_POST['contactNo'];
$sex = $_POST['sex'];
$grade = $_POST['grade'];
$strand = $_POST['strand'];
$campus = $_POST['campus'];

// Prepare SQL query to insert into StudentEnrollment
$sql = "INSERT INTO StudentEnrollment (
    first_name,
    middle_name,
    last_name,
    suffix,
    address,
    date_of_birth,
    email,
    contact_number,
    sex,
    grade,
    strand,
    campus
) VALUES (
    ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
)";

// Prepare the SQL statement
$stmt = $conn->prepare($sql);

// Bind the parameters to the SQL query
$stmt->bind_param(
    "sssssssssiss", // Define parameter types: "s" for string, "i" for integer
    $first_name,
    $middle_name,
    $last_name,
    $suffix,
    $address,
    $date_of_birth,
    $email,
    $contact_number,
    $sex,
    $grade,
    $strand,
    $campus
);

// Execute the SQL statement
if ($stmt->execute()) {
    echo "Record inserted successfully.";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
