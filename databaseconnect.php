<?php

$conn=new mysqli('localhost','oot','','test');
if($conn->connect_error){
    die("Error Establishing Databse Connection" . $conn->connect_error);
}
else{
    echo "Connection Established Successfully";
}


?>