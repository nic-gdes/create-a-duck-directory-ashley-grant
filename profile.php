<?php

if (isset($_GET['id'])) {
    // Assign a variable to the id
    $id = htmlspecialchars($_GET['id']);

    // Get the duck info from the database
        // Connect to db
        require('./config/db.php');

        // Create a query to selecrt the intended duck from the db
        $sql = "SELECT id, name, favorite_foods, bio, img_src FROM ducks WHERE id=$id";
        $result = mysqli_query($conn, $sql);

        $duck = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        mysqli_close($conn);

}

?>

<!DOCTYPE html>
<html lang="en">

<!-- <head> -->
    <?php
        $page_title = "Profile";
        include('./components/head.php');
    ?>
<!-- </head> -->

<body>

    <!-- <header> -->
        <?php include('./components/nav.php'); ?>
    <!-- </header> -->

<main>
        <h1 class="home-page-title">Duck Profile</h1>
        <h3 class="home-page-subtitle">Your New Duck is Added Below!</h3>
        <div class="grid">
            <div class="grid-item">
                <h1><?php echo $duck['name']; ?></h1>
                <img class="grid-img" src="<?php echo $duck['img_src']; ?>" alt="duck">
                <p><?php echo $duck['bio']; ?></p>
                <p><h3>Favorite Foods:</h3><?php echo $duck['favorite_foods']; ?></p>
            </div>
            