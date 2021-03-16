<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Processing</title>
</head>

<body>
    <pre>
    <?php
    print_r($_POST);
    ?>

    </pre>
    <br />
  

    <br />
    <?php
    //Even better way to detect form submission
    if (isset($_POST['submit'])) {
        echo "form was submitted";
        
    }
    ?>

</body>

</html>
<!-- 
DETECTING FORM SUBMiSSION
When you load form processing direct, you need to check that the key values being expected b the code are present.
You can use isset() -- Good way to set default values
Better alternatie to isset is using the ternary operator-->