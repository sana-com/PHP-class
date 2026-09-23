<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter Radius:
    <input type="number" name="radius">
    <input type="submit" value="Calculate">
</form>

<?php
if (isset($_POST['radius'])) {
    $r = $_POST['radius'];

    $area = 3.14 * $r * $r;
    $circumference = 2 * 3.14 * $r;

    echo "Area of Circle: " . $area . "<br>";
    echo "Circumference of Circle: " . $circumference;
}
?>

</body>
</html>