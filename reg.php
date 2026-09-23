
<!DOCTYPE html>
<html>
<body>

<h2>User Registration</h2>

<form method="post">

    Full Name:
    <input type="text" name="name">
    <br><br>

    Date of Birth:
    <input type="date" name="dob">
    <br><br>

    Email ID:
    <input type="text" name="email">
    <br><br>

    Mobile:
    <input type="text" name="mobile">
    <br><br>

    <input type="checkbox" name="agree">
    I agree to the Terms and Conditions
    <br><br>

    <input type="submit" name="submit" value="Register">

</form>

<?php

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    if (str_word_count($name) != 2) {
        echo "Full Name must contain two words.<br>";
    }

    $birthdate = new DateTime($dob);
    $today = new DateTime();
    $age = $today->diff($birthdate)->y;

    if ($age < 18) {
        echo "Age must be 18 or above.<br>";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Enter a valid Email ID.<br>";
    }

    if (!preg_match("/^[0-9]{10}$/", $mobile)) {
        echo "Mobile number must be exactly 10 digits.<br>";
    }

    if (!isset($_POST['agree'])) {
        echo "You must agree to the Terms and Conditions.<br>";
    }

    if (
        str_word_count($name) == 2 &&
        $age >= 18 &&
        filter_var($email, FILTER_VALIDATE_EMAIL) &&
        preg_match("/^[0-9]{10}$/", $mobile) &&
        isset($_POST['agree'])
    ) {
        echo "<br><b>Registration Successful!</b>";
    }
}

?>

</body>
</html>
