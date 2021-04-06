<?php

//*Remember: Setting cookies must be before *any* HTML output, unless output bufferring is on. 

//*Will need to refresh twice for it to go. 
$name="test";
$value= "Hello"; 
$expire = time()+(60*60*24*7); //cookie will last for one week.
setcookie($name, $value, $expire);

//setcookie($name); 

//setcookie($name, null, $expire); 

//setcookie($name, $value, time() - 3600);

//Kevin's recommendation for unsetting

setcookie($name, null, time() - 3600);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNSET COOKIES</title>

</head>
<body>
Page to set, unset and read cookie

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

<!-- Do not unset cookies using the unset($_COOKIE["user_id"]); function. 
This is because these are the cookies that came in the PREVIOUS request. 

RIGHT WAY!
-setcookie($name, null);
Setcookie($name) with no value inside will empty out the cookie, not good way. 
Can also unset cookie by setting expiration date to the past, minus time.
-setcookie($name, $value, (time() - 3600));

You can also use both null and past expiration.  -->
