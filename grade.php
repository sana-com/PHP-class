
<!DOCTYPE html>
<html>
<body>

<form method="post" action="grade.php">
    Enter Marks: <input type="number" name="marks">
    <input type="submit" value="Calculate Grade">
</form>

<?php
if (isset($_POST['marks'])) {
    $marks = $_POST['marks'];

    if ($marks > 800 && $marks <= 1000) {
        echo "Grade: Class I";
    }
    elseif ($marks > 600 && $marks <= 800) {
        echo "Grade: Class II";
    }
    elseif ($marks > 400 && $marks <= 600) {
        echo "Grade: Class III";
    }
    else {
        echo "Grade: Fail";
    }
}
?>

</body>
</html>
