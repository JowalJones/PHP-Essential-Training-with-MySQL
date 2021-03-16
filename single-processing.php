<?php
require_once("included_functions.php");

if (isset($_POST['submit'])) {
    //form was submitted
     $username = $_POST["username"];
        $password = $_POST["password"];
    if ($username == "wafula" && $password == "1234") {
        //successful login
        redirect_to("basic.html");
    } else {
        
        $message = "There were some errors";
    }
} else {
    $username = "";
    $message = "Please log in to enjoy our services <br/>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single-page form processing</title>
</head>

<body>

    <?php
    echo $message;
    ?> <br />

    <form action="single-processing.php" method="post">
        Username: <input type="text" name="username" value="<?= htmlspecialchars($username); ?>" /><br /><br />
        Password: <input type="password" name="password" value="" /><br />
        <br />
        <input type="submit" name="submit" value="Submit" />
    </form>

</body>

</html>

<!-- All logic related to the form is in one file
redisplay form if there is errors:
Easier to return errors
populate fields with previous values
Form submits to itself! 
Always use htmlspecialchars before dispalying any data gien by users-->