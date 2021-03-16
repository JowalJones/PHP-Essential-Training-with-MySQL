<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>False Positives</title>
</head>

<body>
    <?php

    function is_equal($value1, $value2)
    {
        $output = "{$value1} == {$value2}: ";
        if ($value1 == $value2) {
            $output .= "true<br/>";
        } else {
            $output .= "false<br/>";
        }
        return $output;
    }


    //*Every single line here will return true!! All these things are considered equivalent in php. PHP does type juggling in order to compare stuff


    echo is_equal(0, false);
    echo is_equal(4, true);
    echo is_equal(0, null);
    echo is_equal(0, "0");
    echo is_equal(0, "");
    echo is_equal(0, "a");
    echo is_equal("1", "01");
    echo is_equal("", null);
    echo is_equal(3, "3 dogs");
    echo is_equal(100, "1e2");
    echo is_equal(100, 100.00);
    echo is_equal("abc", true);
    echo is_equal("123", " 123");
    echo is_equal("123", "+0123");
    ?>
<br/> <br/>
    <?php

    //*Change is_equal to is_exact
    //*use triple equals instead of double equal. 

    function is_exact($value1, $value2)
    {
        $output = "{$value1} === {$value2}: ";
        if ($value1 === $value2) {
            $output .= "true<br/>";
        } else {
            $output .= "false<br/>";
        }
        return $output;
    }


    //*Every single line here will return false!!


    echo is_exact(0, false);
    echo is_exact(4, true);
    echo is_exact(0, null);
    echo is_exact(0, "0");
    echo is_exact(0, "");
    echo is_exact(0, "a");
    echo is_exact("1", "01");
    echo is_exact("", null);
    echo is_exact(3, "3 dogs");
    echo is_exact(100, "1e2");
    echo is_exact(100, 100.00);
    echo is_exact("abc", true);
    echo is_exact("123", " 123");
    echo is_exact("123", "+0123");
    ?>

<br/>
</body>

</html>


<!-- Validations can fail coz of logic and we may not know when it happens...
False positives... -->

Type juggling during comparisons.
<li>string vs. null: converts null to ""</li>
<li>boolean vs any other: converts other to boolean</li>
<li>number vs other: converts other to number</li>
Can do type switching yourself. <br/><br/>

<strong>empty()</strong>  Falsies. 
<li>""</li>
<li>0</li>
<li>"0"</li> string with value 0
<li>null</li>
<li>false</li>
<li>array()</li> Empty array
<br/>
That is why we use ||empty($value) in validation.php!!

<br/>
<strong>Important for:</strong>
<li>Enter number of children, can be zero</li>
<li>Select options where one of selections might be number zero</li>
<li>radio buttons: choosing between true and false</li>
<li>Checkboxes which send zero if unchecked, 1 if checked. </li>

<strong>Dealing with multiple spaces</strong>
<p>a string of spaces is a truthy. We must guard against submission of spaces</p>
<p>We can do this by using trim() function to our input</p>
<p>$value = trim ("   ");</p>
<p>Be careful with basic operators <?php echo htmlspecialchars("<, <=, >, >=, &&, ||"); ?> </p>
