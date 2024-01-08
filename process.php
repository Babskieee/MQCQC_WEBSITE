<?php
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "student_database";

$conn = mysqli_connect($severname, $username, $password, $dbname);

if (!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}

if (isset($_POST['save'])){
    $first_name = $_POST['first-name'];
    $middle_name = $_POST['middle-name'];
    $last_name = $_POST['last-name'];
    $suffix = $_POST['suffix'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $contact_number = $_POST['contactNo'];
    $sex = $_POST['sex'];
    $grade = $_POST['grade'];
    $strand = $_POST['strand'];
    $campus = $_POST['campus'];

    $sql_query = "INSERT INTO student_table_database (first_name, middle_name, last_name, suffix, address, email, contact_number, sex, grade, strand, campus)
        VALUES ('$first_name', '$middle_name', '$last_name', '$suffix', '$address', '$email', '$contact_number', '$sex', '$grade', '$strand', '$campus')";

    if (mysqli_query($conn, $sql_query)){
        echo "<script>alert('Student Added Successfully!')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    } mysqli_close($conn);

}
?>