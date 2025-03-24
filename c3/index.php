<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Operators</title>
</head>
<body>
    
    <center><h1>PHP Operators</h1></center>

    <?php
    
        $f_data = 100;
        $l_data = 200;
        $sumData = $f_data + $l_data;
        $mulData = $f_data * $l_data;
        $incementData = ++$f_data;

        echo "<center><h1>Sum = $sumData</h1></center>";
        echo "<center><h1>Mul = $mulData</h1></center>";
        echo "<center><h1>Increment = $incementData</h1></center>";

        if($f_data > $l_data){
            echo "<center><h1>First Data is Big</h1></center>";
        }else{
            echo "<center><h1>Last Data is Big</h1></center>";
        }

    ?>

</body>
</html>