<?php  //header should be first thing!!! No space before it!!
    header("HTTP 1.1/ 404 Not Found");
    header ("X-Powered-By: none of your business");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Headers</title>
</head>
<body>
 <!-- This won't work... -->
    <!-- <?php
    //header("HTTP 1.1/ 404 Not Found");
    ?> -->
    <pre>
    <?php
    print_r (headers_list());
    ?>
    </pre>
</body>
</html>