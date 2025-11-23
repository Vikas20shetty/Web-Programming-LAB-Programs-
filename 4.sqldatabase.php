<?php 
if (isset($_POST['submit'])) { 
    $username = $_POST['username']; 
    $password = $_POST['password']; 
    $conn = new mysqli("localhost", "root", "", "student_database"); 
    $sql = "select * from student_login where username='" . $username . "' and password = '" . $password . "'"; 
    $result = mysqli_query($conn, $sql); 
    if (mysqli_num_rows($result) > 0) { 
        echo "Login Successful"; 
    } else 
        echo "Username and password does not exist"; 
} 
?>



CREATE DATABASE student_database;

CREATE TABLE student_login (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);


INSERT INTO student_login (username, password) 
VALUES ('kiran000@gmail.com', 'mypassword');
