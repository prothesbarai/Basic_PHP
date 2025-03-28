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
        $car_name = "Tesla";
        $car_price = "$1300 USD";

        /*
            Difference Between echo and printf()
        */

        echo "For echo : "."The car name is ".$car_name.". And this car price is : ".$car_price."<br>";
        printf("For printf : The car name is %s . And this car price is : %s",$car_name,$car_price);


    ?>






    
</body>
</html>