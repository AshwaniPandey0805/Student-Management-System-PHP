<?php 
    include '../connectDatabase.php';

    $selectedSubject = "CREATE TABLE selected_Subject (
        id INT AUTO_INCREMENT PRIMARY KEY,
        student_ID INT NOT NULL,
        subject_ID INT NOT NULL,
        FOREIGN KEY (student_ID) REFERENCES studentInfo(id)
    );";

    if($conn->query($selectedSubject) === TRUE){
        echo "Selected Subject created ";
    }else{
        echo "something wrong";
    }
?>