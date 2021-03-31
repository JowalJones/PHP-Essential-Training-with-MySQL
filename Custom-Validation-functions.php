<?php
// *. Presence ... ||empty ensure no blank values passed
function form_errors($errors=array()){
    $output = "";
if (!empty($errors)){
    
    $output = "<div class=\"error\">";
    $output .= "<p style=\"color:blue;\">";
     $output .= "Please fix the following errors:";
    $output .= "<ul>";
    foreach ($errors as $key => $error){
        $output .= "<li style=\"color:indianred;\">{$error}</li>";
    }
    $output .= "</ul";
    $output .= "</p>";
    $output .= "</div>";
}
return $output;
}

function has_presence($value)
{
    return (!isset($value) || !empty($value));
}

//*2. String length 
//minimum lenght
function has_min_length($value, $min)
{
    return (strlen($value) >= $min);
}
//maximum length
function has_max_length($value, $max)
{
    return (strlen($value) <= $max);
}

//*4. Inclusion in a set 
function has_inclusion_in ($value, $set){
return (in_array($value, $set)); 
}

?>










<!-- It's good to take validations and place them in one file to deal with all validation functions and include them whenever needed.
<p>can even be used in multiple projects</p>
<P>Such a file is best to be just php, no html</P> -->