<?php
    //Q1 Start
    $conn=new mysqli("localhost","phpadmin","Default!@#$56","phpdb");
    // // if($conn->connect_error){
    // //     die("Connection Error" . $conn->connect_error);
    // // }
    // // else{
    // //     echo "Database connection established successfully";
    // // }
    // $sql="SELECT * FROM assessment ORDER BY age DESC LIMIT 1";
    // // if($conn->query($sql)===TRUE){
    // //     echo "Record Added Successfully";
    // // }
    // // else{
    // //     echo "Unable to Add record: " . $conn->errno . " " . $conn->error;
    // // }
    // $result=$conn->query($sql);
    // while($row=$result->fetch_assoc()){
    //     echo "Maximum age is: " . $row["age"];
    // }
    // Q1 End
    
    // Q2 Start
    // $sql="SELECT * FROM assessment WHERE age BETWEEN 22 AND 28";
    // $result=$conn->query($sql);
    // while($row=$result->fetch_assoc()){
    //     echo "Person name is: " . $row["name"] . "<br>";
    // }
    // Q2 End

    // Q3 Start
    // $sql="SELECT * FROM assessment WHERE city!='Lahore' AND city!='Rawalpindi'";
    // $result=$conn->query($sql);
    // while($row=$result->fetch_assoc()){
    //     echo "Person name is: " . $row["name"] . " " . "Name of city: " . $row["city"] . "<br>";
    // }

    // Q3 End

    //Q4 Start
    // $sql="SELECT age FROM assessment";
    // $a=0;
    // $age=0;
    // $age_sum=0;
    // $result=$conn->query($sql);
    // while($row=$result->fetch_assoc()){
    //  $a++;
    //  $age=$row["age"];
    //  $age_sum=$age_sum+$age;
    // }
    // $avg=$age_sum/$a;
    // echo "Average age is: " . $avg;
    // Q4 End

    // Q6 Start
    // $sql="DELETE FROM assessment LIMIT 1 OFFSET 3";
    // if($conn->query($sql)===TRUE){
    //     echo "Record Deleted successfully";
    // }
    // else{
    //     "Issue in deleting record";
    // }
    // Q6 End

    // Q7 Start
    // $sql="INSERT INTO assessment(name,city,age)
    // VALUES('Mansoor','Islamabad',25)";
    // if($conn->query($sql)===TRUE){
    //     echo "Record added successfully";
    // }
    // else{
    //     echo "Issue in adding record";
    // }
    // echo "<br>";
    // $sql2="SELECT * FROM assessment ORDER BY id DESC LIMIT 1";
    // $result=$conn->query($sql2);
    // while($row=$result->fetch_assoc()){
    //     echo "Name: " .$row["name"] . " City: " . $row["city"] . "<br>";
    // }
    // Q7 End

    // Q8 Start
        // $sql="SELECT * FROM assessment LIMIT 1 OFFSET 28";
        // $result=$conn->query($sql);
        // while($row=$result->fetch_assoc()){
        // echo "Name: " .$row["name"] . " City: " . $row["city"] . "<br>";
        // }
    // Q8 End 
    
    // Q9 Start
    // $sql="UPDATE assessment SET age=0 WHERE age !>22 AND !<28";
    // if($conn->query($sql)===TRUE){
    //     echo "Record updated successfully";
    // }
    // else{
    //     echo "Unable to update record" . $conn->error;
    // }
    // Q9 END

    // Q10 Start
    // $sql="UPDATE students SET age=age+1";
    // if($conn->query($sql)===TRUE){
    //     echo "Record Updated Successfully";
    // }
    // else {
    //     echo "Unable to update record";
    // }
    // Q10 End
        $sql="SELECT MAX(age) FROM assessment Order BY age";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc()){
        echo "Name: " .$row["name"] . " City: " . $row["city"] . "<br>";
        }
?>