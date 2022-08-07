<html>
    <head>
        <title>Assessment</title>
    </head>
    <body>
        <?php
        // Q1 Start
        $recTemp=[78,60,62,68,71,68,73,85,66,64,76,63,75,76,73,68,62,73,72,65,74,62,62,65,64,68,73,75,79,73];
        $sum=0;
        for($x=0;$x<count($recTemp);$x++){
            $sum=$sum+$recTemp[$x];
            $avg=$sum/count($recTemp);
        }
        echo "Average is: $avg";
        echo "<br>";
        rsort($recTemp);
        echo "Five highest temperatures are: ";
        for($x=0;$x<5;$x++){
            echo $recTemp[$x] .", ";
        }
        echo "<br>";
        echo "Five lowest temperatures are: ";
        sort($recTemp);
        for($x=0;$x<5;$x++){
            echo $recTemp[$x] .", ";
        }

        // Q1 End
        echo "<br>";
        //Q2 Start
        $a1=[1,2,3];
        $temp=$a1[1];
        $a1[1]="$";
        $a1[3]=$a1[3-1];
        $a1[2]=$temp;
        print_r($a1);
        //Q2 End
        echo "<br>";
        //Q3 Start
        for($x=1;$x<=10;$x++){
            echo $x;
            if($x<10){
                echo "-";
            }
        }

        //Q3 End
        echo "<br>";
        //Q4 Start
        $charcount=["B","I","L","A","L","A","K","H","A","N"];
        $count=0;
        for($x=0;$x<count($charcount);$x++){
            if($charcount[$x]=="A"){
                $count++;
            }
        }
        echo "Total number of A's in the text is: $count";
        //Q4 End
        echo "<br>";
        //Q5 Start
        $bilal=["B","I","L","A","L"];
        for($x=count($bilal);$x>0;$x--){
            echo $bilal[$x];
        }
        //Q5 End
        echo "<br>";
        //Q6 Start
        $units =100;
        if($units<=50){
            $bill=3.50*$units;
        }
        elseif($units<=150){
            $bill=4.50*$units;
        }
        elseif($units<=250){
            $bill=5.20*$units;
        }
        else{
            $bill=6.50*$units;
        }
        echo $bill;
        ?>
    </body>
</html>