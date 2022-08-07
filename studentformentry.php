<div style="display:none ;"><?php
$conn=new mysqli("localhost","phpadmin","Default!@#$56","joining");
$sql="SELECT * FROM classrooms";
$result=$conn->query($sql);
// while($row=$result->fetch_assoc()){
//     echo $row['school_name'] . "<br>";
// }
?></div>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    
    <form id="studentform" enctype="multipart/form-data">
        <label for="School">Student Class: </label>
        <select class="form-control" name="class"> 
            <option selcted value="0">Select Class</option> 
            <?php
                
                    while($row=$result->fetch_assoc()){
                    echo '
                    
                    <option value="'.$row["classroom_pk"].'">'.$row["class_code"].'</option>
                    
                    ';
                    
                    }
                
            ?>
        </select><br><br>
        <label for="name">Student Name: </label><input type="text" name="student_name" id="name"><br><br>
        <label for="code">Student Age: </label><input type="text" name="student_age" id="age"><br><br>
        

        <input type="submit" >
    </form>
    <script>
        $("#studentform").submit(function (event) {
            event.preventDefault();
            var studentform = new FormData(this);
            $.ajax({
                url: "http://localhost/phppractice/studentform.php",
                type: "Post",
                crossDomain: true,
                data: studentform,
                processData: false, //add this
                contentType: false, //and this
                success: function (data) {
                    console.log(data);
                },
                error: function (xhr, exception) {
                    var msg = "";
                    msg = "Error:" + xhr.status + " " + xhr.responseText;
                }
            }); 
        // console.log("Record Entered Succesfully");
        });

    </script>
</body>
</html>