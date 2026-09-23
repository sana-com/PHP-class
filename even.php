<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter a Number:
    <input type="number" name="num">
    <input type="submit" value="Check">
</form>

<?php
if (isset($_POST['num'])) {
    $num = $_POST['num'];

    if ($num % 2 == 0) {
        echo "The number is Even";
    } else {
        echo "The number is Odd";
    }
}
?>

</body>
</html>