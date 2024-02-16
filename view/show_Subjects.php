<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student-ERP</title>
    <link rel="stylesheet" href="../style/tableStyle.css">
</head>
<body>
    <h1>
        Individual Student Detail
    </h1>
    <table>
    <thead>
        <tr>
            <th>Student_ID</th>
            <th>Student_name</th>
            <th>Selected_Subjects</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            include '../connectDatabase.php';
            include '../controller/addUser.php';


            // include '../model/student.php';
            // include '../tables/studentInfo.php';
            // include '../tables/subjectInfo.php';
            // include '../tables/subjects.php';
        
            
        
            $username = $_POST['name'];
            $email = $_POST['email'];
            $branch = $_POST['branch'];
            $stream = $_POST['stream'];
            $subject = $_POST['subjects'];
            
        
             
             /**
              * Method insertDataToStudentInfo
              *
              * @return void
              */
             function insertDataToStudentInfo($conn, $username, $email, $branch, $stream){
                $query = "INSERT INTO studentInfo (name, email, branch, stream) 
                VALUES ('$username', '$email', '$branch', '$stream');";
        
                if($conn->query($query) === TRUE){
                    echo "Data inserted"."<br>";
                }else{
                    echo "Something went wrong";
                }
        
                
             }
        
        
             insertDataToStudentInfo($conn, $username, $email, $branch, $stream);
        
             
             /**
              * Method insertDataToSelectedSubject
              *
              * @param $conn $conn [explicite description]
              * @param $subject $subject [explicite description]
              * @param $email $email [explicite description]
              *
              * @return void
              */
             function insertDataToSelectedSubject($conn, $subject, $email){
        
        
                foreach($subject as $id){
        
                    $query = "INSERT INTO selected_Subject (student_ID,subject_ID) 
                            SELECT id, '$id' 
                            FROM studentInfo 
                            WHERE email = '$email';";
                    $conn->query($query);
                }
        
             }
        
             insertDataToSelectedSubject($conn, $subject, $email);
        

            $fetchQuery = "SELECT studentinfo.id, studentinfo.name, GROUP_CONCAT(subjects.subject_name SEPARATOR ', ') AS selected_subjects
                            FROM studentinfo
                            LEFT JOIN selected_subject ON studentinfo.id = selected_subject.student_ID
                            LEFT JOIN subjects ON selected_subject.subject_ID = subjects.subject_ID
                            GROUP BY studentinfo.id
                            ORDER BY studentinfo.id ASC";

            $result = $conn->query($fetchQuery);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["selected_subjects"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No data found</td></tr>";
            }
            $conn->close();
        ?>
    </tbody>
</table>
</body> 
</html>