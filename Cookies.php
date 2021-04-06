<?php

//*Remember: Setting cookies must be before *any* HTML output, unless output bufferring is on. 
$name="test";
$value= "Helllllo"; 
$expire = time()+(60*60*24*7); //cookie will last for one week.
setcookie($name, $value, $expire);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKIES</title>

</head>
<body>
Page to set and read cookie

<pre>
    <?php
    //print_r($_COOKIE);

    $test = isset($_COOKIE["test"]) ? $_COOKIE["test"] : "";
     echo $test;
    // if (isset($_COOKIE["test"])){
    // $test = $_COOKIE["test"];
    // }else{
    // $test = "";
    // }
    // echo $test;

    ?>
</pre>

</body>
</html>