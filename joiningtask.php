<?php
    $conn=new mysqli("localhost","phpadmin","Default!@#$56","joining");
    // if($conn->connect_error){
    //     echo "Error establishing database connection: " . $conn->connect_error;
    // }
    // else{
    //     echo "Connection established successfully";
    // }
    // $sql="SELECT school.school_pk AS schoolid, classrooms.classroom_pk AS classid, classrooms.school_fk AS schoolfk, students.student_pk AS studentid, students.classroom_fk AS classfk,  assessment_results.assessment_pk AS assessmentid, assessment_results.student_fk AS studentfk 
    // FROM school 
    // INNER JOIN classrooms ON schoolid=schoolfk
    // INNER JOIN students ON classid=classfk
    // INNER JOIN assessment_results ON studentid=studentfk";
    $sql="SELECT school.school_pk AS schoolid, classrooms.classroom_pk AS classid, classrooms.school_fk AS schoolfk, students.student_pk AS studentid, students.classroom_fk AS studentfk,  assessment_results.assessment_pk AS assessmentid, assessment_results.student_fk AS studentfk,students.student_name AS studentname, students.student_age AS studentage, school.school_name AS schoolName, school.school_city AS schoolCity, classrooms.class_code AS class, assessment_results.maths_obt AS mathsObt 
    FROM school 
    INNER JOIN classrooms ON school.school_pk=classrooms.school_fk
    INNER JOIN students ON classrooms.classroom_pk=students.classroom_fk
    INNER JOIN assessment_results ON students.student_pk=assessment_results.student_fk";
    $result=$conn->query($sql);
    
    while($row=$result->fetch_assoc()){
        echo "School Name: " . $row['schoolName'] . "&nbsp&nbsp" . $row['schoolCity'] . "&nbsp&nbsp Student Name: &nbsp&nbsp" . $row['studentname'] . "&nbsp Marks in Maths &nbsp" . $row['mathsObt'] ;
        echo "<br>";
    }
?>