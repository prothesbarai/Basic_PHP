<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Constant</title>
</head>
<body>
    
    <center>
        <h1>PHP Constant</h1>
    </center>

    <?php
        // Here Variable Value Changable And Priority Purpose variable Printed
        $v1 = "Prothes";
        echo "$v1 ";
        $v1 = "Barai";
        echo $v1;
        echo "<br>";

        // Here constant value
        define("key","Value");
        define("keys","Prothes");
        $age = 26;
        echo key;
        echo "<br>";
        echo keys."<br>";
        echo "My Name is : ".keys.". And My age is : ".$age;
        
    ?>

</body>
</html>