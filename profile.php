<!DOCTYPE html>
<html lang="en">

<?php $page_title = "Contact";
    include('./components/head.php');
?>

<?php
if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST(['name']));
    $food = htmlspecialchars($_POST(['food']));//this $email comes from the input name
    $message = htmlspecialchars($_POST(['message']));

    echo $name . ", " . $food . ", " . $message;
}
?>

<body>
    <h1>Profile Page</h1>
    <?php include('./components/nav.php'); ?>
</body>
</html>

<!-- Bryan made a form.html with this on it below -->
<form action="./contact.php" method="POST">
    <input type="text" />
    <input type="text" />
    <input type="file" />
    <textarea name="" id="" cols="30" rows="10"></textarea>
    <!-- <input type="color" />
    <input type="date" />
    <input type="number" />
    <input type="tel" /> -->
    <input type="submit" value="Send form" />
</form>

<?php include('./components/footer.php'); ?>