<html>
    <head>
        <title>Array Operations</title>
    </head>
    <body>
        <?php
            // // Array Splitting

            // $colors= array("Red","Green","Blue","Yellow");
            // echo "<pre>";
            // print_r(array_chunk($colors,2));
            // echo "</pre>";
            
            // // Array Merge
            
            // $colors= array("Red","Green","Blue","Yellow");
            // $cars=["Volvo","Tesla","Chevrolet"];
            // echo "<pre>";
            // print_r(array_merge($colors,$cars));
            // echo "</pre>";

            // // Array Push

            // $colors= ["Red","Green","Blue","Yellow"];
            // array_push($colors,"Magenta","Cyan");
            // print_r($colors);

            // //Array Pop

            // $colors= ["Red","Green","Blue","Yellow"];
            // array_pop($colors);
            // print_r($colors);

            // //Array Search

            // $colors= ["Red","Green","Blue","Yellow"];
            // print_r(array_search("Yellow",$colors));
            
            // $a1=[1,2,3];
            // $temp=$a1[1];
            // $a1[1]="$";
            // $a1[3]=$a1[3-1];
            // $a1[2]=$temp;
            // print_r($a1);
        // $arrTest=[10,11,12];
        // for($x=0;$x<count($arrTest);$x++){
        //     echo $arrTest[$x];
        // }
        $pizzas = [
            ['type' => 'hawaiian', 'base' => 'cheesy crust'],
            ['type' => 'volcano', 'base' => 'garlic crust'],
            ['type' => 'veg supreme', 'base' => 'thin & crispy']
          ];
          $age=23;
      $name='Atyab';
      $assoc_arr = [
        'pizzas' => $pizzas,
        'name' => $name,
        'age' => $age
      ];
    //   return ('pizzas', [
    //     'pizzas' => $pizzas,
    //     'name' => $name,
    //     'age' => $age
    //     ]);
    echo "<pre>";
    print_r($pizzas['hawaiian']);
    echo "</pre>";
        ?>
    </body>
</html>