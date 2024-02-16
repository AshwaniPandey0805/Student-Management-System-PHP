<?php 
    include '../connectDatabase.php';

    $query = "CREATE TABLE subjects (
        id INT AUTO_INCREMENT PRIMARY KEY,
        subject_ID INT(11) NOT NULL,
        subject_name VARCHAR(200) NOT NULL
       
    );";

    if($conn->query($query) === TRUE){
        echo "Subject table created ";
    }else{
        echo "something wrong";
    }
?>