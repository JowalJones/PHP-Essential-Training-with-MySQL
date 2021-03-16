<?php
//This is how you redirect to a new page
//can also wrap into a function:

function redirect_to($new_location){
    header("Location: " . $new_location);
    exit; //prevent sending data below this.
}
$logged_in = $_GET['logged_in']; 
if ($logged_in == "1")   {
redirect_to("basic.html"); //can also proide full external url
} else {
    redirect_to("http://www.twitter.com");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Redirection</title>
</head>
<body>
    
</body>
</html>

Page redirection:
Start with header at the top
Being able to send user to a different page.
We can use 302 Redirect with:
HTTP .1.1/302 Found 
/Location:path

header("Location: login.php");