<?php
if(isset($_POST['submit'])){
require "dbh.inc.php";
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['number'];
$pass=$_POST['pass'];
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$genderValue = ($gender === 'male') ? 0 : 1;
if (empty($name) || empty($email) || empty($phone) || empty($pass) || empty($gender)) {
    header('Location: ../registration.php?error=emptyfields');
    exit();
}

// Store user information in the database (replace with your database connection)


$sql = "INSERT INTO register (name, email, phone, password, gender) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Error in preparing statement: " . $conn->error);
}

$stmt->bind_param("ssisi", $name, $email, $phone, $pass, $genderValue);

if ($stmt->execute()) {
    echo "Registration successful!";
} else {
    echo "Error in registration: " . $stmt->error;
}

$stmt->close();
$conn->close();
} else {
// If someone tries to access this page without submitting the form
header("Location: ../registration.php");
exit();
}
?>