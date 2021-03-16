<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Links and URLs</title>
</head>
<body>
    </br>
<?php //What to use when

$url_page= "php/created/page/url.php";
$param1 = "This is a string with < >";
$param2 = "$#?*$[]+ are bad characters";
$linktext ="<Click> & learn more";

$url = "http://localhost/";
$url .= rawurlencode($url_page);
$url .= "?" . "param1=" . urlencode($param1);
$url .= "&" . "param2=" . urlencode($param2);
?>

<a href="<?php echo htmlspecialchars($url); ?>">
    <?php echo htmlspecialchars($linktext); ?>
    </a>


</body>
</html>