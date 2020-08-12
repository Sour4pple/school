<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$firstname = $_POST["Vorname"];
$lastname = $_POST["Nachname"];
$gender = $_POST["Geschlecht"];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO members (firstname, lastname, gender)
VALUES ('$firstname', '$lastname', '$gender')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header("Refresh:0; url=register.php?action=success");
?>