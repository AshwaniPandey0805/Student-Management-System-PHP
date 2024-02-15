<?php 
    include '../connectDatabase.php';

    /**
     * Create student table name student
     */
    $studentTabe = "CREATE DATABASE student";

    if($conn->query($studentTabe) === TRUE){
        echo "Student table created Successfullty";
    }else{
        echo "Something went wrong while creating databse";
    }


    /**
     * insert
     */
     

?>