<?php
require_once("Custom-Validation-functions.php");
require_once("included_functions.php");

$errors = array();
$message ="";

if (isset($_POST['submit'])) {
    //form was submitted
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    //Validations
    $fields_required = array("username", "password");
    foreach($fields_required as $field){
        $value= trim($_POST[$field]);
    
    if (!has_presence($value)) {
        $errors["$field"] = ucfirst($field). " can't be BLANK!";
    }}
    if (empty($errors)) {

        // Try to login part
        if ($username == "wafula" && $password == "1234") {
            //successful login
            redirect_to("basic.html");
        } else {

            $message = "Username ? Password Do not match";
        }
    } else {
        $username = "";
        $message = "Please log in to enjoy our services <br/>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single-page form processing WITH VALIDATION</title>
</head>

<body>

    <?php
    echo $message;

    ?> <br />
    <?= form_errors($errors); ?>

    <form action="form-with-validation.php" method="post">
        Username: <input type="text" name="username" value="<?= htmlspecialchars($username); ?>" /><br /><br />
        Password: <input type="password" name="password" value="" /><br />
        <br />
        <input type="submit" name="submit" value="Submit" />
    </form>

</body>

</html>