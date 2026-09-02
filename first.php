<!DOCTYPE html>
<html>
<head>
    <title>Number Range</title>
</head>
<body>

<form method="post" action="first.php">
    <label>Enter the number:</label>
    <input type="number" name="number" required>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $x = $_POST["number"];

    if ($x > 20 && $x < 50) {
        echo "true";
    } else {
        echo "false";
    }
}
?>

</body>
</html>
