<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    ?>
</body>
</html>


With output bufferring, we can avoid headers and redirections from appearing at the very begining. 
Output buffering is like a measuring glass that takes php code to a certain point then sends it to the webserver. 
Pays some performance penalty; though almost always negligible
Default set to 4096 in php.ini

.ob_start() Starts the buffer.... Has to come before any comment!!
.ob_end_flush() Ends the buffer.