<?php
// Database connection details
$servername = 'localhost';
 $username = 'root';
$password = '';
$dbname = "janani_food_zone";


// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);



 
// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


// SQL query to insert data into the database
$sql = "INSERT INTO admin(name,email,subject,message) VALUES ('$name', '$email','$subject','$message')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully.";
    echo "Name: " . $name . "<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
