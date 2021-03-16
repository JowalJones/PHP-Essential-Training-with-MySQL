<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validations</title>
</head>

<body>
    <?php
    // *. Presence ... ||empty ensure no blank values passed
    $value = "n";
    if (!isset($value) || empty($value)) {
        echo "Validation failed. Value not set or empty<br/>";
    }

    //*2. String length 
    //minimum lenght
    $value = "axeae";
    $min = 3;
    if (strlen($value) < $min) {
        echo "Validation failed. Value too small <br/>";
    }
    //maximum length
    $max = 6;
    if (strlen($value) > $max) {
        echo "Validation failed value too long! <br/>";
    }
    //*3. Type 
    //values will almost always be strings, unless specially set.
    $value="1";
    if (!is_string($value)) {
        echo "Validation failed. Value not a string! <br/>";
    }
    //*4. Inclusion in a set 
    $value = "Jones";
    $set = array("Japhet", "Wafula", "Jones");
    if (!in_array($value, $set)){
        echo "Validation failed. User not registered! <br/>";
    }
    //* 5. Uniqueness
    //requires database
    //*6. Format -->
    //use a regex on a string
    //preg_match($regex, $subject)
    if (preg_match("/PHP/", "PHP is fun.")){
        echo "A match was found. <br/>";
    } else {
        echo "A match was not found.<br/>";
    }
    $value = "jowaljones.com";
    if (!preg_match("/@/", $value)){
        echo "Validation failed. Incorrect format! <br/>";

    }

    if (strpos($value, "@")===false){// faster than preg_match
        echo "Validation failed. Incorrect format! <br/>";

    }

    ?>


</body>

</html>





<!-- Common validations:
1. Presence
2. String length 
3. Type 
4. Inclusion in a set 
5. Uniqueness
6. Format -->