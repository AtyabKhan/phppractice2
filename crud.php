<html>
    <head>
        <title>Test Site</title>
    </head>
    <body>
           

    
        <?php
            $conn = new mysqli("localhost","phpadmin","Default!@#$56","phpdb");
            if($conn->connect_error){
                die("Error in establishing Database Connection: " . $conn->connect_error);
            }
            else{
                echo "Connection established successfully";
            }
            // $sql="SELECT * FROM students WHERE firstname='Atyab'";
            
            // // $result=$conn->query($sql);
            
            // if($conn->query($sql) === TRUE){
            //     echo "Script executed successfuly";
            // }
            // else{
            //     echo "Error in executing the script" . $conn->error;
            // }
            // $sql = "ALTER TABLE students ADD city VARCHAR(30)";
            
            // if ($conn->query($sql)=== TRUE) {
            //   echo "Table Altered successfully";
            // } else {
            //   echo "Error: " . $sql . "<br>" . $conn->error;
            // }
            
            ?>
            
           
    </body>
</html>