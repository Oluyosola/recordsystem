<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emp_database";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
// $sql = "CREATE DATABASE emp_database";
// if ($conn->query($sql) === TRUE) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . $conn->error;
// }
// sql to create table
// $sql = "CREATE TABLE add_employees (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     employee_name VARCHAR(50) NOT NULL,
//     email_address VARCHAR(50),
//     age INT(6)
//       )";
//     if ($conn->query($sql) === TRUE) {
//         echo "Table add_employees created successfully";
//     } else {
//         echo "Error creating table: " . $conn->error;
//     }
//     // $sql = "CREATE TABLE departments (
    //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     department_name VARCHAR(50) NOT NULL,
    //     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
    //     updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    //     )";
    //     if ($conn->query($sql) === TRUE) {
    //         echo "Table departments created successfully";
    //     } else {
    //         echo "Error creating table: " . $conn->error;
    //     }
    $sql = "CREATE TABLE employee_files (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        employee_file TEXT,
        employee_id INT(6) UNSIGNED
        )";
        if ($conn->query($sql) === TRUE) {
            echo "Table employee_files created successfully";
        } else {
             echo "Error creating table: " . $conn->error;
        }
    // }$sql = "CREATE TABLE employee_departments (
    //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     employee_id INT(6) UNSIGNED,
    //     department_id INT(6) UNSIGNED
    //     )";
    //     if ($conn->query($sql) === TRUE) {
    //         echo "Table employee_departments created successfully";
    //     } else {
    //         echo "Error creating table: " . $conn->error;
    //     }