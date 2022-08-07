<div style="display:none ;"><?php
$conn=new mysqli("localhost","phpadmin","Default!@#$56","joining");
$sql="SELECT * FROM school";
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
    
    <form id="classroomform" enctype="multipart/form-data">
        <label for="School">School Name: </label>
        <select class="form-control" name="school"> 
            <option selcted value="0">School Name</option> 
            <?php
                
                    while($row=$result->fetch_assoc()){
                    echo '
                    
                    <option value="'.$row["school_pk"].'">'.$row["school_name"].'</option>
                    
                    ';
                    
                    }
                
            ?>
        </select><br><br>
        <label for="name">Classroom Name: </label><input type="text" name="classroom_name" id="name"><br><br>
        <label for="code">Classroom Code: </label><input type="text" name="class_code" id="code"><br><br>
        <label for="section">Class Section: </label><input type="text" name="section" id="section"><br><br>

        <input type="submit" >
    </form>
    <script>
        $("#classroomform").submit(function (event) {
            event.preventDefault();
            var classroomformvar = new FormData(this);
            $.ajax({
                url: "http://localhost/phppractice/classroomformstorage.php",
                type: "Post",
                crossDomain: true,
                data: classroomformvar,
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