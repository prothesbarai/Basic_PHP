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
            string %d for int %f for double %b for binary %o for octal %x or %X fox Hexadecimal %c for ASCCI character use kore....[%s,%d,%f = name is placeholder / specifier]
        */

        // echo deye o kora jay but sejonno concartination korte hobe string

        // Here a Big Example
        $first_name = "prothes";
        $last_name = "barai";
        $amount = 100;
        $price = 10.99;
        $show_names1 = "
            <div>
                <h1>%s %s</h1>
            </div>
        ";
        $show_names2 = "
            <div>
                <h1>%2\$s %1\$s</h1> 
            </div>
        ";// When Change The position of variable

        $show_amount = "
            <h1>Your amount is %1\$d . And Balance is : %1\$d</h1>
        ";// Same Variable use Multiple Place

        $show_price1 = "
            <h1>This Price is %1\$d . And Balance is : %1\$d</h1>
        ";// Float to Integer  [%d == %.0f is same jinis but accurate 100% answer purity is %.0f]
        
        $show_price2 = "
            <h1>This Price is %1\$.2f . And Balance is : %1\$.2f</h1>
        ";// After . to value show

        printf($show_names1,ucwords($first_name),ucwords($last_name));
        printf($show_names2,$first_name,$last_name);
        printf($show_amount,$amount);
        printf($show_price1,$price); 
        printf($show_price2,$price); 
    ?>




    
</body>
</html>