<?php
if(isset($_POST['submit'])){
require "dbh.inc.php";
$stdid=$_POST['stdid'];
$passold=$_POST['stdold'];
$passnew=$_POST['stdnew'];
$sql = "UPDATE students SET Password = ? WHERE Id = ?";
$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("si", $passnew, $stdid);

// Execute the statement
if ($stmt->execute()) {
    session_start();
    $_SESSION['userID']= $row['ID'];
    header('Location: ../HomePage.php?passwordUpdated');

    exit();
} else {
    header('Location: ../HomePage.php?error');

    exit();
}

// Close the statement and connection

}