<!DOCTYPE html>
<html>
<head>
    <title>User Name</title>
</head>
<body>

<form method="post">
    Enter Your Name:
    <input type="text" name="username">
    <input type="submit" value="Submit">
</form>

</body>
</html>

<?php
$a= $_POST['username'];
echo $a;
?>