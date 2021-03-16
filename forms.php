<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="form-processing.php"  method="post">
    Username: <input type="text" name="username" value=""/><br/><br/>
    Password: <input type="password" name="password" value=""/><br/>
    <br/>
    <input type="submit" name="submit" value="Submit" />
    </form>


</body>
</html>








<!-- $_POST requests used by forms
$_GET requests used by urls
Forms take two pages... one form with the webpage ready to be filled out, and a second page to do the processing of the form.  -->