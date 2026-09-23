
<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter Paragraph:<br>
    <textarea name="paragraph" rows="5" cols="50"></textarea>
    <br><br>

    Enter Search Word:
    <input type="text" name="word">
    <br><br>

    <input type="submit" value="Search">
</form>

<?php
if (isset($_POST['paragraph']) && isset($_POST['word'])) {

    $paragraph = $_POST['paragraph'];
    $word = $_POST['word'];

    $count = substr_count($paragraph, $word);

    echo "The word '$word' occurs $count times.";
}
?>

</body>
</html>