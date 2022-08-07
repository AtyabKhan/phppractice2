<html>
    <head>
        <title>Test Site</title>
    </head>
    <body>
           
        <?php
            // $colors= array("Red","Green","Blue","Yellow");
            // for($i=0; $i<count($colors);$i++){
            //     echo $colors[$i];
            //     echo "<br>";
            // }
            // $age=array("Mark"=>25,"Joe"=>22,"Jane"=>23);
            // foreach($age as $x =>$x_value){
            //     echo $x. "  is ".$x_value. " years old.";
            //     echo "<br>";
            // }
            $emp=[
                [1,"Jonathan","Manager",70000],
                [2,"Mark","Assistant Manager", 50000],
                
            ];
            
            for($x=0;$x<count($emp);$x++){
                for($y=0;$y<4;$y++){
                    echo $emp[$x][$y] ." ";
                }
                echo "<br>";
            }
            
            
            
            
            ?>
            
           
    </body>
</html>