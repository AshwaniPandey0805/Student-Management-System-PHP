<?php 
    include '../connectDatabase.php';

    $selectedSubject = "CREATE TABLE selected_Subject (
        id INT AUTO_INCREMENT PRIMARY KEY,
        student_ID INT(11) NOT NULL,
        subject_ID INT(11) NOT NULL,
        FOREIGN KEY (student_ID) REFERENCES studentInfo(id)
    );";

    if($conn->query($selectedSubject) === TRUE){
        echo "Selected Subject created ";
    }else{
        echo "something wrong";
    }
?>



<!-- SELECT studentinfo.id, studentinfo.name, selected_subject.subject_ID, subjects.subject_name
FROM studentinfo
LEFT JOIN selected_subject ON studentinfo.id = selected_subject.student_ID
LEFT JOIN subjects ON selected_subject.subject_ID = subjects.subject_ID
ORDER BY studentinfo.id ASC; -->