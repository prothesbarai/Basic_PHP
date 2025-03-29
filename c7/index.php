<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printf() PHP Funtion</title>
    <style>
        span{
            color:red;
            font-size: 40px;
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>

    <?php
        $title = "
            <span>
                Printf() PHP Funtion
            </span>
        ";

        echo "<span>Echo vs</span> $title";


        // Php er majhe Word er first word capitalize korar jonno akta function use kora hoy ucwords() function
        $names = "prothes";
        echo $names;
        echo "<br>";
        echo ucwords($names);
    ?>

        <hr>
        <hr>


    <?php
        $car_name = "tTR500";
        $car_price = "$1300 USD";
        /*
            Difference Between echo and printf()
        */
        echo "For echo : "."The car name is ".$car_name.". And this car price is : ".$car_price."<br>";
        printf("For printf : The car name is %s . And this car price is : %s, and it's provide is %s company",ucwords($car_name),$car_price,"Tesla");
    ?>

        
    <?php
        /*
            echo deya only akta veriable print kora jay but function with variable print possiable noy cause echo function 
            name ke simple string count kore... otherhand printf() er majhe function with variable use kora jay.. and %s for 
            string %d for int %f for double use kore....[%s,%d,%f = name is placeholder]
        */

        // Here a Big Example
        $first_name = "prothes";
        $last_name = "barai";
        $show_names = "
            <div>
                <h1>%s %s</h1>
            </div>
        ";
        printf($show_names,ucwords($first_name),ucwords($last_name));
    ?>




    
</body>
</html>