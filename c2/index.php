<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variable</title>
</head>
<body>
    

    <?php

        // Variable Name Rules : $var_name
        $myName = "Prothes Barai";
        $myRoll = 146;
        $isConnected = true;

        //echo "My Name is : " , $myName , ". And My College Roll is : " , $myRoll ,"<br>";
                                    // Or
        echo "My Name is : $myName . And My College Roll is : $myRoll <br>";
        echo "<h1>Boolean Output True is : $isConnected</h1>";
    
    ?>



    <?php
    
        // Variable Sensative Declaration
        $myName = "Prothes";
        $name = "myName";
        echo "$myName<br>";
        echo "$name<br>";
        echo $$name;  // Here Print is Prothes...... Cause $name = myName after $myName = Prothes cause here 2 $ sign; 
    
    ?>



    <h1>My Name is : <?php echo $myName; ?> . And My College Roll is : <?php echo $myRoll; ?></h1>




</body>
</html>