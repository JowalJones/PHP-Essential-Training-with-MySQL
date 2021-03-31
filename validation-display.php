<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">   <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Validation Errors</title>
</head>

<body>
    <?php

    require_once('custom-validation-functions.php');
    $errors = array();
    
    // $errors = array(); //Accumulate all errors in array and display them once. 


    // // *. Presence ... ||empty ensure no blank values passed
    // $value = "";
    // if (!isset($value) || empty($value)) {
    //     $errors['value'] = "Value can't be blank";  //Associative array
    // }

    // //*2. String length 
    // //minimum lenght
    // $value = "axeae";
    // $min = 3;
    // if (strlen($value) < $min) {
    //     echo "Validation failed. Value too small <br/>";
    // }
    // //maximum length
    // $max = 6;
    // if (strlen($value) > $max) {
    //     echo "Validation failed value too long! <br/>";
    // }
    // //*3. Type 
    // //values will almost always be strings, unless specially set.
    // $value = "1";
    // if (!is_string($value)) {
    //     echo "Validation failed. Value not a string! <br/>";
    // }
    // //*4. Inclusion in a set 
    // $value = "Jones";
    // $set = array("Japhet", "Wafula", "Jones");
    // if (!in_array($value, $set)) {
    //     echo "Validation failed. User not registered! <br/>";
    // }
    // //* 5. Uniqueness
    // //requires database
    // //*6. Format -->
    // //use a regex on a string
    // //preg_match($regex, $subject)


    // if (strpos($value, "@") === false) { // faster than preg_match
    //     // echo "Validation failed. Incorrect format! <br/>";

    // }

    // //print_r($errors)

    ?>
    <?php
    // if (!empty($errors)) {
    //     //redirect to ("first_page.php") //*If we do this we lose all our errors!
    //     include("form.php");
    // } else {
    //     include("success.php");
    // }

    //*Use single page processing!
    //* Can put this function in functions page and the require it in forms. 
//     function form_errors($errors=array()){
//         $output = "";
//     if (!empty($errors)){
//         $output = "<div class=\"error\">";
//          $output .= "Please fix the following errors:";
//         $output .= "<ul>";
//         foreach ($errors as $key => $error){
//             $output .= "<li>{$error}</li>";
//         }
//         $output .= "</ul";
//         $output .= "</div>";
//     }
//     return $output;
// }

    ?>
    <?= form_errors($errors);
    ?>

</body>

</html>