<?php
    $conn=new mysqli("localhost","phpadmin","Default!@#$56","joining");
    $sql="SELECT * FROM school";
    $result=$conn->query($sql);
    
    $cr_name="";
    if (isset($_POST["classroom_name"])) {
        $cr_name=$_POST["classroom_name"];
    }
    $cr_code="";
    if(isset($_POST["class_code"])){
        $cr_code=$_POST["class_code"];
    }
    $section="";
    if(isset($_POST["section"])){
        $section=$_POST["section"];
    }
    $school="";
    if(isset($_POST["school"])){
        $school=$_POST["school"];
    }
    print_r($school);
    $sql="INSERT INTO classrooms(classroom_name,school_fk,class_code,section)
    VALUES ('$cr_name','$school','$cr_code','$section')";
    if($result=$conn->query($sql)){
    echo "Entry Added Successfully";
    }
?>