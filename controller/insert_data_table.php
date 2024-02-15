<?php 

    include '../connectDatabase.php';

    // include '../model/student.php';

    // include '../tables/studentInfo.php';

    // include '../tables/subjectInfo.php';

     $username = $_POST['name'];
    //  echo $username."<br>";
     $email = $_POST['email'];
    //  echo $email."<br>";
     $branch = $_POST['branch'];
    //  echo $branch."<br>";
     $stream = $_POST['stream'];
    //  echo $stream."<br>";

     $subject = $_POST['subjects'];
     print_r($subject);

     
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
        

        // if($conn->query($query) === TRUE){
        //     echo "Data added to selected subjet table ";
        // }else{
        //     echo "Something went wrong";
        // }

     }

     insertDataToSelectedSubject($conn, $subject, $email);


//      INSERT INTO subjects(subject_ID, subject_name)
// VALUES(101, 'Math')


    
     




?>