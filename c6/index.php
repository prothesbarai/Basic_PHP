<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Var Dump</title>
</head>
<body>

    <center>
        <h1>PHP Var Dump</h1>
    </center>


    <?php
    
        $name = "Prothes";
        $num =  50;
        echo $name."<br>";
        echo $num."<br>";

        var_dump($name); // Var_dump using for variable length and type check 
        echo "<br>";
        var_dump($num); // Var_dump using for variable length and type check 
            // OR
            echo "<br>";
        var_dump($name,$num);
    ?>
    
</body>
</html>