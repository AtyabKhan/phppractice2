<?php
print_r($_POST);
// $conn=new mysqli("localhost","root","","joining");
// if($conn->connect_error){
//     echo "Error Establishing Database Connection" . $conn->connect_error;
// }
// else{
//     echo "Connection established successfully.";
// }
// $sql="SELECT subjects.sub_name AS subname ,lecturer.first_name AS lecfname,lecturer.last_name AS leclname FROM subjects JOIN lecturer ON subjects.lecturer_id = lecturer.id";
// $sql="";

// if($conn->query($sql)=== TRUE){
//     echo "Table Created successfully";
// }
// else{
//     echo "Error creating the table " . $conn->error;
// }
// $result=$conn->query($sql);
// // // echo $sql; exit;
// while($row=$result->fetch_assoc()){
//     echo "Subject name: " . $row["subname"] . "&nbsp&nbsp&nbsp&nbsp&nbsp" ." Lecturer's First name: " .$row["lecfname"] . "&nbsp&nbsp&nbsp&nbsp&nbsp" . " Lecturer's Last name: " . $row["leclname"] . "<br>" ;
// }

?>