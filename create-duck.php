<!DOCTYPE html>
<html lang="en">

<?php $page_title = "Create A Duck";
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

    <!-- <header> -->
    <?php include('./components/nav.php'); ?>
    <!-- </header> -->

    <h1 class="home-page-title">Create A Duck!</h1>
    <h3 class="home-page-subtitle">Describe Below</h3>
</body>
</html>

<!-- FORM -->
<form class="form-style" action="./create-duck.php" method="POST">
    <p>NAME</p>
    <input class="form-item" type="text" />
    <p>FAVORITE FOODS</p>
    <input class="form-item" type="text" />
    <p>PROFILE IMAGE</p>
    <input class="form-item" type="file" />
    <p>DUCK BIO</p>
    <textarea class="form-item" name="" id="" cols="30" rows="10"></textarea>
    <!-- <input type="color" />
    <input type="date" />
    <input type="number" />
    <input type="tel" /> -->
    <input type="submit" value="Send form" />
</form>

    <!-- <footer> -->
        <?php include('./components/footer.php'); ?>
    <!-- </footer> -->