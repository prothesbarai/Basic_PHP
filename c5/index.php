<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>echo & Print</title>
</head>
<body>


    <?php
        /*
            echo and print are basically major two different .. 1. print function always return 1 but other hand echo return nothing . 2. echo is faster than print function
        */

        $v1 = "Prothes";
        echo $v1."<br>";
        print $v1."<br><hr>";
        /*
            If print function return 1 value then we store the value here
        */

        $store = print $v1."<br>";
        echo $store;

    ?>    


    <!-- HTML CSS AND PHP -->
     <?php
        echo "<h1 style=\"color:red;\">This is HTML CSS PHP use Lines. Here use with scape sequence in inline css</h1>";
     ?>

    




























</body>
</html>