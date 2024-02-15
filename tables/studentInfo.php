<?php 
include '../connectDatabase.php';

/**
 * studentinfo table
 */
$studentInfo = "CREATE TABLE studentInfo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    branch VARCHAR(100) NOT NULL,
    stream VARCHAR(100) NOT NULL
);";

if($conn->query($studentInfo) === TRUE){
    echo "StudentInfo table created successfully";
}else{
    echo "Table not created";
}

?>