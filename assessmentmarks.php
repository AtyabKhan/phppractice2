<?php
    $conn=new mysqli("localhost","phpadmin","Default!@#$56","joining");
    $sql="SELECT * FROM assessment_results";
    $result=$conn->query($sql);
    
    $mathsobt="";
    if (isset($_POST["math_obt"])) {
        $mathsobt=$_POST["math_obt"];
    }
    $mathstot="";
    if (isset($_POST["math_tot"])) {
        $mathstot=$_POST["math_tot"];
    }
    $phyobt="";
    if (isset($_POST["phy_obt"])) {
        $phyobt=$_POST["phy_obt"];
    }
    $phytot="";
    if (isset($_POST["phy_tot"])) {
        $phytot=$_POST["phy_tot"];
    }
    $chemobt="";
    if (isset($_POST["chem_obt"])) {
        $chemobt=$_POST["chem_obt"];
    }
    $chemtot="";
    if (isset($_POST["chem_tot"])) {
        $chemtot=$_POST["chem_tot"];
    }
    $csobt="";
    if (isset($_POST["cs_obt"])) {
        $csobt=$_POST["cs_obt"];
    }
    $cstot="";
    if (isset($_POST["cs_tot"])) {
        $cstot=$_POST["cs_tot"];
    }
    $student="";
    if (isset($_POST["student"])) {
        $student=$_POST["student"];
    }
    print_r($class);
    $sql="INSERT INTO assessment_results(student_fk,maths_obt,maths_total,phy_obt,phy_total,che_obt,che_total,cs_obt,cs_total)
    VALUES ('$student','$mathsobt','$mathstot','$phyobt','$phytot','$chemobt','$chemtot','$csobt','$cstot')";
    if($result=$conn->query($sql)){
    echo "Entry Added Successfully";
    }
?>