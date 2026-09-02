<!DOCTYPE html>
<html>
<head>
    <title>Nearest Number to 100</title>
</head>
<body>

<form method="post" action="">
    <label>Enter first number:</label>
    <input type="number" name="num1" required>
    <br><br>

    <label>Enter second number:</label>
    <input type="number" name="num2" required>
    <br><br>

    <input type="submit" value="Check">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    $diff1 = abs(100 - $num1);
    $diff2 = abs(100 - $num2);

    if ($diff1 == $diff2) {
        echo "Result: 0";
    } elseif ($diff1 < $diff2) {
        echo "Result: $num1";
    } else {
        echo "Result: $num2";
    }
}

?>

</body>
</html>
