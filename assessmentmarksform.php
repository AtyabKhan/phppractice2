<div style="display:none ;"><?php
$conn=new mysqli("localhost","phpadmin","Default!@#$56","joining");
$sql="SELECT * FROM students";
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
    
    <form id="assessmentform" enctype="multipart/form-data">
        <label for="student">Student Name: </label>
        <select class="form-control" name="student"> 
            <option selcted value="0">Select Student</option> 
            <?php
                
                    while($row=$result->fetch_assoc()){
                    echo '
                    
                    <option value="'.$row["student_pk"].'">'.$row["student_name"].'</option>
                    
                    ';
                    
                    }
                
            ?>
        </select><br><br>
        <!-- maths_obt	maths_total	phy_obt	phy_total	che_obt	che_total	cs_obt	cs_total -->
        <label for="mathobt">Obtained Marks in Maths: </label><input type="text" name="math_obt" id="mathobt"><br><br>
        <label for="mathtot">Total Marks of Maths: </label><input type="text" name="math_tot" id="mathtot"><br><br>
        <label for="phyobt">Obtained Marks in Physics: </label><input type="text" name="phy_obt" id="phyobt"><br><br>
        <label for="phytot">Total Marks of Physics: </label><input type="text" name="phy_tot" id="phytot"><br><br>
        <label for="chemobt">Obtained Marks in Chemistry: </label><input type="text" name="chem_obt" id="chemobt"><br><br>
        <label for="chemtot">Total Marks of Chemistry: </label><input type="text" name="chem_tot" id="chemtot"><br><br>
        <label for="csobt">Obtained Marks in CS: </label><input type="text" name="cs_obt" id="csobt"><br><br>
        <label for="cstot">Total Marks of CS: </label><input type="text" name="cs_tot" id="cstot"><br><br>

        <input type="submit" >
    </form>
    <script>
        $("#assessmentform").submit(function (event) {
            event.preventDefault();
            var assessmentform = new FormData(this);
            $.ajax({
                url: "http://localhost/phppractice/assessmentmarks.php",
                type: "Post",
                crossDomain: true,
                data: assessmentform,
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