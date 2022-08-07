<?php
$sc_name=$_POST["school_name"];
$sc_code=$_POST["school_code"];
$sc_city=$_POST["school_city"];

$conn=new mysqli("localhost","phpadmin","Default!@#$56","joining");
// if($conn->connect_error){
//     echo "Connection Error" . $conn->connect_error;
// }
// else{
//     echo "Connection Established successfully";
// }
$sql="INSERT INTO school(school_name,school_code,school_city)
VALUES ('$sc_name','$sc_code','$sc_city')";
if($result=$conn->query($sql)){
    echo "Entry Added Successfully";
}
// else{
//     echo "Unable to add record" . $conn->error;
// }

?>