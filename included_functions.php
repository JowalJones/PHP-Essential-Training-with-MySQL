<?php
function hello($name)
{
    return "Habari zenu {$name}!";
}

function redirect_to($new_location)
{
    header("Location: " . $new_location);
    exit;
}
