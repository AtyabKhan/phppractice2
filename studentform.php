<?php
    $conn=new mysqli("localhost","phpadmin","Default!@#$56","joining");
    $sql="SELECT * FROM students";
    $result=$conn->query($sql);
    
    $st_name="";
    if (isset($_POST["student_name"])) {
        $st_name=$_POST["student_name"];
    }
    $st_age="";
    if(isset($_POST["student_age"])){
        $st_age=$_POST["student_age"];
    }
    $class="";
    if(isset($_POST["class"])){
        $class=$_POST["class"];
    }
    print_r($class);
    $sql="INSERT INTO students(student_name,classroom_fk,student_age)
    VALUES ('$st_name','$class','$st_age')";
    if($result=$conn->query($sql)){
    echo "Entry Added Successfully";
    }
?>