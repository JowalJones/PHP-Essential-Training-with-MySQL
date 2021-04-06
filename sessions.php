<?php 
//sessions use cookies and cookies use headers.
//must start before any HTML output, unless output buffering is on. 


//Sessions are server-side... more powerful!

session_start(); 

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    
<?php 
$_SESSION["first_name"] = "Wafula";
$name = $_SESSION["first_name"];
echo $name;

//*With sessions, unlike cookies, we can set and read values in one instance, since we don't have to go back to browser to retrieve values. 

?>

</body>
</html>