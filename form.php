        <?php
            $conn = new mysqli("localhost","phpadmin","Default!@#$56","phpdb");
            // if($conn->connect_error){
            //     die("Error Establishing DB connection" . "<br>" .$conn->connect_errno . "<br>" . $conn->connect_error);
            // }
            // else{
            //     echo "Connection established successfully";
            // }
            // $sql="INSERT INTO students(name,age)
            // VALUES('Jane',23)";
            // $result=$conn->query($sql);
            
            // if($conn->query($sql)===TRUE){
            //     echo "Value added successfully";
            // }
            // else{
            //     echo "Issue adding the value" . $conn->error;
            // }
            $last_id=$conn->insert_id;
            $sql2="UPDATE students  WHERE id=5 SET name='Jennifer'";
            $result=$conn->query($sql2);
            echo "<br>";
            while($row=$result->fetch_assoc()){
                echo $row["id"] . " " . $row["name"] . "<br>";
            }
        ?>